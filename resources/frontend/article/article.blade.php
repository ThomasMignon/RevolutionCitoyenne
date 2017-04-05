@extends('layouts.layout')

@section('title', 'Revolution Citoyenne')

@section('css')

@endsection

@section('content')
  <div class="container">
    <div class="col-md-6 col-md-offset-3">
      <form class="form-signin" method="post" action="login">
        <div class="form-group">
          <label for="Email">Adresse Email</label>
          <input type="email" class="form-control" id="Email" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="Password">Mot de Passe</label>
          <input type="password" class="form-control" id="Password" placeholder="Votre mot de passe ici">
        </div>
        <button type="submit" class="btn btn-default">Me connecter</button>
      </form>
    </div>
  </div> <!-- /container -->
@endsection

@section('js')

@endsection