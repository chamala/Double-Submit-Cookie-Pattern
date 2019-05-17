<?php

require_once 'token.php';

$val = $_POST["token"];

if(isset($_POST['updatepost'])){
	if(token::checkToken($val,$_COOKIE['csrfTokenCookie'])) {
		echo "Server request accepted";
		echo "<br>";
		echo "<br>";
		echo "CSRF token matched (cookie == hidden field) ((".$val.")----(".$_COOKIE['csrfTokenCookie']."))";
		echo "<br>";
		echo "<br>";
		echo "Post Updated!! -> ".$_POST['updatepost'];


	}else {
	    echo "Server request fail! , Unauthorized req!".$_COOKIE['csrfTokenCookie'];
	}
}
?>
