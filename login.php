<?php 

$conn=mysqli_connect("localhost","root","","baseprueba");
if(!$conn)
{
   die("no hay conexion: ".mysqli_connect_error());
}
   $nombre=$_POST['usuario'];
   $pass=$_POST['password'];

$query=mysqli_query($conn,"SELECT * FROM login Where usuario='".$nombre."'and password = '".$pass."'");
$nr=mysqli_num_rows($query);

if($nr==1){
   header("Location:index.php",TRUE,301);
}
else if ($nr==0)
{
    echo "no ingreso";
}


?>