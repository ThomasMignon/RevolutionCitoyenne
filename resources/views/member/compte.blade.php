@extends('layouts.layoutmember')

@section('css')

@endsection


@section('content')
<section class="content">
   <div class="row">
       <div class="col-md-8">
          <div class="col-md-12">
            <hr>
           <div class="col-md-8">
               <div class="renseignement">
                   <span class="col-md-3">Nom :</span>$user->nom
               </div>
               <div class="renseignement">
                   <span class="col-md-3">Prenom :</span>$user->prenom
               </div>
               <div class="renseignement">
                   <span class="col-md-3">Email :</span>$user->email
               </div>
               <div class="renseignement">
                   <span class="col-md-3">Ville :</span>$user->ville
               </div>
           </div>
           <div class="col-md-4">
               <div class="avatar">
                   <img src="{{env('APP_URL')}}img/profil.jpg" />
               </div>
           </div>
          </div>
          <div class="col-md-12">
          <hr>
           <div class="col-md-4">
               <div>
                   <a href="" class="myButton"><span>Changer mes Info personnelles</span></a>
               </div>
           </div>
           <div class="col-md-4">
               <div>
                   <a href="" class="myButton"><span>Changer votre mot de passe.</span></a>
               </div>
           </div>
           <div class="col-md-4">
               <div>
                   <a href="" class="myButton"><span>Supprimer mon compte.</span></a>
               </div>
           </div>
          </div>
       </div>
       
@endsection


@section('js')

@endsection