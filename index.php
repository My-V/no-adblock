<html>

<!--

MyV No Adblock config install file

 -->

<header>
<link rel="stylesheet" href="css/main.css">
<title>MyV No Adblock</title>

</header>

<body>
<center>
    <div id="no-ab-ground">
   <?php

if (!file_exists('config.php')){



    
echo '
    <img src="https://envato.m-y-v.com/img/n-ab.png" alt="MyV Logo" width="300" height="auto">
<br>
<h2>Installing</h2>

<h4>Please wait ...</h4>


<div id="no-ab-footer">MyV - No Adblock</div>
';

$conffile = fopen("config.php", "w") or die("<br>ERROR: Cannot create config file!<br> Set the permissions of the folder to 777");
$url = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];

$urlParts = explode("index.php", $url);

$txt = '<?php

// MyV No Adblock Config file

$config = [
    "url" => "' . $urlParts[0] . '",
];


?>';
fwrite($conffile, $txt);

fclose($conffile);
?>
<script>
window.location.replace("?installed=true");
</script>

<?php
} else{


   
if ($_GET["installed"] == "true"){
    echo '
    <img src="https://envato.m-y-v.com/img/n-ab.png" alt="MyV Logo" width="300" height="auto">
<br>
<h2>Installed</h2>

<h4>You have successfully installed No Adblock</h4>


<div id="no-ab-footer">MyV - No Adblock</div>
';
} else{
    echo '
    <img src="https://envato.m-y-v.com/img/n-ab.png" alt="MyV Logo" width="300" height="auto">
<br>
<h2>Active</h2>

<h4>No Adblock is active and ready to use</h4>


<div id="no-ab-footer">MyV - No Adblock</div>
';


}

}
  
  ?>
    </div>
</center>

</body>
    </html>