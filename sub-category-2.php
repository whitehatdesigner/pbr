<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRIME LAB SOLUTIONS INC - Products</title>
    <?php include('includes/top-header.php') ?>


</head>

<body>

    <?php include('includes/header.php') ?>

    <section class="inner-banner">
        <div class="container">
            <h1 class="banner-title">Products</h1>
        </div>
    </section>

    <main class="product-page">
        <div class="container">
            <div class="main-product-page">
                <h3 class="section-title">Choose Sub Category 2:</h3>
                <div class="product-grid">
                    <?php
    $categories = [
    "Beakers",
      "Cylinder",
      "Flasks",
      "Glass Media/Storage",
      "Funnels",
      "Disposable Borosilicate Glass Pasteur",
      "Glass Tubes (Culture Test Tubes)"
    ];

    foreach ($categories as $cat) {
        echo '
        <div class="product-card-box">
            <img src="assets/upload/categories/dummy-img.jpg" alt="' . $cat . '">
            <a href="sub-category-3.php"><h3>' . $cat . '</h3></a>
        </div>';
    }
    ?>
                </div>
            </div>

        </div>
    </main>

    <?php include('includes/footer.php') ?>

</body>

</html>