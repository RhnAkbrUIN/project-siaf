@extends('layouts.dashboard-dosen')

@section('content')
	<!-- MAIN -->
<main>
	<div class="head-title">
		<div class="left">
			<h1>Dashboard Dosen - Mahasiswa</h1>
			<h5>Dosen : {{ Auth::user()->name }}</h5>
		</div>
	</div>

    <div class="row">
		<div class="col-md-12 mt-2">
			<div class="card">
				<div class="card-body mt-2">
					<div class="table-responsive mt-2">
						<table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
							<thead>
								<tr>
									<th>NIM</th>
									<th>Nama</th>
									<th>Jenis Kelamin</th>
									<th>Kelas</th>
									<th>Semester</th>
									<th>Angkatan</th>
								</tr>
							</thead>
							<tbody>
                                @foreach ($mahasiswa as $mhs)
                                    <tr>
                                        <td>{{ $mhs->nim }}</td>
                                        <td>{{ $mhs->name_mhs }}</td>
                                        <td>{{ $mhs->jk }}</td>
                                        <td>{{ $mhs->kelas }}</td>
                                        <td>{{ $mhs->semester }}</td>
                                        <td>{{ $mhs->angkatan }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<!-- MAIN -->
@endsection