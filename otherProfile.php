 <?php
 include "userNames.php";
 $arrayPos = $_GET["position"];
 $sender = $_GET["sender"];
 $user = array(8);
 $user[0] = new Profile($Denis["name"], $Denis["location"], $Denis["interest"], $Denis["game"], $Denis["handle"], $Denis["position"]);
 $user[1] = new Profile($Aayush["name"], $Aayush["location"], $Aayush["interest"], $Aayush["game"], $Aayush["handle"], $Aayush["position"]);
 $user[2] = new Profile($Robert["name"], $Robert["location"], $Robert["interest"], $Robert["game"], $Robert["handle"], $Robert["position"]); 
 $user[3] = new Profile($Ken["name"], $Ken["location"], $Ken["interest"], $Ken["game"], $Ken["handle"], $Ken["position"]);
 $user[4] = new Profile($Andy["name"], $Andy["location"], $Andy["interest"], $Andy["game"], $Andy["handle"], $Andy["position"]);
 $user[5] = new Profile($Rebecca["name"], $Rebecca["location"], $Rebecca["interest"], $Rebecca["game"], $Rebecca["handle"], $Rebecca["position"]);
 $user[6] = new Profile($Megan["name"], $Megan["location"], $Megan["interest"], $Megan["game"], $Megan["handle"], $Megan["position"]);
 $user[7] = new Profile($Selena["name"], $Selena["location"], $Selena["interest"], $Selena["game"], $Selena["handle"], $Selena["position"]);
 $profileUser = $user[$arrayPos];
 ?>
<!DOCTYPE html>
<html>
   <head>
        <title>Exouzia</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <LINK REL=StyleSheet HREF="ExternalCSS.css" TYPE="text/css" MEDIA=screen>
      
    </head> 
        <div id ="header">
            <img class ="displayed" src ="Exouzia.png" alt ="Exouzia"/>
        </div>
    <body>
        <div id="wrapper">
		<div id="header"></div>
		<div id="content"></div>
		<div id="footer"></div>
	</div>
        <?php
           class Profile{
            public $name; 
            public $location;
            public $interest;
            public $game;
            public $handle;
           function __construct($name, $location, $interest, $game, $handle, $position) {
            $this->name = $name;
            $this->location = $location;
            $this->interest = $interest;
            $this->game = $game;
            $this->handle = $handle;
            $this->position = $position;
           } 
        }
        
      
        ?>
        <div id ="content">
            <div id ="name">
                <?php
                    echo "<p> Welcome to ". $profileUser->name."'s profile </p>";
                ?>
            </div>
            <div id ="location">
                <?php
                    echo "<p>".$profileUser->name ."'s location is shown as: " . $profileUser->location . "</p>"; 
                ?>
               </div>
            <div id = "game">
                <?php
                echo "<p>". $profileUser->name . " is interested in: " . $profileUser->interest ." ". $profileUser->game . "</p>" ;
                echo "<p> Their in game handle is: " . $profileUser->handle . "</p>";
                ?>
            </div>
            </div>
     
        </body>
        <footer>
        </div>
      <div id ="footer">
            <p> Copyright 2015 Exouzia </p>
        </div>
        </footer>
        
    
</html>
