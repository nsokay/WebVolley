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
								
								?>