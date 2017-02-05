@extends('layouts.site')

@section('content')

<div class="container">
     <div class="row section">
		<h3 align="center">Contato</h3>
		<div class="divider"></div>
	</div>
	<div class="row section">
		<div class="col s12 m7">
			<img class="responsive-img" src="{{ asset('img/modelo_img_home.jpg')}}">
		</div>

		<div class="col s12 m5">
			<form class="col s12">
				<div class="input-field">
					<input type="text" name="nome" class="validate">
					<label>Nome:</label>
				</div>

				<div class="input-field">
					<input type="text" name="email" class="validate">
					<label>E-mail:</label>
				</div>

				<div class="input-field">
					<textarea class="materialize-textarea"></textarea>
					<label>Mensagem:</label>
				</div>

				<button class="btn blue">Enviar</button>
				
			</form>
			
		</div>
		
	</div>
</div>
@endsection