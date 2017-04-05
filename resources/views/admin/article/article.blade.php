@extends('layouts.blank')

@section('css')


@endsection


@section('content')
<section class="content col-md-10 col-md-offset-1">
    <div class="box-body">
            <table id="data_table" class="table table-bordered datatable dt-responsive" style="width:100%;">
                <thead>
                	<tr>
                    	<th>Titre</th>
                    	<th>Résumé</th>
                    	<th>Posté le</th>
                    	<th>Visible</th>
                    	<th>Actions</th>
                	</tr>
                </thead>
                <tbody>
                	@foreach ($articles as $article)
    					<tr>
    						<td>{{ $article->titre }}</td>
    						<td>{{ $article->resume }}</td>
    						<td>{{ $article->create_at }}</td>
    						<td>
                            <?php
                            if($article->visible != 0)
                                echo "Oui  ";
                            else
                                echo "Non  ";
                            ?>

                            <a href="{{env('APP_URL')}}test" class="small-box-footer">    Changer <i class="fa fa-pencil-square-o"></i></a></td>
    						<td><a href="{{env('APP_URL')}}index.php/admin/article/{{ $article->id }}/edit" class="small-box-footer">Edit <i class="fa fa-pencil-square-o"></i></a>
                            <a href="{{env('APP_URL')}}index.php/admin/article/{{ $article->id }}" class="small-box-footer">Delete <i class="fa fa-pencil-square-o"></i></a></td>
    					</tr>
					@endforeach        
                </tbody>
            </table>
        </div><!-- /.box-body -->
</section><!-- /.content -->

@endsection


@section('js')

@endsection