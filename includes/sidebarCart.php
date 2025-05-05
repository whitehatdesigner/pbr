
<!-- ===================== cart sidebar ==================== -->

<div class="my-cart-sidebar">
    <!-- Cart Sidebar -->
    <div class="cart-sidebar" id="cartSidebar">
        <div class="sidebar-header">
            <h3>Your Cart</h3>
            <button class="close-sidebar" onclick="toggleCartSidebar()">
                <svg viewBox="0 0 24 24" width="24">
                    <path
                        d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" />
                </svg>
            </button>
        </div>

        <div class="cart-items">
            <!-- Item 1 -->
            <div class="sidebar-item">
                <div class="item-image">
                    <img src="assets/upload/product/dummy-img.jpg" alt="Plaid Shirt Set">
                </div>
                <div class="item-details">
                    <h4>Syringe Filter, Polytetrafluorethylene, PTFE(Hydrophobic), 0.45µm, 25mm Diameter</h4>
                    <div class="product-meta">
                        <p class="item-meta"><span>Catalog No.:</span> <span><b>CS-GLPT2545</b></span></p>
                        <p class="item-meta"><span>UOM:</span> <span><b>Case</b></span></p>
                    </div>
                    <div class="item-controls">
                        <div class="qty-control">
                            <button class="qty-btn minus">−</button>
                            <span class="qty">1</span>
                            <button class="qty-btn plus">+</button>
                        </div>
                        <span class="item-price">$39.99</span>
                    </div>
                </div>
                <button class="delete-item">
                    <svg viewBox="0 0 24 24" width="18">
                        <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z" />
                    </svg>
                </button>
            </div>

                     <!-- Item 1 -->
                     <div class="sidebar-item">
                <div class="item-image">
                    <img src="assets/upload/product/dummy-img.jpg" alt="Plaid Shirt Set">
                </div>
                <div class="item-details">
                    <h4>Syringe Filter, Polytetrafluorethylene, PTFE(Hydrophobic), 0.45µm, 25mm Diameter</h4>
                    <div class="product-meta">
                        <p class="item-meta"><span>Catalog No.:</span> <span><b>CS-GLPT2545</b></span></p>
                        <p class="item-meta"><span>UOM:</span> <span><b>Case</b></span></p>
                    </div>
                    <div class="item-controls">
                        <div class="qty-control">
                            <button class="qty-btn minus">−</button>
                            <span class="qty">1</span>
                            <button class="qty-btn plus">+</button>
                        </div>
                        <span class="item-price">$39.99</span>
                    </div>
                </div>
                <button class="delete-item">
                    <svg viewBox="0 0 24 24" width="18">
                        <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z" />
                    </svg>
                </button>
            </div>

                     <!-- Item 1 -->
                     <div class="sidebar-item">
                <div class="item-image">
                    <img src="assets/upload/product/dummy-img.jpg" alt="Plaid Shirt Set">
                </div>
                <div class="item-details">
                    <h4>Syringe Filter, Polytetrafluorethylene, PTFE(Hydrophobic), 0.45µm, 25mm Diameter</h4>
                    <div class="product-meta">
                        <p class="item-meta"><span>Catalog No.:</span> <span><b>CS-GLPT2545</b></span></p>
                        <p class="item-meta"><span>UOM:</span> <span><b>Case</b></span></p>
                    </div>
                    <div class="item-controls">
                        <div class="qty-control">
                            <button class="qty-btn minus">−</button>
                            <span class="qty">1</span>
                            <button class="qty-btn plus">+</button>
                        </div>
                        <span class="item-price">$39.99</span>
                    </div>
                </div>
                <button class="delete-item">
                    <svg viewBox="0 0 24 24" width="18">
                        <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="sidebar-footer">
            <div class="summary-row">
                <span>Subtotal</span>
                <span>$89.98</span>
            </div>
            <div class="summary-row">
                <span>Shipping</span>
                <span>Calculated at checkout</span>
            </div>
            <div class="total-row">
                <span>Total</span>
                <span>$89.98</span>
            </div>
            <button class="checkout-btn">Proceed to Checkout</button>
            <a href="cart.php" class="view-cart">View Full Cart</a>
        </div>
    </div>

    <div class="sidebar-overlay" id="sidebarOverlay" onclick="toggleCartSidebar()"></div>
</div>