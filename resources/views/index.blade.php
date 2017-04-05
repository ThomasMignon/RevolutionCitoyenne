<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=0">

        <title>Révolution Citoyenne</title>

        <!-- Lien CSS -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{env('APP_URL')}}/css/jquery.fullPage.css" />
        <link href="{{env('APP_URL')}}/css/bootstrap.css" rel="stylesheet">
        <!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="{{env('APP_URL')}}/css/hexagons.css">

        <!-- Lien CSS Perso-->
        <link href="{{env('APP_URL')}}/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>

        <!-- Lien JavaScript -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="{{env('APP_URL')}}/js/bootstrap.min.js"></script>

        <script src="{{env('APP_URL')}}/js/javascript.js"></script>
        <script src="{{env('APP_URL')}}/js/jquery.easings.min.js"></script>
        <script type="text/javascript" src="{{env('APP_URL')}}/js/scrolloverflow.min.js"></script>

        <script type="text/javascript" src="{{env('APP_URL')}}/js/jquery.fullPage.js"></script>      
    </head>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid container">
                <div class="col-md-10"> 
                    <ul id="menu" class="nav col-md-12 center-block">
                        <li data-menuanchor="section1" class="col-md-2"><a href="#section1"><img class="logoimage" src="{{env('APP_URL')}}/img/Logo-Site-Final.png" /></a></li>
                        <li data-menuanchor="section2" class="col-md-2"><a href="#section2">Interviews</a></li>
                        <li data-menuanchor="section3" class="col-md-2"><a href="#section3">Articles</a></li>
                        <li data-menuanchor="section4" class="col-md-2"><a href="#section4">Informations</a></li>
                        <li data-menuanchor="section5" class="col-md-3"><a href="#section5">Nous contacter</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>     
    </header><!-- Menu header -->
    <body>
        <div id="fullpage">
            <div class="section" id="1">
                <div class="container">
                    <div class="col-md-6 col-md-offset-3 contenuSection">
                        <iframe class="video videoPresentation" src="https://www.youtube.com/embed/hw62UN8kqPQ"  frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-2 col-md-offset-5 btn1">
                        <div class="col-md-offset-4 btn1">
                            <a href="#section2">
                                <span class="hb hb-xs">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- Première Section -->

            <div class="section" id="2">
                <div class="container">
                    @foreach ($interviews as $interview)
                        <div class="slide">
                            <div class="col-md-2 col-md-offset-5">
                                <div class="col-md-offset-4">
                                    <a href="#section2">
                                        <span class="hb hb-xs">
                                            <i class="fa fa-angle-up"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 h50vh">
                                <div class="">
                                    <iframe class="video" src="https://www.youtube.com/embed/hw62UN8kqPQ"></iframe>
                                </div>
                            </div>
                            <div class="col-md-6 h50vh intPres">
                                <h2 class="col-md-12">{{$interview->titre}}</h2>
                                <hr>
                                <p class="col-md-12 text-justify">
                                    {{$interview->resume}}
                                </p>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-md-2 col-md-offset-5">
                        <div class="col-md-offset-4">
                            <a href="#section3">
                                <span class="hb hb-xs">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>     
            </div><!-- Deuxième Section -->

            <div class="section" id="3">
                <div class="container">
                    <div class="col-md-2 col-md-offset-5">
                        <div class="col-md-offset-4">
                            <a href="#section2">
                                <span class="hb hb-xs">
                                    <i class="fa fa-angle-up"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <?php $i = 0;?>
                    <div class="col-md-12 contenuSection">
                        @foreach ($articles as $article)
                            <article class="col-md-6">
                                <figure class="col-lg-12">
                                <a href=""><img class="img img-responsive article-img" src="{{env('APP_URL')}}/{{$article->image}}"></a>
                                <figcaption class="article-caption"><h1 class="article-title"><a href="">{{$article->titre}}</a></h1>
                                </figcaption>
                                </figure>
                                <div class="article-intro col-lg-12" style="padding-top: 10px;">
                                <strong>{{$article->resume}}</strong>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    <div class="col-md-2 col-md-offset-5">
                        <div class="col-md-offset-4">
                            <a href="#section4">
                                <span class="hb hb-xs">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    
    <div class="section" id="4">
                <div class="container">
                    <div class="col-md-2 col-md-offset-5">
                        <div class="col-md-offset-4">
                            <a href="#section3">
                                <span class="hb hb-xs">
                                    <i class="fa fa-angle-up"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12 contenuSection">
                        
                    </div>
                    <div class="col-md-2 col-md-offset-5">
                        <div class="col-md-offset-4">
                            <a href="#section5">
                                <span class="hb hb-xs">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
              
               

    <div class="section" id="5">
        <div class="container">
            <div class="col-md-2 col-md-offset-5">
                <div class="col-md-offset-4">
                    <a href="#section4">
                        <span class="hb hb-xs">
                            <i class="fa fa-angle-up"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="row contenuSection">
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
    </div>
</body>
<!-- <footer id="footer" class="testmenu">
    <div class="row">
        <div class="col-md-offset-8 col-md-4">
            <ul class="nav nav-pills row">
                <li class="col-md-2 col-md-offset-3 block-center">
                    <a href="https://www.facebook.com/bootsnipp" class="fblg"><i id="social-fb" class="fa fa-facebook-square fa-4x social"></i></a>
                </li>
                <li class="col-md-2 block-center">
                    <a href="https://twitter.com/bootsnipp" class="twlg block-center"><i id="social-tw" class="fa fa-twitter-square fa-4x social"></i></a>
                </li>
                <li class="col-md-2 block-center">
                    <a href="https://plus.google.com/+Bootsnipp-page" class="linlg block-center"><i id="social-gp" class="fa fa-linkedin-square fa-4x social"></i></a>
                </li>
            </ul>
        </div>
    </div>
</footer> -->

    
    <script src="{{env('APP_URL')}}/js/hexagons.min.js"></script>

    <script type="text/javascript" src="{{env('APP_URL')}}/js/javascript.fullPage.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#fullpage').fullpage({
            sectionsColor: ['#041e42', 'whitesmoke','blue','#b61010', '#bbc6ce'],
            anchors: ['section1', 'section2','section3', 'section4', 'section5'],
            menu: '#menu',
            css3: true,
            scrollingSpeed: 1000,
            slidesNavigation: false,
            slidesNavPosition: 'top',
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
</html>

