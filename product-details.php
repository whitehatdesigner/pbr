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

                        <h1 class="product-title">Shake Flasks, 3 Deep Baffles, Reinforced Top</h1>
                        <p>Shake flasks with baffles are widely used in microbiology, biotechnology, and pharmaceutical research laboratories for various applications such as bacterial or yeast fermentation, protein expression, and enzyme production. They are available in different sizes and configurations to accommodate specific volume requirements and experimental needs.
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
                            <th>Approx O.D. x Height</th>
                            <th>Availablity</th>
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
                catalogNumber: "235.202.01",
                description: "Flask, Shake, 250ml, Reinforced Top, 3 Deep Baffles",
                ApproxODHeight: "82x134 mm",
                Availablity: "ETA 2-3 Weeks	",
                price: "$42.61/Each",
                quantity: 1
            },
                     {
                catalogNumber: "235.202.01",
                description: "Flask, Shake, 250ml, Reinforced Top, 3 Deep Baffles",
                ApproxODHeight: "82x134 mm",
                Availablity: "ETA 2-3 Weeks	",
                price: "$42.61/Each",
                quantity: 1
            },
                      {
                catalogNumber: "235.202.01",
                description: "Flask, Shake, 250ml, Reinforced Top, 3 Deep Baffles",
                ApproxODHeight: "82x134 mm",
                Availablity: "ETA 2-3 Weeks	",
                price: "$42.61/Each",
                quantity: 1
            },
                      {
                catalogNumber: "235.202.01",
                description: "Flask, Shake, 250ml, Reinforced Top, 3 Deep Baffles",
                ApproxODHeight: "82x134 mm",
                Availablity: "ETA 2-3 Weeks	",
                price: "$42.61/Each",
                quantity: 1
            },
                       {
                catalogNumber: "235.202.01",
                description: "Flask, Shake, 250ml, Reinforced Top, 3 Deep Baffles",
                ApproxODHeight: "82x134 mm",
                Availablity: "ETA 2-3 Weeks	",
                price: "$42.61/Each",
                quantity: 1
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
                    <td>${flask.ApproxODHeight}</td>
                    <td>${flask.Availablity}</td>
       
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