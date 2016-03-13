<html>
<body>

<?php $tempuser= htmlspecialchars($_GET["username"]);
	$temppass= htmlspecialchars($_GET["password"]); 
	$arrayPos = 0;
	$usernamearray= array("udenis", "uaayush", "urobert", "uken", "uandy", "urebecca", "umegan", "uselena");
	
	$passwordarray= array("pdenis", "paayush", "probert", "pken", "pandy", "prebecca", "pmegan", "pselena");
        $self = "_self";
	for($x=0; $x<8; $x++){
		
	if( ($tempuser == $usernamearray[$x]) && ($temppass == $passwordarray[$x])){
            $arrayPos = $x;
            $url = "http://www.exouzia.com/index.php?position=$arrayPos";
            echo "<script type = 'text/javascript'> window.open('$url', '$self');</script>";
	break;
	}
	if($x == 7){
		$message = "wrong answer";
                $url = "http://www.exouzia.com/loginpage.html";
                
                echo"<script type = 'text/javascript'>alert('$message');</script>";
                echo "<script type = 'text/javascript'> window.open('$url','$self');</script>";
		}
	}
?>

</body>
</html>