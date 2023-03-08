<?php
require_once "app/controllers/C_DeathPeople.php";

?>
<html>
<head>
<title>Edit</title>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CDCI(Calculation for Death Ceremony in Indonesia)</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <script>
            document.documentElement.className = "js";
            var supportsCssVars = function() {
                var e, t = document.createElement("style");
                return t.innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t), e = !!(window.CSS && window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t.parentNode.removeChild(t), e
            };
            supportsCssVars() || alert("");
        </script>

</head>
<body>
<h2>Data Update</h2>

<div class = "mainEdit" >
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
</div>

</body>
</html>
<?php
if(isset($_POST['submit'])){
$main = new C_DeathPeople();
$main->Update();
}
?>