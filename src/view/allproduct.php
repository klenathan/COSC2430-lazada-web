<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Product</title>

    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/search.css">
    <link rel="stylesheet" href="style/allproduct.css">
</head>
<body>
    <header>
        <?php
        include_once("view/component/header.php");
        ?>
    </header>

    <main>
        <div class="side-bar">
            
            <div class="filter-wrapper">
                <h2>FILTER</h2>
                <form action="/allproduct" method="get">
                    <input type="text" name="min" id="min-input" 
                    autocomplete="off" placeholder="min">
                    
                    <input type="text" name="max" id="max-input" 
                    autocomplete="off" placeholder="max">
                    
                    <button type="submit">Search</button>
                </form>
            </div>
            
        </div>

        <div class="filter-result-wrapper">
            <?php
            $this->renderResult();
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