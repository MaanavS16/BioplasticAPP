<?php 
$header = file_get_contents("header_admin.html");
$footer = file_get_contents("footer.html");
$form = file_get_contents("form_config.html");

echo $header;

echo          '<div class="row">';
echo            '<div class="col-md-12 col-lg-12 grid-margin stretch-card">';
echo              '<div class="card">';
echo                '<div class="card-body">';
echo                  '<p class="card-title">Bio Plastic Data</p>';

$username = "bioplastic"; 
$password = "abcd1234"; 
$database = "bioplastic"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM requests";
 
 
echo '<table border="0" cellspacing="2" cellpadding="2"> 
	      <tr> 
	                <td> <font face="Arial">Time Entered</font> </td> 
			          <td> <font face="Arial">First Name</font> </td> 
				            <td> <font face="Arial">Last Name</font> </td> 
					              <td> <font face="Arial">Company</font> </td> 
								<td> <font face="Arial">weight</font> </td>
                                                                <td> <font face="Arial">cost</font> </td> 
                                                                <td> <font face="Arial">flexibility</font> </td>  
								      </tr>';
 
if ($result = $mysqli->query($query)) {
	    while ($row = $result->fetch_assoc()) {
		            $field1name = $row["entry_time"];
			            $field2name = $row["fname"];
			            $field3name = $row["lname"];
				            $field4name = $row["cname"];
				            $field5name = $row["weight"]; 
					                                                 $field6name = $row["cost"];
					                                                $field7name = $row["flexb"];
					            echo '<tr> 
							                      <td>'.$field1name.'</td> 
									                        <td>'.$field2name.'</td> 
												                  <td>'.$field3name.'</td> 
														                    <td>'.$field4name.'</td> 
																		      <td>'.$field5name.'</td>
                                                                                                                                                      <td>'.$field6name.'</td>
                                                                                                                                                      <td>'.$field7name.'</td>   
																		                    </tr>';
					        }
	        $result->free();
} 
echo '</table></div></div></div>';

echo $footer;
?>
