<html>

<!--
  Powered by MyV No Adblock
 -->

<head>

<!--
  MyV No Adblock
  Version: 1.0.0
 -->
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php

if (!isset($config["url"])){

  die (
    '
  <center>
    <img src="https://envato.m-y-v.com/img/n-ab.png" alt="MyV Logo" width="300" height="auto">
<br>
<h2>No Config file</h2>

<h4>Help: Documentation -> Error -> "No Config file" </h4>

</center>
');
}

?>
    <script src="https://<?php echo $config["url"] ?>ad-test/ads.js"></script>
    <script src="https://<?php echo $config["url"] ?>ad-test/google-ads.js"></script>
    <script src="https://<?php echo $config["url"] ?>ad-test/bing-ads.js"></script>
  
    <link rel="stylesheet" href="https://<?php echo $config["url"] ?>css/main.css">

</head>
  <body>




<?php
session_start();

if($_GET["no-adblock"] == "false"){

// No Adblock - Adblock message

if ($_SESSION["no-adblock"] == "loaded"){
unset($_SESSION["no-adblock"]);
?>

<script>

window.history.back();

</script>

<?php
} else{

$_SESSION["no-adblock"] = "loaded";
  include "block-site.php";
  
  ?>

<script>

console.clear();

console.log("MyV No Adblock - Adblocker detected");

  </script>

  <?php
    die('
    
    <center>
    <div id="no-ab-ground">
    ' . $block_msg . '
  
    </div>
    
    '); 
  
}
  }

?>



    <script>

// No Adblock - Adblock detection

    function detected() {
      console.clear();

      console.log("MyV No Adblock - Adblocker detected");

window.location.href = "?no-adblock=false";
}
      



      if(window.Ads === undefined){
        detected();
      }

      if(window.google_ads === undefined){
        detected();
      }
      if(window.bing_ads === undefined){
        detected();
      }

            var iframe = document.createElement("iframe");
            iframe.height = "1px";
            iframe.width = "1px";
            iframe.id = "ad-content";
            iframe.src = "https://m-y-v.com/ads.html";
           
            document.body.appendChild(iframe);
           
            setTimeout(function()
                       {
                    var iframe = document.getElementById("ad-content");
                           if(iframe.style.display == "none" || iframe.style.display == "hidden" || iframe.style.visibility == "hidden" || iframe.offsetHeight == 0)
                           {
                            detected();
                                iframe.remove();
                           }
                           else
                           {
        
                                iframe.remove();
                             }
               }, 120);
        

                       console.log("MyV No Adblock - No adblocker detected");
    </script>






  </body>
</html>