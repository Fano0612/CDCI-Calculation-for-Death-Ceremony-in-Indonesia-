<?php
require_once "app/controllers/C_DeathPeople.php";

?>
<html>
<head>
<title>Edit</title>
</head>
<body>
<h2>Data Update</h2>
<form action="" method="POST">
<table border ="3">
    <?php 
     $Con = new C_DeathPeople();
     $nik = $_GET['e'];
     $D = "SELECT * FROM death_people WHERE nik = $nik";
     $DExecution = $Con->model->execute($D);
    $row = $Con->model->Catch($DExecution)?>
<tr align="center">
<td>ID Number</td>
<td><input type="text"name="nik" value="<?=$row[0]?>" size="50" readonly
/>
</td>
</tr>
<tr align="center">
<td>Name</td>
<td><input type="text"name="nama" value="<?=$row[1]?>" size="50"
required/></td>
</tr>
<tr align="center">
<td>Date of Death</td>
<td><input type="text"name="tanggalkematian" value="<?=$row[2]?>" size="50"
required/></td>
</tr>
<tr align="center">
<td><input type="submit" name="submit" value="Update"/></td>
</tr>
</table>
</form>

</body>
</html>
<?php
if(isset($_POST['submit'])){
$main = new C_DeathPeople();
$main->Update();
}
?>