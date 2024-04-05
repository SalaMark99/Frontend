<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Weblap - PHP</title>
	<link rel="stylesheet" href="res/style.css">
</head>
<body>
	
	<!-- 1. feladat -->
	
	<?php

echo '<header class="success">
		Weblap Fejléc
	</header>';

$features = 
[
	'Alfa lehetőség',
	'Béta különlegesség',
	'Gamma szolgáltatás',
	'Delta privilégium'
];
?>
	<!-- Vége: 1. feladat -->
	
	<main>
		
		<h1>Köszönjük honlapunkon!</h1>
		
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero recusandae ab quaerat ratione commodi veniam vel, dolorem aspernatur amet? Quae ex ipsum tenetur libero, expedita, placeat magni, soluta ut vero fugiat repellat maiores reprehenderit beatae.</p>
		
		<!-- 2. feladat -->
	<?php
		$r = rand(0, 2);

		if($r == 0)
		{
			echo '<p><strong>Kihagyhatatlan ajánlat!</strong></p>';


		}
		else
		if($r == 1)
		{
			echo '<p><strong>A világ legjobb ötlete!</strong></p>';
			

		}
		else
		if($r == 2)
		{
			echo '<p><strong>Ne hagyd ki csak most csak ma!</strong></p>';
			

		}

	?>
		<!-- Vége: 2. feladat -->
		
		<!-- 4-5. feladat -->
		<?php
		if(isset($_GET['show']))
		{
			$x = $_GET['show'];
			$file = 'files/content-'.$x.'.txt';

			$article =explode(';', file_get_contents($file));
			$title = $article[0];
			$content = $article[1];

			echo'<section> <h2>'.$title.'</h2>
			<p>'.$content.'</p>
			</section>';
		}
		?>
		
		
		<!-- Vége: 4-5. feladat -->
		
		<section>
			<h2>Különleges ajánlatok</h2>
			
			<!-- 3. feladat -->
			
			<table>
				<tbody>
		<?php
		$items =$features;
		$count = count($items);

		for($i = 0; $i <$count; $i++)
		{
			$item = explode(';', $items[$i]);
			$name = $item[0];


		
					echo'<tr>
						<th>'.($i+1).'.</th>
						<td>'.$name.'</td>
						<td><a href="index.php?show='.$i.'">Bővebben</a></td>
					</tr>';
		}
		?>
				
			
			<!-- Vége: 3. feladat -->
			
		</section>
		
	</main>
	
</body>
</html>