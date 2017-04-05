@extends('layouts.blank')

@section('css')


@endsection


@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
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
                                    <p>Articles</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="{{env('APP_URL')}}test" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
@endsection


@section('js')

@endsection
