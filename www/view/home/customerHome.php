<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/home.css">

    <title>Lazada</title>
</head>
<body>
    <header>
        <?php
        include_once("view/component/header.php");
        include_once("view/component/homeSlider.php");
        ?>
    </header>
    <main>

        <?php
        $this->getAllCategory();
        $this->getBestSeller();
        echo '<div class="banner"><img src="../../assets/image/banner/men fashion.jpg" alt="men fashion banner"></div>';
        $this->getCategory("Men Fashion");
        echo '<div class="banner"><img src="../../assets/image/banner/womenfashion.jpg" alt="girlfashion banner"></div>';
        $this->getCategory("Girls Fashion");
    

        ?>
    </main>


    <footer>
        <?php
        include_once("view/component/footer.php");
        ?>
    </footer>
</body>
<script src="../js/slider.js"></script>

</html>