<?php
require ('../../database/dbconnect.php');

  if (isset($_POST['function']) && $_POST['function'] == 'provinces') {
  	$id = $_POST['id'];
  	$sql = "SELECT * FROM amphures WHERE province_id='$id' ORDER BY name_th ASC";
  	$query = mysqli_query($connect, $sql);
  	echo '<option value="" selected disabled></option>';
  	foreach ($query as $value) {
  		echo '<option value="'.$value['id'].'">'.$value['name_th'].'</option>';
  		
  	}
  }


if (isset($_POST['function']) && $_POST['function'] == 'amphures') {
    $id = $_POST['id'];
    $sql = "SELECT * FROM districts WHERE amphure_id='$id' ORDER BY name_th ASC";
    $query = mysqli_query($connect, $sql);
    echo '<option value="" selected disabled></option>';
    foreach ($query as $value2) {
      echo '<option value="'.$value2['id'].'">'.$value2['name_th'].'</option>';
      
    }
  }

  if (isset($_POST['function']) && $_POST['function'] == 'districts') {
    $id = $_POST['id'];
    $sql = "SELECT * FROM districts WHERE id='$id' ORDER BY name_th ASC";
    $query3 = mysqli_query($connect, $sql);
    $result = mysqli_fetch_assoc($query3);
    echo $result['zip_code'];
    exit();
  }
?>