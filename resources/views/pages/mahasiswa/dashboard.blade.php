@extends('layouts.dashboard-mahasiswa')

@section('content')
		<!-- MAIN -->
	<main>
		<div class="head-title">
			<div class="left">
				<h1>Dashboard Mahasiswa</h1>
				<h5>Nama : {{ Auth::user()->name }}</h5>
				<h5>NIM : {{ $nim_mahasiswa }}</h5>
				<h5>Email : {{ Auth::user()->email }}</h5>
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
	</main>
	<!-- MAIN -->
@endsection