<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRIME LAB SOLUTIONS INC</title>

    <?php include('includes/top-header.php') ?>
</head>

<body>

    <?php include('includes/header.php') ?>

    <section class="inner-banner">
        <div class="container">
            <h1 class="banner-title">Wishlist</h1>
        </div>
    </section>

    <main class="wishlist-page">
        <div class="container">
            <div class="wishlist-header">
                <h2>Your Saved Items</h2>
                <div class="wishlist-actions">
                    <!-- <button class="share-wishlist">
                        <svg viewBox="0 0 24 24" width="18">
                            <path
                                d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z" />
                        </svg>
                        Share
                    </button> -->
                    <button class="clear-all">Clear All</button>
                </div>
            </div>

            <div class="wishlist-grid">
                <!-- Product 1 -->
                <div class="wishlist-item">
                    <div class="product-image">
                        <img src="assets/upload/product/dummy-img.jpg" alt="Advanced Microscope">
                        <button class="remove-item" title="Remove item">
                            <svg viewBox="0 0 24 24" width="16">
                                <path
                                    d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" />
                            </svg>
                        </button>
                    </div>
                    <div class="product-details">
                        <h3>Syringe Filter, Polytetrafluorethylene, PTFE(Hydrophobic), 0.45µm, 25mm Diameter</h3>
                        <p class="product-sku">SKU: PL-MIC-4500X</p>
                        <div class="price-stock">
                            <span class="price">$1,299.00</span>
                            <span class="in-stock">In Stock</span>
                        </div>
                    </div>
                    <div class="product-actions">
                        <button class="add-to-cart">Add to Cart</button>
                        <button class="view-details">View Details</button>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="wishlist-item">
                    <div class="product-image">
                        <img src="assets/upload/product/dummy-img.jpg" alt="Laboratory Centrifuge">
                        <button class="remove-item" title="Remove item">
                            <svg viewBox="0 0 24 24" width="16">
                                <path
                                    d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" />
                            </svg>
                        </button>
                    </div>
                    <div class="product-details">
                        <h3>Syringe Filter, Polytetrafluorethylene, PTFE(Hydrophobic), 0.45µm, 25mm Diameter</h3>
                        <p class="product-sku">SKU: PL-CEN-12000RPM</p>
                        <div class="price-stock">
                            <span class="price">$2,450.00</span>
                            <span class="out-of-stock">Backordered</span>
                        </div>
                    </div>
                    <div class="product-actions">
                        <button class="add-to-cart" disabled>Notify Me</button>
                        <button class="view-details">View Details</button>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="wishlist-item">
                    <div class="product-image">
                        <img src="assets/upload/product/dummy-img.jpg" alt="UV Spectrophotometer">
                        <button class="remove-item" title="Remove item">
                            <svg viewBox="0 0 24 24" width="16">
                                <path
                                    d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" />
                            </svg>
                        </button>
                    </div>
                    <div class="product-details">
                        <h3>Syringe Filter, Polytetrafluorethylene, PTFE(Hydrophobic), 0.45µm, 25mm Diameter</h3>
                        <p class="product-sku">SKU: PL-SPEC-UV2000</p>
                        <div class="price-stock">
                            <span class="price">$3,750.00</span>
                            <span class="in-stock">In Stock</span>
                        </div>
                    </div>
                    <div class="product-actions">
                        <button class="add-to-cart">Add to Cart</button>
                        <button class="view-details">View Details</button>
                    </div>
                </div>
            </div>

            <div class="empty-wishlist" style="display: none;">
                <svg viewBox="0 0 24 24" width="48">
                    <path
                        d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                </svg>
                <h3>Your Wishlist is Empty</h3>
                <p>Save your favorite lab equipment to purchase later</p>
                <a href="products.php" class="browse-btn">Browse Products</a>
            </div>
        </div>
    </main>


    <!-- ========== footer =========== -->

    <?php include('includes/footer.php') ?>

</body>

</html>