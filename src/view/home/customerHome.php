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
        // $this->getAllproduct();
        $this->getBestSeller();
        $this->getCategory("Men Fashion");
        $this->getCategory("Girls Fashion");
        // $this->getAllCategory();

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