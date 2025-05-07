<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRIME LAB SOLUTIONS INC - Product Details</title>
    <?php include('includes/top-header.php') ?>
</head>

<body>

    <?php include('includes/header.php') ?>

    <section class="inner-banner">
        <div class="container">
            <h1 class="banner-title">Product Details</h1>
        </div>
    </section>

    <main class="product-details-page">
        <div class="product-details">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="index.php">Home</a> >
                    <a href="products.php">Catalog</a> >
                    <a href="products.php?category=Glass Labwares">Glass Labwares</a> >
                    Beakers
                </div>
                <div class="main-product-detail">
                    <!-- Product Images -->
                    <div class="product-images">

                        <div class="sub-images">
                            <img src="assets/upload/dummy/product-img1.jpg" alt="Glass Beaker"
                                class="product-main-image">
                            <img src="assets/upload/dummy/product-img1.jpg" alt="Glass Beaker"
                                class="product-main-image">
                            <img src="assets/upload/dummy/product-img1.jpg" alt="Glass Beaker"
                                class="product-main-image">
                            <img src="assets/upload/dummy/product-img1.jpg" alt="Glass Beaker"
                                class="product-main-image">
                            <img src="assets/upload/dummy/product-img1.jpg" alt="Glass Beaker"
                                class="product-main-image">
                            <img src="assets/upload/dummy/product-img1.jpg" alt="Glass Beaker"
                                class="product-main-image">
                            <img src="assets/upload/dummy/product-img1.jpg" alt="Glass Beaker"
                                class="product-main-image">

                        </div>
                        <div class="main-image-box">
                            <img src="assets/upload/dummy/product-img1.jpg" alt="Glass Beaker"
                                class="product-main-image">
                        </div>

                    </div>

                    <!-- Product Info -->
                    <div class="product-info">

                        <span class="new-badge">New!</span>

                        <h1 class="product-title">Flask, Filtering / Erlenmeyer, Heavy Wall, Graduated</h1>
                        <p>This flasks, without tabulation, are blown from a Borosilicate 3.3 glass tube to ensure
                            uniform wall thickness and to ensure maximum strength. These flasks are graduated to show
                            approximate capacity. All flasks have permanent white enamel graduations and marking spots.
                            Marked "Filter Flask" in order to avoid confusion with similar sizes of Erlenmeyer Flasks.
                        </p>

                        <div class="product-price">$42.61 - $342.3</div>

                        <div class="buy-btn">
                            <a href="#">Add Wishlist</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="table-design">
            <div class="container">
                <div class="main-table-design">
                <table id="flaskTable">
                    <thead>
                        <tr>
                            <th>Catalog Number</th>
                            <th>Description</th>
                            <th>Capacity</th>
                            <th>Graduation Interval</th>
                            <th>Graduation Range</th>
                            <th>Rubber Stopper</th>
                            <th class="fixed-col">Price</th>
                            <th class="fixed-col">Qty</th>
                            <th class="fixed-col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Table rows will be populated by JavaScript -->
                    </tbody>
                </table>
                </div>
      
            </div>
        </div>
    </main>


    <?php include('includes/footer.php') ?>


    <script>
        // Flask data
        const flaskData = [
            {
                catalogNumber: "231.502.05",
                description: "Flask, Filtering, Heavy Well, Graduated, 250mL",
                capacity: "250 ml",
                graduationInterval: "25",
                graduationRange: "75-250 ml",
                rubberStopper: "6",
                price: "$42.61/Each",
                quantity: 1
            },
            {
                catalogNumber: "231.502.06",
                description: "Flask, Filtering, Heavy Well, Graduated, 500mL",
                capacity: "500 ml",
                graduationInterval: "50",
                graduationRange: "150-500 ml",
                rubberStopper: "7",
                price: "$98.22/Each",
                quantity: 4
            },
            {
                catalogNumber: "231.502.07",
                description: "Flask, Filtering, Heavy Well, Graduated, 1000mL",
                capacity: "1000 ml",
                graduationInterval: "50",
                graduationRange: "300-1000 ml",
                rubberStopper: "8",
                price: "$133.35/Each",
                quantity: 4
            },
            {
                catalogNumber: "231.502.08",
                description: "Flask, Filtering, Heavy Well, Graduated, 2000mL",
                capacity: "2000 ml",
                graduationInterval: "200",
                graduationRange: "600-1800 ml",
                rubberStopper: "9",
                price: "$248.66/Each",
                quantity: 4
            },
            {
                catalogNumber: "231.502.09",
                description: "Flask, Filtering, Heavy Well, Graduated, 4000mL",
                capacity: "4000 ml",
                graduationInterval: "500",
                graduationRange: "1500-3500 ml",
                rubberStopper: "12",
                price: "$342.30/Each",
                quantity: 4
            }
        ];

        // Populate the table
        document.addEventListener('DOMContentLoaded', function() {
            const tableBody = document.querySelector('#flaskTable tbody');
            
            flaskData.forEach(flask => {
                const row = document.createElement('tr');
                
                row.innerHTML = `
                    <td>${flask.catalogNumber}</td>
                    <td> <span class="wrap">${flask.description}</span> </td>
                    <td>${flask.capacity}</td>
                    <td>${flask.graduationInterval}</td>
                    <td>${flask.graduationRange}</td>
                    <td>${flask.rubberStopper}</td>
                    <td class="price fixed-col">${flask.price}</td>
                    <td class="fixed-col">
                        <div class="quantity-control">
                            <button class="quantity-btn minus" data-catalog="${flask.catalogNumber}">-</button>
                            <input type="text" class="quantity-input" value="${flask.quantity}" data-catalog="${flask.catalogNumber}">
                            <button class="quantity-btn plus" data-catalog="${flask.catalogNumber}">+</button>
                        </div>
                    </td>
                    <td class="fixed-col"><button class="add-to-cart" data-catalog="${flask.catalogNumber}">Add To Cart</button></td>
                `;
                
                tableBody.appendChild(row);
            });

            // Add event listeners for quantity buttons
            document.querySelectorAll('.plus').forEach(button => {
                button.addEventListener('click', function() {
                    const catalog = this.getAttribute('data-catalog');
                    const input = document.querySelector(`.quantity-input[data-catalog="${catalog}"]`);
                    input.value = parseInt(input.value) + 1;
                });
            });

            document.querySelectorAll('.minus').forEach(button => {
                button.addEventListener('click', function() {
                    const catalog = this.getAttribute('data-catalog');
                    const input = document.querySelector(`.quantity-input[data-catalog="${catalog}"]`);
                    if (parseInt(input.value) > 1) {
                        input.value = parseInt(input.value) - 1;
                    }
                });
            });

            // Add event listeners for add to cart buttons
            document.querySelectorAll('.add-to-cart').forEach(button => {
                button.addEventListener('click', function() {
                    const catalog = this.getAttribute('data-catalog');
                    const input = document.querySelector(`.quantity-input[data-catalog="${catalog}"]`);
                    const quantity = input.value;
                    const flask = flaskData.find(f => f.catalogNumber === catalog);
                    
                    alert(`Added ${quantity} of ${flask.description} to cart`);
                });
            });
        });
    </script>
</body>

</html>