@extends('layouts.dashboard-admin')

@section('content')
	<!-- MAIN -->
<main>
	<div class="head-title">
		<div class="left">
			<h1>Dashboard Admin</h1>
		</div>
	</div>

	<ul class="box-info">
		<li>
			<i class='bx bxs-book'></i>
			<span class="text">
				<h3>Mata Kuliah</h3>
				<h4>{{ $jumlah_matkul }}</h4>
			</span>
		</li>
		<li>
			<i class='bx bxs-group' ></i>
			<span class="text">
				<h3>Total Pengguna</h3>
				<h4>{{ $jumlah_pengguna }}</h4>
			</span>
		</li>
	</ul>
	<ul class="box-info">
		<li>
			<i class='bx bxs-group' ></i>
			<span class="text">
				<h3>Admin</h3>
				<h4>{{ $jumlah_admin }}</h4>
			</span>
		</li>
		<li>
			<i class='bx bxs-group' ></i>
			<span class="text">
				<h3>Dosen</h3>
				<h4>{{ $jumlah_dosen }}</h4>
			</span>
		</li>
		<li>
			<i class='bx bxs-group' ></i>
			<span class="text">
				<h3>Mahasiswa</h3>
				<h4>{{ $jumlah_mahasiswa }}</h4>
			</span>
		</li>
	</ul>

	<div class="table-data">
		<div class="order">
			<div class="head">
				<h3>Data Pengguna</h3>
			</div>
			<div class="chart-container">
				<canvas id="DataPengguna" width="200px" height="75px"></canvas>
			</div>
		</div>
	</div>
</main>
<!-- MAIN -->
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.js"></script>

<script>
    var queryPengguna = @json($queryPengguna);
</script>

<script>
(function($) {
    $(document).ready(function() {
        var labels = Object.keys(queryPengguna);
        var data = Object.values(queryPengguna);
        //console.log(labels);
        var ctx = document.getElementById("DataPengguna").getContext("2d");
        BarChartPengguna.ChartData(ctx, 'bar', labels, data);
    });

    var BarChartPengguna = {
        ChartData: function(ctx, type, labels, data) {
            new Chart(ctx, {
                type: type,
                data: {
                    labels: labels,
                    datasets: [
                        {
                            label: "Data Pengguna",
                            data: data,
                            backgroundColor: [
                                '#FF8080',
                                '#F9B572',
                                '#F6FDC3',
                                '#C8E4B2',
                                '#FFD966',
                                '#94AF9F',
                                '#C8FFD4',
                            ],
                            borderWidth: 1,
                        },
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    plugins: {
                        labels: {
                            render: 'value',
                        },
                    },
                },
            });
        },
    };
})(jQuery);
</script>
@endsection