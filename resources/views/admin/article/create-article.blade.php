@extends('layouts.blank')

@section('css')


@endsection


@section('content')
<section class="content col-md-10 col-md-offset-1">
    <!-- Default box -->
    <div class="box">
        <div class="box-body">
            <form method={{ isset($article) ? 'put' : 'post'}} action="{{env('APP_URL')}}index.php/admin/article">
                <input type="hidden" name="id" value="{{ isset($article) ? $article->id: null }}">
                <p>
                    <label for="titre">Titre</label><br />
                    <input type="text" name="titre" value="{{ isset($article) ? $article->titre: null }}">
                </p>
                <p>
                    <label for="resume">Résumé</label><br />
                    <textarea name="resume" rows="10" cols="50">{{ isset($article) ? $article->resume: "Votre résumé ici" }}</textarea>
                </p>
                <p>
                    <label for="contenu">Contenu</label><br />
                    <textarea name="contenu" rows="10" cols="50">{{ isset($article) ? $article->contenu: "Votre article ici" }}</textarea>
                </p>
                <p>
                    <label for="image">Photo de l'article</label><br />
                    <input type="file" name="image" accept="image/*">
                </p>
                <p>
                    <select name="id_t">
                        @foreach ($themes as $theme)
                        <option value="{{$theme->id_t}}">{{$theme->categorie}}</option>
                        @endforeach 
                    </select>
                </p>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" style="padding:5px;" /> 
                <input type="reset" style="padding:5px;" /> 
            </form>
        </div><!-- /.box-body-->
    </div><!-- /.box -->
</section><!-- /.content -->

@endsection


@section('js')

@endsection