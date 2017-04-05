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
        <link rel="stylesheet" href="{{env('APP_URL')}}/css/hexagons.min.css">

        <!-- Lien CSS Perso-->
        <link href="{{env('APP_URL')}}/css/style.css" rel="stylesheet">

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
        <nav class="navbar navbar-default testmenu">
            <div class="container-fluid container">
                <div class="col-md-2">
                    <img class="logoimage" src="{{env('APP_URL')}}/img/Logo-Site-Final.png" />
                </div>
                <div class="col-md-10"> 
                    <ul id="menu" class="nav col-md-12">
                        <li data-menuanchor="sect1" class="col-md-3 col-md-offset-1"><a href="#sect1">Révolution Citoyenne</a></li>
                        <li data-menuanchor="sect2" class="col-md-2"><a href="#sect2">Actualités</a></li>
                        <li data-menuanchor="sect4" class="col-md-2"><a href="#sect4">Informations</a></li>
                        <li data-menuanchor="sect5" class="col-md-3"><a href="#sect5">Nous contacter</a></li>
                    </ul>
                </div>
            </div>
        </nav>     
    </header><!-- Menu header -->
    <body>
        <div id="fullpage">
            <div class="section" id="section1">
                <div class="col-md-6 col-md-offset-3 test">
                    <iframe class="video videoPresentation" src="https://www.youtube.com/embed/hw62UN8kqPQ"  frameborder="0" allowfullscreen></iframe>
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
                <div class="container">
                    <div class="col-md-12 interview">
                        @foreach ($interviews as $interview)
                            <div class="slide">
                                <div class="col-md-5 col-md-offset-1">
                                    <iframe class="video videoInterview" src="{{ $interview->video}}"  frameborder="5" allowfullscreen></iframe>
                                </div>
                                <div class="col-md-5 resumeInt">
                                    <div class="resumeInt">
                                        <blockquote class="quote-box">
                                        <p class="quotation-mark">
                                            {{ $interview->titre }}
                                        </p>
                                        <hr>
                                        <p class="quote-text">
                                            {{ $interview->resume }}                          
                                        </p>
                                        <hr>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
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

            <!-- Section Article
            <div class="section" id="section3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                        <div class="col-md-3 testart">
                            <img src="{{env('APP_URL')}}img/test.jpg" class="center-block">
                            <div class="testart center-block">
                                <p>
                                    Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 testart">
                            <img src="{{env('APP_URL')}}img/test.jpg" class="center-block">
                            <div class="testar center-block">
                                <p>
                                    Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 testart">
                            <img src="{{env('APP_URL')}}img/test.jpg" class="center-block">
                            <div class="testart center-block">
                                <p>
                                    Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.
                                </p>
                            </div>
                        </div>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">

                        </div>
                    </div> div row 
                </div> div container 
            </div> -->

            <div class="section" id="section4">
                <div class="container">
                    <div class="interview col-md-12">
                           <div class="col-md-4">
                                <img class="logoimage" src="{{env('APP_URL')}}/img/Charte-valeur.png" />
                                <h3>Notre Charte</h3>
                            </div> 
                        
                            <div class="col-md-4">
                            ici les infos
                            </div>
                            <div class="col-md-4">
                                <div>
                                    <p>test</p>
                                </div>
                                <div>
                                    <p>test</p>
                                </div>
                           </div>  
                        
                    </div>
                    <div class="col-md-2 col-md-offset-5">
                        <div class="col-md-offset-4">
                            <a href="#sect4">
                                <span class="hb hb-xs">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
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
            sectionsColor: ['#041e42', 'whitesmoke', '#b61010', '#bbc6ce'],
            anchors: ['sect1', 'sect2', 'sect4', 'sect5'],
            menu: '#menu',
            css3: true,
            scrollingSpeed: 1000,
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
</html>

