@extends('layouts.app')

@section('content')
	
	<div class="container">
		<h2>Entrar</h2>
		<form action="#" method="post">

		@include('admin.login._form')
			<button class="btn blue">Entrar</button>
			
		</form>
		
	</div>


@endsection