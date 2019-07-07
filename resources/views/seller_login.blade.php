@extends('layouts.app')

@section('content')
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@include('inc.header')

	<div class="jumbotron jumbotron-fluid text-center">
	    <h1 class="display-4">Jual Beli Fauna</h1> 
	    <p class="lead">Forum Jual Beli Fauna Pertama di Indonesia</p> 
	    <hr class="my-4">
	    <p>Mulai bisnis mu disini!</p>
	</div>
	<title>Halaman Seller</title>

	
	<div class="container-fluid">
		<hr class="my-4">
		<div class="row">
			<div class="col-md-4 col-lg-4">
				<h2>Halaman Seller</h2>
				<a href="#">
				<button class="btn btn-success seller">
					Tambah koleksi
				</button>
				</a>
			</div>

			<div class="col-md-8 col-lg-8">
				<div class="card-group">
				  <div class="card">
				    <img class="card-img-top" src="image/bg2.jpg" alt="Card image cap">
				    <div class="card-body">
				      <h5 class="card-title">Card title</h5>
				      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				    </div>
				  </div>
				  <div class="card">
				    <img class="card-img-top" src="image/bg2.jpg" alt="Card image cap">
				    <div class="card-body">
				      <h5 class="card-title">Card title</h5>
				      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
				      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				    </div>
				  </div>
				  <div class="card">
				    <img class="card-img-top" src="image/bg2.jpg" alt="Card image cap">
				    <div class="card-body">
				      <h5 class="card-title">Card title</h5>
				      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
				      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				    </div>
				  </div>
				</div>
			</div>
			
		</div>
	</div>
@endsection