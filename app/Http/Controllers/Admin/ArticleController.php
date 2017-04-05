<?php
namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Article;
use App\Theme;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('admin/article/article')->with(compact('articles'));
    }

    public function create()
    {
        $themes = Theme::all();
        return view('admin.article.create-article')->with(compact('themes'));
    }
        
    public function store(ArticleRequest $request)
    {
        $article = new Article($request->except('_token'));

        $article->titre = $request->input('titre');
        $article->resume = $request->input('resume');
        $article->contenu = $request->input('contenu');

        $destinationPath = public_path() . '/uploads/img';
        $extension = $request->file('image')->getClientOriginalExtension(); 
        $fileName = hash('sha256', mt_rand()) .'.'.$extension;        
        $request->file('image')->move($destinationPath, $fileName);
        $article->image = $fileName;

        $article->created_at = Carbon::now();
        $article->visible = 0;
        $article->save();    
    }

    public function show(Article $article)
    {
        return view('admin/article/article');   
    }

    public function edit(Article $article)
    {
        $themes = Theme::all();
        return view(('admin.article.create-article'), compact('article','themes'));
    }

    public function update(ArticleRequest $request, Article $article)
    {
        $article->titre = $request->input('titre');
        $article->resume = $request->input('resume');
        $article->contenu = $request->input('contenu');
        
        $destinationPath = public_path() . '/uploads/img';
        $extension = $request->file('image')->getClientOriginalExtension(); 
        $fileName = hash('sha256', mt_rand()) .'.'.$extension; 
                
        $request->file('image')->move($destinationPath, $fileName);

        $article->updated_at = \Carbon::now();
        $article->photo = $fileName;
        $article ->save();

        return redirect('admin/article')->with('success', $article->titre . ' has been Updated Successfully');
        
    }

    public function setVisibleTrue(Article $article)
    {
        $article->visible = 1;
        $article ->save();

        return redirect('admin/article')->with('success', $article->titre . ' est maintenant visible sur votre site');
           
    }

    public function destroy(Article $article)
    {
        $article->delete_at = \Carbon::now();
        $article ->save();

        return redirect('admin/article')->with('success', $article->titre . ' has been deleted Successfully');
           
    }
}