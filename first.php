<?php
// $fstyle=$_POST['fstyle'];
// $fsize=$_POST['fsize'];
// $fcolor=$_POST['fcolor'];
// $bgcolor=$_POST['bgcolor'];


// setcookie('style',$fstyle);
// setcookie('color',$fcolor);
// setcookie('bgcolor',$bgcolor);
// setcookie('size',$fsize);

?>


<html>
    <head>
        <title> Enter page </title>
        <style>
            p{
                /* font-style: ; */
            }
        </style>
    </head>
    <body>
       
        <form action="second.php" method="POST">
          Enter font style : <input type="text" name="fstyle"><br>
          Enter font size : <input type="text" name="fsize"><br>
          Enter font color : <input type="text" name="fcolor"><br>
          Enter bg color : <input type="text" name="bgcolor"><br>
          <input type="submit" value="submit"><br>
        </form>
    </body>
</html>