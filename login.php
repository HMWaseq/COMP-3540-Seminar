<?php
$username= $_POST["user"];
$password = $_POST["pw"];
if($username== "glatif"&& $password=="1234"){
    echo "login successfull";
}
else{ echo "Wrong info";}
?>