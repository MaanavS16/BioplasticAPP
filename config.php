<?php 
$header = file_get_contents("header.html");
$footer = file_get_contents("footer.html");
$form = file_get_contents("form_config.html");

echo $header;

echo          '<div class="row">';
echo            '<div class="col-md-12 col-lg-12 grid-margin stretch-card">';
echo              '<div class="card">';
echo                '<div class="card-body">';
echo                  '<p class="card-title">Bio Plastic Data</p>';
?>

<script type="text/javascript">

function insRow(id) {
    var filas = document.getElementById("myTable").rows.length;
    var x = document.getElementById(id).insertRow(filas);
    var y = x.insertCell(0);
	var y1 = x.insertCell(1);

    var z = x.insertCell(2);
	
    y.innerHTML = '<input type="number" id="weight" name="weight[]">';
    y1.innerHTML = '<input type="number" id="flex" name="flex[]" >';
	
    z.innerHTML ='<button id="btn" name="btn"  onclick="delRow(this)"> Delete</button>';
}

function delRow(currElement) {
     var parentRowIndex = currElement.parentNode.parentNode.rowIndex;
     document.getElementById("myTable").deleteRow(parentRowIndex);
}

function submit_reqs() {
document.getElementById("form_id").submit(); //form submission
}

</script>
<form method="post" id="form_id" action="config.php">
<label>Cost per gram: &nbsp;&nbsp;</label><input type="number" id="cpg" name="cpg">
<br>
<br>
<table id="myTable" style="border: 1px solid black">
<tr>
<td>Weight</td>
<td>Flexibility</td>
<td></td>

</tr>

<tr>
<td><input type="number" id="weight" name="weight[]"></td>
<td><input type="number" id="flex" name="flex[]" ></td>
<td><input type="button" value="Delete" onclick="delRow(this)"></td>

</tr>
<tr>
<td><input type="number" id="weight" name="weight[]"></td>
<td><input type="number" id="flex" name="flex[]" ></td>
  <td><input type="button" value="Delete" onclick="delRow(this)"></td>
</tr>
<tr>
<td><input type="number" id="weight" name="weight[]"></td>
<td><input type="number" id="flex" name="flex[]" ></td>
  <td><input type="button" value="Delete" onclick="delRow(this)"></td>
</tr>
</table>
<input type="button" value="Add Row" onclick="insRow('myTable')">
<br><br>
<input type="button" value="Submit" name="Submit" onclick="submit_reqs()"></input>

<?php

echo '</table></form></div></div></div>';

if (isset($_POST['weight'])){
$flex = $_POST['flex'];
$weight = $_POST['weight'];
$str1 = "";
$str2 = "";
foreach( $flex as $key => $n ) {
  $str1 = $str1 . $n.'|';
  $str2 = $str2 . $weight[$key].'|';
}
$str1 = rtrim($str1,'|');
$str2 = rtrim($str2,'|');
$str = $str2 . '_' . $str1;
$file = 'conf.txt';
$file1 = 'conf1.txt';

// Open the file to get existing content
$current = file_get_contents($file);

// Write the contents back to the file
file_put_contents($file, $str);
file_put_contents($file1, $_POST['cpg']);

echo ("Configuration Saved!!!");
echo $footer;

}
?>
