<?php
$connect = mysqli_connect("localhost", "root", "", "cforget");


$result = mysqli_query($connect, "SELECT * FROM `cf_users` ORDER BY RAND()");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <div id="foo">
         
        <video width="400" controls autoplay>
  <source src="vedio.mp4" type="video/mp4">
  </video>

<p>
    Video courtesy of 
    <a href="https://www.bigbuckbunny.org/" target="_blank">Big Buck Bunny</a>.
</p>
<div id="button" onclick="window.open('home.html','home');" style="cursor: hand; display: none;">
    </div>
    <script data-ad-client="ca-pub-745996178687687" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script language="javascript" type="text/javascript">
// $( "#foo" ).slideUp( 1100 ).delay( 1200 ).fadeIn( 1100 );
</script>
</body>

</html>