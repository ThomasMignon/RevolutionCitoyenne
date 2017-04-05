@extends('layouts.layout')

@section('title', 'Revolution Citoyenne')

@section('css')
	<link rel="stylesheet" type="text/css" href="{{env('APP_URL')}}css/jquery.fullPage.css" />
    <link rel="stylesheet" href="{{env('APP_URL')}}css/hexagons.min.css">
    <link href="{{env('APP_URL')}}css/style.css" rel="stylesheet">

    <!-- Lien JavaScript -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="{{env('APP_URL')}}js/javascript.js"></script>
    <script src="{{env('APP_URL')}}js/jquery.easings.min.js"></script>
    <script type="text/javascript" src="{{env('APP_URL')}}js/scrolloverflow.min.js"></script>

    <script type="text/javascript" src="{{env('APP_URL')}}js/jquery.fullPage.js"></script> 
@endsection

@section('content')
<div id="fullpage">
    <div class="section" id="section1">
        <div class="col-md-6 col-md-offset-3 test">
            <iframe width="100%" height="345px" src="https://www.youtube.com/embed/hw62UN8kqPQ" style="overflow: scroll;" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="col-md-2 col-md-offset-5 btn1">
            <div class="col-md-offset-4 btn1">
                <a href="#sect2">
                    <span class="hb hb-xs">
                        <i class="fa fa-angle-down"></i>
                    </span>
                </a>
            </div>
        </div>
    </div><!-- Première Section -->

    <div class="section" id="section2">
        <div class="container interview">
            <div class="col-md-12 interview">
                @foreach ($interviews as $interview)
                    <div class="slide">
                        <div class="col-md-6 col-md-offset-3">
                            <h1>{{ $interview->titre }}</h1>
                        </div>
                        <div class="col-md-6 col-md-offset-3">
                            <iframe width="100%" height="345px" src="{{ $interview->video}}" style="overflow: scroll;" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                @endforeach
            </div><!-- Slide -->
        </div><!-- Interview -->
        <div class="col-md-2 col-md-offset-5">
            <div class="col-md-offset-4">
                <a href="#sect4">
                    <span class="hb hb-xs">
                        <i class="fa fa-angle-down"></i>
                    </span>
                </a>
            </div>
        </div>
    </div><!-- Deuxième Section -->

    <div class="section" id="section4">
        <div class="col-md-offset-2 row">
            <a href="{{env('APP_URL')}}pdf/CharteRC.pdf">
            	<div class="col-md-3 infop info12">ici la chartre</div>
            </a>
            <a href="{{env('APP_URL')}}pdf/CharteRC.pdf">
              	<div class="col-md-3 infop info12">ici les infos</div>
            </a>
            <a href="{{env('APP_URL')}}pdf/CharteRC.pdf">
                <div class="col-md-3 infop">ici les membres</div>
            </a>
                <div class="col-md-offset-4 col-md-4">
                    <a href="#sect5">
                        <span class="hb hb-xs">
                            <i class="fa fa-angle-down"></i>
                        </span>
                    </a>
                </div>
        </div><!-- Row -->
    </div><!-- Section 4 Information Diverses -->

    <div class="section" id="section5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 infof">
                    <div class="col-md-12">
                        <div>
                            <h2>Nous contacter</h2>
                        </div>
                        <form class="form-horizontal" role="form" method="post" action="index.php/contact">
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Prenom et Nom" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Veuillez remplir ce champs avec votre email" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="4" name="message">Votre message ici</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input id="submit" name="submit" type="submit" value="Envoyer" class="btn btn-primary">
                                </div>
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form><!-- Fin contact form -->
                    </div>
                </div><!-- Col-md-6 -->
                <div class="col-md-6 infot">
                    <div class="col-md-12">
                        <div>
                            <h2>S'inscrire aux Actualités</h2>
                        </div>
                        <form class="form-horizontal" role="form" method="post" action="index.php/inscription">
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre Nom" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre Prenom" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="ville" name="ville" placeholder="Votre ville actuel" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Votre Email" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="passwd" name="passwd" placeholder="Mot de passe" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="passwd2" name="passwd2" placeholder="Confirmer votre Mot de passe" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input id="submit" name="submit" type="submit" value="Envoyer" class="btn btn-primary">
                                </div>
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form><!-- Fin contact form -->
                    </div>
                </div><!-- Col-md-6 -->
            </div>
        </div>  
    </div><!-- Section 5-->

@endsection

@section('js')

	<script src="{{env('APP_URL')}}js/hexagons.min.js"></script>
	<script type="text/javascript" src="{{env('APP_URL')}}js/javascript.fullPage.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#fullpage').fullpage({
            sectionsColor: ['#041e42', 'whitesmoke', '#b61010', '#bbc6ce'],
            anchors: ['sect1', 'sect2', 'sect4', 'sect5'],
            menu: '#menu',
            css3: true,
            scrollingSpeed: 1200,
            slidesNavigation: false,
            slidesNavPosition: 'bottom',
        });

        $('#showExamples').click(function(e){
            e.stopPropagation();
            e.preventDefault();
            $('#examplesList').toggle();
        });

        $(".btn1").click(function(){
            $("p").slideUp(1000);
            $(".res").show();
        });
        $(".btn2").click(function(){
            $("p").slideDown(1000);
        });
    });
    </script>

@endsection