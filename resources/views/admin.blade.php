@extends('layouts.app')

@section('content')
<div class="card">
	<div class="card-body">
		@if (session('status'))
		<div class="alert alert-success" role="alert">
			{{ session('status') }}
		</div>
		@endif
		<?php
		$thang1 = 10;
		$thang2 = 20;
		$thang3 = 15;
		$thang4 = 17;
		$thang5 = 18;
		$thang6 = 18;
		$thang7 = 21;
		$thang8 = 13;
		$thang9 = 27;
		$thang10 = 28;
		$thang11 = 25;
		$thang12 = 23;

		?>
		<div id="container" style="width:100%; height:400px;"></div>
		<script>
			document.addEventListener('DOMContentLoaded', function() {
				const chart = Highcharts.chart('container', {
					chart: {
						type: 'line'
					},
					title: {
						text: 'Doanh thu'
					},
					xAxis: {
						categories: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12']
					},
					yAxis: {
						title: {
							text: 'Doanh số'
						}
					},
					series: [{
						name: 'Điện thoại',
						data: [<?php echo $thang1 ?>, <?php echo $thang2 ?>, <?php echo $thang3 ?>, <?php echo $thang4 ?>, <?php echo $thang5 ?>, <?php echo $thang6 ?>, <?php echo $thang7 ?>, <?php echo $thang8 ?>, <?php echo $thang9 ?>, <?php echo $thang10 ?>, <?php echo $thang11 ?>, <?php echo $thang12 ?>]
					}, {
						name: 'Laptop',
						data: [5, 7, 3, 7, 4, 6, 1, 5, 4, 8, 6, 4]
					}, {
						name: 'Tablet',
						data: [2, 3, 2, 3, 5, 7, 8, 1, 2, 2, 4, 6]
					}]
				});
			});
		</script>
	</div>
</div>
@endsection