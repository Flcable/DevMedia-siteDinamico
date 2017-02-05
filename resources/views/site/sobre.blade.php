@extends('layouts.site')

@section('content')

<div class="container">
	<div class="row section">
		<h3 align="center">Sobre</h3>
		<div class="divider"></div>
	</div>
	<div class="row section">
		<div class="col s12 m6">
			<img class="responsive-img" src="{{ asset('img/modelo_img_home.jpg')}}">
		</div>

		<div class="col s12 m6">
			<h4> A Empresa</h4>
			<blockquote>
				Descrição breve sobre a empresa.
			</blockquote> Texto sobre a empresa
			<p>Texto sobre a empresa Texto sobre a empresa Texto sobre a empresa</p>
			
		</div>
		
	</div>
</div>
@endsection
