<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Interview;
use App\Theme;
use App\Http\Requests;
use App\Http\Requests\InterviewRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class InterviewController extends Controller
{
    public function index()
    {
        $interviews = Interview::all();
        return view('admin/interview/interview')->with(compact('interviews'));
    }

    public function create()
    {
        $themes = Theme::all();
        return view('admin/interview/create-interview')->with(compact('themes'));
    }

    public function store(Request $request)
    {
        $interview = new Interview($request->except('_token'));

        $interview->titre = $request->input('titre');
        $interview->resume = $request->input('resume');
        $interview->video = $request->input('video'); 
        $destinationPath = public_path() . '/uploads/img';
        $extension = $request->file('image')->getClientOriginalExtension(); 
        $fileName = hash('sha256', mt_rand()) .'.'.$extension; 
        $request->file('image')->move($destinationPath, $fileName);
        $interview->image = $fileName;
        $interview->created_at = Carbon::now();
        $interview->visible = 0;
        $interview->save();
    }

    public function show(Interview $interview)
    {
        return view('admin/interview/interview');
    }

    public function edit(Interview $interview)
    {
        return view('admin/interview/create-interview')->with(compact('interview'));
    }

    public function update(InterviewRequest $request, Interview $interview)
    {
        $interview->titre = $request->input('titre');
        $interview->resume = $request->input('resume');
        $interview->video = $request->input('video');
        $interview->updated_at = \Carbon::now();
        $interview->save();

        return redirect('admin/interview');
    }

    public function destroy(Interview $interview)
    {
        $interview->delete_at = \Carbon::now();
        $interview->save();

        return redirect('admin/interview')->with('success', $interview->titre . ' has been deleted Successfully');
    }
}
