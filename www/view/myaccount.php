<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/myAccount.css">
    <script src="js/updateProfileImg.js"></script>
    <script src="js/editProfile.js"></script>
    <script src="js/changeImageHover.js" defer></script>

    <title>My Account</title>
</head>
<body>
    <header>
        <?php
        include_once("view/component/header.php");
        ?>
    </header>

    <main class="myAccount">
        <div class="myAccount-background">
            <?php
            $this->renderPage();
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