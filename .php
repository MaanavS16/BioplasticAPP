<?php
$header = file_get_contents("header.html");
$footer = file_get_contents("footer.html");
$form = file_get_contents("form.html");
$tiles = file_get_contents("tiles.html");

echo $header;
//echo `whoami`;

if (isset($_POST['fname'])){

$weight = $_POST['weight'];
$cost = $_POST['cost'];
$flex = $_POST['flexb'];

$random_code_post = filter_input(INPUT_GET, '100|200|300|400|500_10|20|30|40|50', FILTER_VALIDATE_INT);
$command = 'python regression.py "100|200|300|400|500_10|20|30|40|50"';
//$command = 'python --version';
$output = shell_exec($command);
//echo var_dump($output);

$res1 = $output;
$vals = explode(' ', $res1);
$file1 = 'conf1.txt';

// Open the file to get existing content
$costpergram = file_get_contents($file1);

$intercept = $vals[1];
$slope = $vals[0];
//echo 'Output:'. $output;
//echo 'Slope:' . $slope;
//echo 'Intercept:' . $intercept;

if ($cost != 0){
	$weight = $cost/$costpergram;
	$flex = ($slope * $weight) + $intercept;
} else if ($weight != 0){
	$cost = ($costpergram * $weight);
	$flex = ($slope * $weight) + $intercept;
} else if ($flex != 0){
	$weight = ($flex - $intercept)/$slope;
	$cost = ($costpergram * $weight);
}

$tiles = str_replace('~name~', $_POST['fname'] . " " . $_POST['lname'], $tiles);
$tiles = str_replace('~company~', $_POST['cname'], $tiles);
$tiles = str_replace('~weight~', round($weight, 2) , $tiles);
$tiles = str_replace('~cost~', round($cost, 2), $tiles);
$tiles = str_replace('~flex~', round($flex, 2), $tiles);

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "bioplastic", "abcd1234", "bioplastic");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt insert query execution
$sql = "INSERT INTO requests (fname, lname, cname, cost, weight, flexb, entry_time) VALUES ('". $_POST['fname'] ."','" . $_POST['lname'] ."','". $_POST['cname'] ."','". round($cost,2) ."','". round($weight,2) ."','". round($flex, 2) ."',NOW())";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);


echo $tiles;
echo          '<div class="row">';
echo            '<div class="col-md-12 col-lg-12 grid-margin stretch-card">';
echo              '<div class="card">';
echo                '<div class="card-body">';
echo                  '<p class="card-title">Bio Plastic Entry</p>';
echo '<img src="graph.png"></img>';
echo <br>
echo $form;

/*echo '<h1>Results </h1><br>';
echo 'First Name: ' . $_POST['fname'] . "<br>";
echo 'First Name: ' . $_POST['lname'] . "<br>";
echo 'Company Name: ' . $_POST['cname'] . "<br>";
echo 'Weight: ' . $_POST['weight'] . "<br>";
echo 'Cost: ' . $_POST['cost'] . "<br>";
echo 'Flexibility: ' . $_POST['flexb'] . "<br>";
*/
echo '</div></div></div>';
}else {
echo          '<div class="row">';
echo            '<div class="col-md-12 col-lg-12 grid-margin stretch-card">';
echo              '<div class="card">';
echo                '<div class="card-body">';
echo                  '<p class="card-title">Bio Plastic Entry</p>';


echo $form;

}
echo $footer;
?>
