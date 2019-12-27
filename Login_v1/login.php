<?php
	include '../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{

	    $login_email=$_POST['login_email'];
		$login_pass=hash('sha512',$_POST['login_pass']);

		$get = mysqli_query($conn,"SELECT * FROM usr_dtls WHERE e_mail='$login_email' and pass='$login_pass'");
	    if($row = mysqli_fetch_array($get))
	    {
			 session_start();

	        $_SESSION["pass"] = $login_pass;
	        $_SESSION["email"] = $login_email;

	        echo "1";
	    }
	    session_start();
	        echo "1";
	}

?>