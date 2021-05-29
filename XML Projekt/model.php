<!DOCTYPE html>
<html>
<head>
    <?php
      $naziv = $_GET['post'];
    ?>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="model.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="icon" href="images/airjordanred.png" type="image/gif" sizes="16x16">
    <title><?php echo $naziv ?></title>
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
    <?php
    session_start();
    $naziv = $_GET['post'];
    include 'xmlphp.php';
    $xml = new SimpleXMLElement($xmlstr) or die("can't load xml");
    $result = $xml->xpath("/jordan1/model[naziv = '$naziv']");
    $result = $result[0];
    echo "<h2>$result->naziv</h2>";
    echo "<img src='$result->imgpath'>";
    echo "<p><b>Release Date:</b> $result->datumIzlaska</p><br>";
    echo "<p><b>Backstory:</b> <br><br> $result->tekst</p><br>";
    echo "<img src='$result->imgpath2'> <br><br>";
    echo "<p><b>Color:</b> $result->boja</p><br>";
    echo "<p><b>Retail Price:</b> $$result->maloprodajnaCijena</p><br>";
    echo "<p><b>Resell Price:</b> $$result->preprodajnaCijena</p><br>";
    echo "<p><b>Style Code:</b> $result->styleCode</p><br>";
    ?>
    <p><b>Source: </b><a href='https://stockx.com/'>StockX</a></p><br>
    <button onclick="goBack()">&laquo; Go Back</button>
    </div>
    <script>
    function goBack() {
    window.history.back();
    }
    </script>
</div>
<footer class="footer ">
    <div>
        <h4><img src="images/wings.png"><br><br>Patrik Jurakić 2021</h4>
    </div>
</footer>
</body>
</html>