<!doctype html>
<html>

	<head>

		<title>Liberos</title>
			<link href="players-style.css" rel="stylesheet">
			<link href="slideDown-style.css" rel="stylesheet">
			<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet'>

	</head>

		<body>
			
			<!-- Navgation bar -->
			
			<div class="navigation-bar">
				<div class="container">
					
					<ul class="navigation-text">
					
					<li type="button"><a href="services.html"> Services</a> </li>
					<li type="button"><a href="players.php"> Players </a> </li>
					<li type="button"><a href="index.html"> Logo 	 </a> </li>
					<li type="button"><a href="contacts.html"> Contacts</a> </li>
					</ul>
					
				</div>
			</div>
			
			<div class="body">
			<!--Making a contact-->
					<div class="players">
							<div class="container">
							<ul class="menu">
							
								<li><a href="players.php">All</a></li>
								<li><a href="setter.php">Setter</a></li>
								<li><a href="outside-hitter.php">Outside Hitter</a></li>
								<li><a href="opposite.php">Opposite</a></li>
								<li><a href="middle-blocker.php">Middle Blocker</a></li>
								<li class="active"><a href="libero.php">Libero</a></li>
							
							</ul>
							
						<table>
						
							<?php
							
							include('config.php');
							
									$s_query = mysql_query("SELECT * FROM players WHERE id_type = 5")
									or die ("Could not connect DB: " . mysql_error());
									
									$num_result_s_query = mysql_num_rows($s_query);
									
							
							
							echo '<tr>';
							
									for ($i=0; $i<$num_result_s_query;$i++)
									{
										$data = mysql_fetch_array($s_query);
									
															
							echo '<td>';
							echo '<div class="player">';
								
								
										echo '<h4>' . $data["name"] .'</h4>';
										
								
							echo '<img src='  . $data["img_src"] . ' height=200px width=200px >';
							echo '</div>';
								
							echo '<div class="info">';
								
							echo '<div class="stats">';
								
								
										echo '<h5>Country</h5>';
										echo '<h5>Birth Date</h5>';
										echo '<h5>Height</h5>';
										echo '<h5>Reach Height</h5>';
								
							echo '</div>';
									
							echo '<div class="stats-info">';
							
										
										echo '<p>' . $data["country"] . '</p>';
										echo '<p>' . $data["age"] . '</p>';
										echo '<p>' . $data["height"] . '</p>';
										echo '<p>' . $data["reach_height"] . '</p>';
										
									
									
							echo '</div>';
								
							echo '</div>';
								
							echo '</td>';
							
							$number = $number + 1;
							
									
								 if ($number == 4 ){
									 $number = 0;
									 echo '</tr>';
									 echo '<tr>';
								 }
									}
							?>
							
							
							
						</table>
							</div>
					</div>
			
			</div>
			
			<div class="lower">
				<div class="container">
			
				</div>
			</div>
		
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
			<script src="custom.js"></script>
			<script src="slideDown.js"></script>
		
		</body>

</html>