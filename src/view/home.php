<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/home.css">
    <link rel="stylesheet" href="style/clonehome.css">
    <link rel="stylesheet" href="style/sliderproduct.css">

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
        $this->getAllproduct();
        // $this->getAllproduct();
        // $this->getAllproduct();
        ?>
    </main>


    <footer>
        <?php
        include_once("view/component/footer.php");
        ?>
    </footer>
</body>

</html>