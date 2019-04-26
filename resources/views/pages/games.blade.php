@extends('layouts.app') 
@section('title',' | Juegos') 
@section('content')
	@include('sweetalert::alert')

<!-- Page top section -->
<section class="page-top-section set-bg" data-setbg="{{asset('img/page-top-bg/3.jpg')}}">
	<div class="page-info">
		<h2>Juegos</h2>
		<div class="site-breadcrumb">
			<a href="./">Inicio</a> /
			<span>Juegos</span>
		</div>
	</div>
</section>
<!-- Page top end-->


<!-- Games section -->
<section class="games-section">
	<div class="container">

		@auth @if(count($games)>0)
		
		
		<div class="row">
			<div class="col-xl-7 col-lg-8 col-md-7">
				<div class="row">

					@foreach($games as $game)
					<div class="col-lg-4 col-md-6">
						<div class="game-item">
							<a href="/games/{{$game->id}}"> <img class="img-thumbnail img-fluid" src="{{ asset("storage/cover_images/thumbnail/$game->cover_image") }}" alt="Cover image"></a>
							<h5><a href="/games/{{$game->id}}" style="color: white">{{$game->title}}</a></h5>
							<h3>El juego esta en estas listas:</h3>

							<ul>
								@foreach($game->listings as $listing)
								<li>{{ $listing->title }}</li>
								@endforeach
							</ul>
							<a href="/games/{{$game->id}}" class="read-more">info del juego <img src="{{asset('img/icons/double-arrow.png')}}"></a>
						</div>
					</div>
					@endforeach {!! $games->render();!!}
					<!--TODO- VER ESTILO -->

				</div>

			</div>
			<div class="col-xl-5 col-lg-4 col-md-5 sidebar game-page-sideber">
				<div id="stickySidebar">
					<div class="widget-item">
						<div class="categories-widget">
							<h4 class="widget-title" style="color: beige; text-decoration: underline">Acceso rápido</h4>
							<ul>
								<li><a href="{{route('games.create') }}" style="color:azure ">Agregar otro juego</a></li>
								<li><a href="{{url('profile') }}" style="color:azure ">Mi perfil</a></li>
								<li><a href="" style="color:azure">Buscar juegos de otro usuario</a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	@else

	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12">
			<div class="text-white">
				<h3>Todavía no tenes juegos en tu lista!</h3>
				<br><br>
			</div>
			<a href="{{route('games.create') }}" class="site-btn">Agregar nuevo juego<img src="{{asset('img/icons/double-arrow.png')}}" alt="#"/></a>
		</div>
	</div>


	@endif @endauth @guest
	<!-- Blog page -->
	<div class="row">
		<div class="col-xl-9 col-lg-8 col-md-7">
			<ul class="blog-filter">
				<li><a href="{{route('login')}}">Iniciar sesión</a></li>
				<li><a href="#">Registrarse</a></li>
				<li><a href="#">Preguntas frecuentes</a></li>
			</ul>
			<br><br>
			<div class="big-blog-item">
				<div class="blog-content text-box text-white">
					<h3 style="color:bisque">Buscar otros usuarios: </h3>
					<div class="widget-item">
						<form class="search-widget" action="{{url('searchUser') }}" method="get">
							@csrf
							<input name="searchTerm" type="text" placeholder="Ingresar el nombre...">
							<button><i class="fa fa-search" aria-hidden="true"></i>  Buscar</button>
						</form>
					</div>
				</div>
			</div>


		</div>

	</div>
	<!-- Blog page end-->
	@endguest

</section>




<!-- Games end-->
@endsection