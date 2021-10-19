<?php 
$mathInt1 = rand(1, 49);
$mathInt2 = rand(1, 49);
if($_SESSION["newAnswer"]){
    $_SESSION["lastAnswer"] = $_SESSION["newAnswer"];
}
$_SESSION["newAnswer"] = $mathInt1 + $mathInt2;

?>