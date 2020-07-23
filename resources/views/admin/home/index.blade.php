@extends('admin/layout.site')

@section('title', 'Dashboard de Vendas')

@section('content')
<div class="container">
	<div align="center">
		<div class="sales-month">
			<p class="title-s"><b>Vendas recentes</b></p>
			<hr>
			<div class="collection">
				<a href="#!" class="collection-item"><span class="new badge blue">1</span>Adidas Running Shoes</a>
				<a href="#!" class="collection-item"><span class="new badge blue">7</span>iSport Fitness Tracker</a>
				<a href="#!" class="collection-item"><span class="new badge blue">4</span>Nike Sports Backpack</a>			    
			</div>
		</div>

		<canvas id="chart1" width="400" height="400"></canvas>
		<canvas id="chart2" width="400" height="400"></canvas>
	</div>
</div>

<script>
	var ctx = document.getElementById('chart1').getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho'],
			datasets: [{
				label: 'total de vendas',
				data: [12, 19, 3, 5, 9, 5],
				backgroundColor: [
				'rgba(255, 99, 132, 0.2)',
				'rgba(54, 162, 235, 0.2)',
				'rgba(255, 206, 86, 0.2)',
				'rgba(75, 192, 192, 0.2)',
				'rgba(153, 102, 255, 0.2)',
				'rgba(255, 159, 64, 0.2)'
				],
				borderColor: [
				'rgba(255, 99, 132, 1)',
				'rgba(54, 162, 235, 1)',
				'rgba(255, 206, 86, 1)',
				'rgba(75, 192, 192, 1)',
				'rgba(153, 102, 255, 1)',
				'rgba(255, 159, 64, 1)'
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true
					}
				}]
			}
		}
	});

	var ctx = document.getElementById('chart2').getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'pie',
		data: {
			labels: ['Adidas', 'Nike', 'iSport'],
			datasets: [{
				data: [6, 11, 3],
				backgroundColor: [
				'rgba(255, 44, 132, 1)',
				'rgba(54, 111, 235, 1)',
				'rgba(255, 99, 86, 1)'
				],
				borderColor: [
				'rgba(255, 99, 132, 1)',
				'rgba(54, 162, 235, 1)',
				'rgba(255, 206, 86, 1)'
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true
					}
				}]
			}
		}
	});
</script>
@endsection