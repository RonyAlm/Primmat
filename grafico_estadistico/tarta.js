function tarta(){
	var config = {
			type: 'pie',
			data: {
				datasets: [{
					data: [
					<?php
				$sql="SELECT * from puntajes where rela_persona='2'";
				$result=mysqli_query($mysqli,$sql);
				while ($registros=mysqli_fetch_array($result)) {
					?>
					<?php echo $registros["aciertos"]?>,<?php echo $registros["tiempo"]?>,<?php echo $registros["numero_puntaje"]?>,'0'
					<?php
				}
				?>
					
					],
					backgroundColor: [
					window.chartColors.red,
					window.chartColors.yellow,
					window.chartColors.green,
					
					],
					label: 'Dataset 1'
				}],
				labels: [
				'Aciertos', 'Tiempo en minutos', 'Puntaje'
				]
			},
			options: {
				responsive: true
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('chart-area').getContext('2d');
			window.myPie = new Chart(ctx, config);
		};
}
