@extends('layouts.layoutmember')

@section('css')

@endsection


@section('content')
<section class="content">
  <div class="row">
       <div class="col-md-8">
          <div class="col-md-12">
            <form>
           <div class="col-md-8">
               <div class="renseignement form-group">
                  <span class="col-md-3"><label for="nom">Nom :</label></span><input type="text" class="form-control col-md-9" id="nom">
               </div>
               <div class="renseignement form-group">
                  <span class="col-md-3"><label for="prenom">Prenom :</label></span><input type="text" class="form-control col-md-9" id="prenom">
               </div>
               <div class="renseignement form-group">
                  <span class="col-md-3"><label for="email">Email :</label></span><input type="email" class="form-control col-md-9" id="email">
               </div>
               <div class="renseignement form-group">
                  <span class="col-md-3"><label for="ville">Ville :</label></span><input type="text" class="form-control col-md-9" id="ville">
               </div>
           </div>
           <div class="col-md-4">
               <div class="avatar">
                   <img src="{{env('APP_URL')}}img/profil.jpg" />
                   <span class="col-md-3"><label for="ville">Ville :</label></span><input type="text" class="form-control col-md-9" id="ville">
               </div>
           </div>
            </form>
          </div>
       </div>
      
@endsection


@section('js')

@endsection