<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category: <?php echo $this->category?></title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/category.css">

</head>
<body>
<header>
        <?php
        include_once("view/component/header.php");
        ?>
    </header>
    <main>
        <div class="category-wrapper">
            <?php
            $this->renderCategory();
            ?>
        </div>
    </main>

    <footer>
        <?php
        include_once("view/component/footer.php");
        ?>
    </footer>
</body>
</html>