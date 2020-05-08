<?php
$color="";
$dropDown = "";
$userColor = "";
if(isset($_GET['submitColor'])){
    $dropDown = $_GET['colorDD'];
    $userColor = trim($_GET['typeColor']);
    if($dropDown!="null" && $userColor!=""){
        echo "Uhhhh, only choose one option to set the color por favor";
    }else
        if($userColor!=""){
            $GLOBALS['color']=$userColor; 
        }else if($dropDown!="null"){
            $GLOBALS['color']=$dropDown;
        }
}
?>
<html>
    <head>
    </head>
    <body>
        <h2>Color Picker</h2>
        <form method="GET">
            <label for="colorDropdown">Pick a color</label> 
            <select id="colorDropdown" name="colorDD">
                <option value="null">Choose A Color</option>
                <option value="green">Green</option>
                <option value="blue">Blue</option>
                <option value="red">Red</option>
                <option value="yellow">Yellow</option>
                <option value="orange">Orange</option>
                <option value="purple">Purple</option>
                <option value="black">Black</option>
            </select>
            <input type="text" name="typeColor" placehholder="Green, Blue, Etc." value="<?php echo $userColor; ?>">
            <input type="submit" name="submitColor" value="Submit">
            <hr>
            <table style="background-color: <?php echo $color; ?>; width: 200px; height: 200px;">
                <tr>
                    <td></td>
                </tr>
            </table>
        </form>
    </body>
</html>