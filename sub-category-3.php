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
        <div class="breadcrumbs">
                    <a href="#">product</a> >
                    <a href="products.php">sub-category1</a> >
                    <a href="products.php?category=Glass Labwares">sub-category2</a> >
                    sub-category3
                </div>
            <div class="main-product-page">
                <h3 class="section-title">Choose Sub Category 3:</h3>
                <div class="product-grid">
                    <?php
    $categories = [
    "Shake Flask",
      "Iodine Flasks",
      "Erlenmeyer Flasks (Titration Flask)",
    ];

    foreach ($categories as $cat) {
        echo '
        <div class="product-card-box">
            <img src="assets/upload/categories/dummy-img.jpg" alt="' . $cat . '">
            <a href="sub-category-4.php"><h3>' . $cat . '</h3></a>
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