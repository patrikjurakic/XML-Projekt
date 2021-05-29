<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="icon" href="images/airjordanred.png" type="image/gif" sizes="16x16">
    <title>Air Jordan 1 | Retro Models</title>
</head>
<body>

<div class="main">
    <header class="header">
        <div>
            <a href="index.html"><img src="images/airjordan.png"></a>
        </div>
    </header>
    <div class="header2">
        <div class="navigation">
        <a href="index.html">HOME</a>
        <a href="baza.php">JORDAN 1s RETRO</a>
        </div>
    </div>
    <div class="content animate__animated animate__bounceInRight">
    <h2>AIR JORDAN 1 RETRO MODELS</h2>
    <?php
    include 'xmlphp.php';
    $xml = new SimpleXMLElement($xmlstr) or die("can't load xml");
    foreach($xml->model as $model){
        ?> 
        <div class="model">
        <?php
        echo  '<a href="model.php?post='.$model->naziv.'"><img src="' . $model->imgpath . '"></a>'  . ' ' . '<h2><a href="model.php?post='.$model->naziv.'">'. $model->naziv . '</a></h2>'
        . 'Release date: ' . $model->datumIzlaska
        . '<br>' . 'Retail Price: $' .$model->maloprodajnaCijena 
        . '<br>' . 'Resell Price: $' .$model->preprodajnaCijena;
        ?>
        </div>
        <?php
    }
    ?>
    <p>
        Source: <a href="https://stockx.com/">StockX</a>
    </p>
    </div>
</div>
<footer class="footer ">
    <div>
        <h4><img src="images/wings.png"><br><br>Patrik Jurakić 2021</h4>
    </div>
</footer>
<button onclick="topFunction()" id="gumb" title="Go to top"><img src="images/arrow.png"></button>
<script>
var mybutton = document.getElementById("gumb");
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>