 <?php
 include "userNames.php";
 $arrayPos = $_GET["position"];
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
// $thisPos = $arrayPos;
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
            public $position;
           function __construct($name, $location, $interest, $game, $handle, $position) {
            $this->name = $name;
            $this->location = $location;
            $this->interest = $interest;
            $this->game = $game;
            $this->handle = $handle;
            $this->position = $position;
           } 
        }
        function searchForMatch($key, array $all, $size){
            $trueMatch = 0;
            $gamematch = 0;
            $locationMatch = 0;
            $trueMatches  = array($size);
            $interestMatch = 0;
            $interstMatches = array($size);
            $gameMatches = array($size);
            $locationMatches = array($size);
            
            for($i = 0; $i<$size; $i++){
                $trueMatches[$i] = null;
                $interestMatches[$i] = null;
                $locationMatches[$i] = null;
                $gameMatches[$i] = null;
            }
            foreach($all as $user){
            if($user->name != $key->name){
                if($user->location == $key->location){
                   if($user->game == $key->game){
                       $locationMatch++;
                       $locationMatches[locationMatch-1] = $user;
                       if($user->interest == $key->interest){
                            $trueMatch++;
                            $trueMatches[trueMatch-1] = $user;
                       }
                   } 
               }
               else if($user->game == $key->game){
                   $gameMatch++;
                   $gameMatches[$gameMatch-1];
                   if($user->interest == $key->interest){
                       $interestMatch++;
                       $interstMatches[$interestMatch-1] = $user;
                    }
               }
               
                
            }
            }
            $urltoProfile = "";
            foreach($trueMatches as $match){
                if($match != null){
                    $position = $match->position;
                    $thisPos = $profileUser->position;
                    $url =  "http://www.exouzia.com/otherProfile.php?position=".$position;
                    echo '<p><a href='.$url.'>' . $match->name . "</a> is a true match!";
                    echo"<br> Add ". $match->name . " as a contact in game: " . $match->handle;
                    echo "</p><br>";
                }
            }
            foreach($locationMatches as $match){
                if($match != null){
                    $position = $match->position;
                    $url = "http://www.exouzia.com/otherProfile.php?position=".$position;
                    echo '<p><a href='.$url.'>' . $match->name . "</a> is an location match!";
                    echo"<br> Add ". $match->name . " as a contact in game: " . $match->handle;
                    echo "</p><br>";
                }
            }
            foreach($interestMatches as $match){
                if($match != null){
                    $position = $match->position;
                    $url =  "http://www.exouzia.com/otherProfile.php?position=$position";
                    echo '<p><a href='.$url.'>' . $match->name . "</a> is an interest match!";
                    echo"<br> Add ". $match->name . " as a contact in game: " . $match->handle;
                    echo "</p><br>";
                }
            }

            }
        
        
      
        ?>
        <div id ="content">
            <div id ="name">
                <?php
                    echo "<h> Welcome back to your profile " . $profileUser->name . "! </h>";
                    echo "$userProfile->position";
                ?>
            </div>
            <div id ="location">
                <?php
                    echo "<p>Your location is shown as: " . $profileUser->location . "</p>"; 
                ?>
               </div>
            <div id = "game">
                <?php
                echo "<p>You are interested in: " . $profileUser->interest ." ". $profileUser->game . "</p>" ;
                ?>
            </div>
            <p> Your Matches are: </P>
               <?php
                searchForMatch($profileUser, $user, 8);  
                 ?>
            <p> Just in case you forgot: <br>
                A location match is someone who lives in your city and plays the same game.<br>
                An interest match is someone who doesn't live in your city but plays the same game with the same interest level. <br>
                A true match is someone who lives in your city, and plays the game with the same interest level<br>
            </p>
            </div>
        <button id="myButton" class="loginbtn" >Logout</button>

    <script type="text/javascript">
        document.getElementById("myButton").onclick = function () {
            location.href = "/loginpage.html";
        };

    </script>

        </body>
        <footer>
        </div>
      <div id ="footer">
            <p> Copyright 2015 Exouzia </p>
        </div>
        </footer>
        
    
</html>
