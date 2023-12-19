@extends('layouts.dashboard-mahasiswa')

@section('content')
		<!-- MAIN -->
	<main>
		<div class="head-title">
			<div class="left">
				<h1>Dashboard Mahasiswa</h1>
			</div>
		</div>

		<ul class="box-info">
			<li>
				<i class='bx bxs-book'></i>
				<span class="text">
					<h3>Mata Kuliah</h3>
					<h4>{{ $matkul }}</h4>
				</span>
			</li>
			<li>
				<i class='bx bxs-group' ></i>
				<span class="text">
					<h3>2834</h3>
					<p>Visitors</p>
				</span>
			</li>
			<li>
				<i class='bx bxs-dollar-circle' ></i>
				<span class="text">
					<h3>$2543</h3>
					<p>Total Sales</p>
				</span>
			</li>
		</ul>

		<div class="table-data">
			<div class="order">
				<div class="head">
					<h3>Data Diri</h3>
				</div>
				<div class="row m-1">
					<p>Nama : {{ Auth::user()->name }}</p>
				</div>
				<div class="row m-1">
					<p>NIM : {{ $nim_mahasiswa }}</p>
				</div>
					<p>Email : {{ Auth::user()->email }}</p>
			</div>
		</div>
	</main>
	<!-- MAIN -->
@endsection