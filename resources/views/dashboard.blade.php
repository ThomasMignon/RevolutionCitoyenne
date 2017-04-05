<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=0">

        <title>Révolution Citoyenne</title>

        <!-- Lien CSS -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{env('APP_URL')}}css/jquery.fullPage.css" />
        <link href="{{env('APP_URL')}}css/bootstrap.css" rel="stylesheet">
        <link href="{{env('APP_URL')}}css/fontawesome.css" rel="stylesheet">

        <!-- Lien CSS Perso-->
        <link href="{{env('APP_URL')}}css/style.css" rel="stylesheet">

        <!-- Lien JavaScript -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{env('APP_URL')}}js/bootstrap.min.js"></script>

        <!-- This following line is optional. Only necessary if you use the option css3:false and you want to use other easing effects rather than "linear", "swing" or "easeInOutCubic". -->
        <script src="{{env('APP_URL')}}js/jquery.easings.min.js"></script>


        <!-- This following line is only necessary in the case of using the plugin option `scrollOverflow:true` -->
        <script type="text/javascript" src="{{env('APP_URL')}}js/scrolloverflow.min.js"></script>

        <script type="text/javascript" src="{{env('APP_URL')}}js/jquery.fullPage.js"></script>      
    </head>
    <body>

<section class="content section">
    <div class="row">
        <div class="col-md-4">
            test
        </div>
        <div class="col-md-8">
            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Admin Dashboard</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-golden">
                                <div class="inner">
                                    <h3><?php echo $article;?></h3>
                                    <p>Articlessdsdqsqddsq</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="{{env('APP_URL')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </br>
                                <a href="admin/article" class="small-box-footer">Create Article <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3><?php echo $interview;?></h3>
                                    <p>Interviews</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-briefcase"></i>
                                </div>
                                <a href="interview/interview.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </br>
                                <a href="interview/create-interview.php" class="small-box-footer">Create Interview <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-brown">
                                <div class="inner">
                                    <h3><?php echo $theme;?></h3>
                                    <p>Themes</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-star"></i>
                                </div>
                                <a href="theme/theme.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </br>
                                <a href="theme/create-theme.php" class="small-box-footer">Create Theme <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->
                </div><!-- /.box-body -->
                <div class="box-footer">
                </div><!-- /.box-footer-->
            </div><!-- /.box -->
        </div><!-- /.col-md-12 -->
    </div> <!-- /.row -->
</section><!-- /.content -->
</body>
