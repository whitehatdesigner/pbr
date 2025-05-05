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
            <h1 class="banner-title">My Cart</h1>
        </div>
    </section>

    <main class="cart-page">
        <div class="container">
            <div class="cart-container">
                <!-- Cart Item -->
                <div class="cart-item">

                    <div class="item">
                        <div class="item-image">
                            <img src="assets/upload/product/dummy-img.jpg" alt="Plaid Shirt & Buttoned Skirt Set">
                        </div>
                        <div class="item-details">
                            <h3>Syringe Filter, Polytetrafluorethylene, PTFE(Hydrophobic), 0.45µm, 25mm Diameter</h3>
                            <div class="product-meta">
                                <p class="item-meta"><span>Catalog No.:</span> <span><b>CS-GLPT2545</b></span></p>
                                <p class="item-meta"><span>UOM:</span> <span><b>Case</b></span></p>
                            </div>

                            <div class="price-quantity">
                                <span class="price">$39.99</span>
                                <div class="item-quantity">
                                    <div class="quantity-control">
                                        <button class="qty-btn minus">-</button>
                                        <input type="number" value="1" min="1" class="qty-input">
                                        <button class="qty-btn plus">+</button>
                                    </div>
                                    <div class="delete-item">
                                        <i class="fa-solid fa-trash"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="item-image">
                            <img src="assets/upload/product/dummy-img.jpg" alt="Plaid Shirt & Buttoned Skirt Set">
                        </div>
                        <div class="item-details">
                            <h3>Syringe Filter, Polytetrafluorethylene, PTFE(Hydrophobic), 0.45µm, 25mm Diameter</h3>
                            <div class="product-meta">
                                <p class="item-meta"><span>Catalog No.:</span> <span><b>CS-GLPT2545</b></span></p>
                                <p class="item-meta"><span>UOM:</span> <span><b>Case</b></span></p>
                            </div>

                            <div class="price-quantity">
                                <span class="price">$39.99</span>
                                <div class="item-quantity">
                                    <div class="quantity-control">
                                        <button class="qty-btn minus">-</button>
                                        <input type="number" value="1" min="1" class="qty-input">
                                        <button class="qty-btn plus">+</button>
                                    </div>
                                    <div class="delete-item">
                                        <i class="fa-solid fa-trash"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-image">
                            <img src="assets/upload/product/dummy-img.jpg" alt="Plaid Shirt & Buttoned Skirt Set">
                        </div>
                        <div class="item-details">
                            <h3>Syringe Filter, Polytetrafluorethylene, PTFE(Hydrophobic), 0.45µm, 25mm Diameter</h3>
                            <div class="product-meta">
                                <p class="item-meta"><span>Catalog No.:</span> <span><b>CS-GLPT2545</b></span></p>
                                <p class="item-meta"><span>UOM:</span> <span><b>Case</b></span></p>
                            </div>

                            <div class="price-quantity">
                                <span class="price">$39.99</span>
                                <div class="item-quantity">
                                    <div class="quantity-control">
                                        <button class="qty-btn minus">-</button>
                                        <input type="number" value="1" min="1" class="qty-input">
                                        <button class="qty-btn plus">+</button>
                                    </div>
                                    <div class="delete-item">
                                        <i class="fa-solid fa-trash"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="order-summary">
                    <h3>Order Summary</h3>

                    <div class="summary-row">
                        <span>Subtotal</span>
                        <span>$39.99</span>
                    </div>

                    <div class="promo-code">
                        <input type="text" placeholder="Promo Code">
                        <button class="apply-btn">Apply</button>
                    </div>

                    <div class="summary-row">
                        <span>Shipping</span>
                        <span>TBD</span>
                    </div>

                    <div class="summary-row">
                        <span>Discount</span>
                        <span>-$0.00</span>
                    </div>

                    <div class="summary-row">
                        <span>Tax</span>
                        <span>TBD</span>
                    </div>

                    <div class="total-row">
                        <span>Estimated Total</span>
                        <span class="total-price">$39.99</span>
                    </div>

                    <p class="payment-option">or 4 interest-free payments of $10.00 with <strong>Afterpay</strong></p>

                    <div class="free-shipping-msg">
                        <p>You're $10.01 away from free shipping!</p>
                    </div>

                    <a href="checkout.php"><button class="checkout-btn">Proceed to Checkout</button></a>
                </div>
            </div>
        </div>
    </main>


    <!-- ========== footer =========== -->

    <?php include('includes/footer.php') ?>

</body>

</html>