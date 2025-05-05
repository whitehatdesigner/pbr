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
            <h1 class="banner-title">Checkout</h1>
        </div>
    </section>

    <main class="checkout-page">
        <div class="container">
            <!-- Checkout Progress Bar -->
            <div class="checkout-progress">
                <div class="step active" data-step="1">
                    <span>1</span>
                    <p>Shipping</p>
                </div>
                <div class="step" data-step="2">
                    <span>2</span>
                    <p>Payment</p>
                </div>
                <div class="step" data-step="3">
                    <span>3</span>
                    <p>Review</p>
                </div>
            </div>

            <div class="checkout-grid">
                <!-- Left Column - Forms -->
                <div class="checkout-forms">
                    <!-- Shipping Form -->
                    <form id="shippingForm" class="checkout-form active">
                        <h2>Shipping Information</h2>

                        <div class="form-row">
                            <div class="form-group">
                                <label>Full Name*</label>
                                <input type="text" name="full_name" required>
                            </div>
                            <div class="form-group">
                                <label>Lab/Institution Name*</label>
                                <input type="text" name="institution" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Street Address*</label>
                            <input type="text" name="address" required>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label>City*</label>
                                <input type="text" name="city" required>
                            </div>
                            <div class="form-group">
                                <label>State/Province*</label>
                                <input type="text" name="state" required>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>ZIP/Postal Code*</label>
                                <input type="text" name="zip" required>
                            </div>
                            <div class="form-group">
                                <label>Country*</label>
                                <select name="country" required>
                                    <option value="">Select</option>
                                    <option value="US">United States</option>
                                    <option value="CA">Canada</option>
                                    <option value="UK">United Kingdom</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">

                            <div class="form-group">
                                <label>Phone Number*</label>
                                <input type="tel" name="phone" required>
                            </div>

                            <div class="form-group">
                                <label>Email I'd*</label>
                                <input type="email" name="email" required>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="button" class="btn-next" onclick="goToStep(2)">Continue to Payment</button>
                        </div>
                    </form>

                    <!-- Payment Form -->
                    <form id="paymentForm" class="checkout-form">
                        <h2>Payment Method</h2>

                        <div class="payment-tabs">
                            <button type="button" class="tab-btn active" data-tab="credit">Credit Card</button>
                        </div>

                        <div class="payment-content active" data-tab-content="credit">
                            <div class="form-group">
                                <label>Card Number*</label>
                                <div class="card-input">
                                    <input type="text" name="card_number" placeholder="1234 5678 9012 3456" required>
                                    <!-- <div class="card-icons">
                                        <img src="assets/images/payment/visa.svg" alt="Visa">
                                        <img src="assets/images/payment/mastercard.svg" alt="Mastercard">
                                        <img src="assets/images/payment/amex.svg" alt="American Express">
                                    </div> -->
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label>Expiration Date*</label>
                                    <input type="text" name="expiry" placeholder="MM/YY" required>
                                </div>
                                <div class="form-group">
                                    <label>Security Code*</label>
                                    <input type="text" name="cvv" placeholder="CVV" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Name on Card*</label>
                                <input type="text" name="card_name" required>
                            </div>
                        </div>



                        <div class="form-actions">
                            <button type="button" class="btn-prev" onclick="goToStep(1)">Back</button>
                            <button type="button" class="btn-next" onclick="goToStep(3)">Review Order</button>
                        </div>
                    </form>

                    <!-- Review Form -->
                    <form id="reviewForm" class="checkout-form">
                        <h2>Review Your Order</h2>

                        <div class="review-section">
                            <h3>Shipping Information</h3>
                            <div class="review-info" id="shippingReview"></div>
                            <a href="javascript:void(0)" onclick="goToStep(1)"><i class="fa-solid fa-pencil"></i>
                                Edit</a>
                        </div>

                        <div class="review-section">
                            <h3>Payment Method</h3>
                            <div class="review-info" id="paymentReview"></div>
                            <a href="javascript:void(0)" onclick="goToStep(2)"><i class="fa-solid fa-pencil"></i>
                                Edit</a>
                        </div>

                        <div class="review-totals">
                            <div class="total-row">
                                <span>Subtotal</span>
                                <span>$1,388.98</span>
                            </div>
                            <div class="total-row">
                                <span>Shipping</span>
                                <span>$24.99</span>
                            </div>
                            <div class="total-row">
                                <span>Tax</span>
                                <span>$112.32</span>
                            </div>
                            <div class="total-row grand-total">
                                <span>Total</span>
                                <span>$1,526.29</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="checkbox-label">
                                <input type="checkbox" required>
                                <span>I agree to the <a href="#">terms & conditions</a> and <a href="#">lab equipment
                                        handling policy</a></span>
                            </label>
                        </div>

                        <div class="form-actions">
                            <button type="button" class="btn-prev" onclick="goToStep(2)">Back</button>
                            <button type="submit" class="btn-submit place-order" onclick="goToInvoice()">Place
                                Order</button>
                        </div>
                    </form>
                </div>

                <!-- Right Column - Order Summary -->
                <div class="order-summary">
                    <h2>Order Summary</h2>

                    <div class="order-items">
                        <div class="order-item">
                            <div class="item-image">
                                <img src="assets/upload/product/dummy-img.jpg" alt="Microscope">
                            </div>
                            <div class="item-details">
                                <h4>
                                    Syringe Filter, Polytetrafluorethylene, PTFE(Hydrophobic), 0.45µm, 25mm Diameter
                                </h4>
                                <p>SKU: PL-MIC-4500X</p>
                                <div class="item-price-qty">
                                    <span>$1,299.00</span>
                                    <span>Qty: 1</span>
                                </div>
                            </div>
                        </div>
                        <div class="order-item">
                            <div class="item-image">
                                <img src="assets/upload/product/dummy-img.jpg" alt="Centrifuge Tubes">
                            </div>
                            <div class="item-details">
                                <h4>
                                    Syringe Filter, Polytetrafluorethylene, PTFE(Hydrophobic), 0.45µm, 25mm Diameter
                                </h4>
                                <p>SKU: PL-TUBE-50ML</p>
                                <div class="item-price-qty">
                                    <span>$44.99</span>
                                    <span>Qty: 2</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="summary-totals">
                        <div class="total-row">
                            <span>Subtotal</span>
                            <span>$1,388.98</span>
                        </div>
                        <div class="total-row">
                            <span>Shipping</span>
                            <span>$24.99</span>
                        </div>
                        <div class="total-row">
                            <span>Tax</span>
                            <span>$112.32</span>
                        </div>
                        <div class="total-row grand-total">
                            <span>Total</span>
                            <span>$1,526.29</span>
                        </div>
                    </div>

                    <div class="secure-checkout">
                        <svg viewBox="0 0 24 24" width="20">
                            <path
                                d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11V11.99z" />
                        </svg>
                        <span>Secure SSL Encrypted Checkout</span>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- ========== footer =========== -->

    <?php include('includes/footer.php') ?>

</body>

</html>