@extends('layouts.app')

@section('content')
	@include('inc.header')
	<hr class="my-4">
	<div class="container">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1" style="margin-top: 20px;">
				<img src="/uploads/avatars/bg.jpg" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px;">
				<h2>Seller's Profile</h2>
				<p class="lead"> Biodata seller</p>
			</div>
		</div>
		<hr>
		<a href="/upload_katalog">
		<button class="btn btn-success" style="float: right;"> Tambah katalog </button>
		</a>
			<h1>Seller's Albums</h1>

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
@endsection