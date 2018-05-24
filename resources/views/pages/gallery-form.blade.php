@extends('welcome')

@section('title')
Форма добавления слайда
@endsection




@section('content')

	@if(session()->has('message'))
	    <div class="alert alert-success">
	        {{ session()->get('message') }}
	    </div>
	@endif


	@if ($errors->any())
		<div class="alert alert-danger">
		    <ul>
		        @foreach ($errors->all() as $error)
		            <li>{{ $error }}</li>
		        @endforeach
		    </ul>
			<p>Не переживай, мой друг! Ты всё сможешь!</p>
		</div>
	@endif


	<div class="container">
		<div class="row">
			
	{{Form::open(['url' => '/slide/create', 'files' => 'true'])}}
			<div class="form-group">
		{{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Заголовок', 'naame' => 'asdasdad'])}}
			</div>


			<div class="form-group">
		{{Form::text('description', '', ['class' => 'form-control', 'placeholder' => 'Краткий текст'])}}
			</div>

			<div class="form-group">
		{{Form::text('url', '', ['class' => 'form-control', 'placeholder' => 'Ссылка'])}}
			</div>

			<div class="form-group">
		{{Form::select('church', ['1' => 'Ударников', '2' => 'Сокол'], '2', ['multiple' => true, 'placeholder' => 'Выберите церковь'])}}
			</div>
				
			<div class="custom-file">

	{{Form::file('pic', ['class' => 'custom-file-input', 'id' => 'customFile'])}}
	{{Form::label('customFile', 'Выберите фото', ['class' => 'custom-file-label'])}}



	<div class="fileupload fileupload-new" data-provides="fileupload">
        <span class="btn btn-primary btn-file"><span class="fileupload-new"><span class="glyphicon glyphicon-file"></span> Выбрать файл</span>
        <span class="fileupload-exists"><span class="glyphicon glyphicon-file"></span> Выбрать другой файл</span><input type="file" name="uploads[]"/></span>
        <span class="fileupload-preview"></span>
        <a href="#" class="fileupload-exists" data-dismiss="fileupload" style="float: none"><span class="glyphicon glyphicon-remove" title="Отменить выбор"></span></a>
    </div>

			</div>

			<hr width="40%">
			
		{{Form::submit('Готово', ['class' => 'btn btn-primary'])}}
			
	{{Form::close()}}

		</div>
	</div>

@endsection