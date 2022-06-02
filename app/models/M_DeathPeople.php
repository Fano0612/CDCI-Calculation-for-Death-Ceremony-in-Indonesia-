<?php
require "MVCConnection.php";
class M_DeathPeople {
private $NIK;
private $nama;
private $connect;
function __construct(){
$this->connect = new Connection();
}
function execute($query){
return mysqli_query($this->connect->ConnectTo(),$query);
}
function SelectAll(){
$query = "SELECT * FROM death_people";
return $this->execute($query);
}
function Selectdeath_people($NIK){
$query = "SELECT * FROM death_people WHERE
nik='$NIK'";
return $this->execute($query);
}
function Updatedeath_people($NIK, $nama, $tanggalkematian){
$query = "UPDATE death_people SET nama='$nama', tanggalkematian='$tanggalkematian'WHERE nik=$NIK";
return $this->execute($query);
}
function Deletedeath_people($NIK){
$query = "DELETE FROM death_people WHERE
nik='$NIK'";
return $this->execute($query);
}
function Insertdeath_people($NIK, $nama,
$tanggalkematian){
$query = "INSERT INTO death_people VALUES ('$NIK','$nama', '$tanggalkematian')";
return $this->execute($query);
}

function Catch($var){
return mysqli_fetch_array($var);
}

function __destruct(){
}
}
?>