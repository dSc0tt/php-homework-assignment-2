<?php
$color = "";
$userColor = "";
$ddColor = "";
if(isset($_GET['submitColor'])){
    $userColor = $_GET['userColor'];
    $ddColor = $_GET['colorDD'];
    if($userColor != "" && $ddColor != "null"){
        echo "Please only set the color using one option.";
    } else if($userColor != ""){
        $color = $userColor;
    } else if($ddColor != "null"){
        $color = $ddColor;
    }
}
?>
<html>
    <head>
        <title>Color Picker</title>
    </head>
    <body>
        <form method="GET">
            <label for="colorDD">Choose A Color:</label>
            <select id="colorDD" name="colorDD">
                <option value="null">--Choose A Color</option>
                <option value="red">Red</option>
                <option value="green">Green</option>
                <option value="blue">Blue</option>
            </select>
            <input type="text" name="userColor" value="<?php echo $userColor; ?>">
            <input type="submit" name="submitColor" value="Submit">
            <hr>
            <table style="height: 200px; width: 200px; background-color: <?php echo $color; ?>;">
                <tr>
                    <td></td>
                </tr>
            </table>
        <form>
    </body>
</html>