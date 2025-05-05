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
            <h1 class="banner-title">Dashboard</h1>
        </div>
    </section>


    <section class="user-dashboard section-padding">
        <div class="container">
            <div class="main-user-dashboard">
                <?php include('includes/user-sidebar.php') ?>

                     <!-- Main Content Area -->
                     <div class="main-content">

<!-- My Orders Section -->
<div id="orders" class="content-section">
    <h3>My Orders</h3>

    <div class="orders-table-container">
        <table class="orders-table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Date</th>
                    <th>Items</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#ORD-2023-001</td>
                    <td>15 Oct 2023</td>
                    <td>2 Items</td>
                    <td>$1,299.00</td>
                    <td><span class="status delivered">Delivered</span></td>
                    <td><button class="view-btn">View</button></td>
                </tr>
                <tr>
                    <td>#ORD-2023-002</td>
                    <td>22 Oct 2023</td>
                    <td>1 Item</td>
                    <td>$899.00</td>
                    <td><span class="status shipped">Shipped</span></td>
                    <td><button class="view-btn">View</button></td>
                </tr>
                <tr>
                    <td>#ORD-2023-003</td>
                    <td>28 Oct 2023</td>
                    <td>3 Items</td>
                    <td>$2,450.00</td>
                    <td><span class="status processing">Processing</span></td>
                    <td><button class="view-btn">View</button></td>
                </tr>
                <tr>
                    <td>#ORD-2023-004</td>
                    <td>05 Nov 2023</td>
                    <td>1 Item</td>
                    <td>$1,599.00</td>
                    <td><span class="status cancelled">Cancelled</span></td>
                    <td><button class="view-btn">View</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

</div>
            </div>
        </div>
    </section>


    <!-- ========== footer =========== -->

    <?php include('includes/footer.php') ?>

</body>

</html>