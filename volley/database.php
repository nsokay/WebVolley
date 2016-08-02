<?php 
							
								$db_host = 'localhost';
								$db_name = 'Players';
								$db_username ='Players';
								$db_password = 'nimda';
								$db_table_to_show = 'players';
								
								$connect_to_db = mysql_connect($db_host,$db_username,$db_password)
								or die("Could not connect: " . mysql_error());
								
								mysql_select_db($db_name, $connect_to_db)
								or die ("Could not select DB: " . mysql_error());
								
								$qr_result = mysql_query("select * from " . $db_table_to_show)
								or die (mysql_error());
								
								echo '<table border="1">';
								echo '<thead>';
								echo '<tr>';
								echo '<th>name</th>';
								echo '<th>country</th>';
								echo '<th>age</th>';
								echo '<th>height</th>';
								echo '<th>reachheight</th>';
								echo '</tr>';
								echo '</thead>';
								
								echo '<tbody>';
								
								while($data = mysql_fetch_array($qr_result)){
									echo '<tr>';
									echo '<td>' . $data['name'] . '</td>';
									echo '<td>' . $data['country'] . '</td>';
									echo '<td>' . $data['age'] . '</td>';
									echo '<td>' . $data['height'] . '</td>';
									echo '<td>' . $data['reach_height'] . '</td>';
									echo '</tr>';
									
								}
								
								echo '</tbody>';
								echo '</table>';
								
								mysql_close($connect_to_db);
							
							?><code lang="php">