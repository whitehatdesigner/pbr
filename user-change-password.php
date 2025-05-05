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
                <!-- Change Password Section -->
                <div id="password" class="content-section">
                    <div class="card">
                        <h3>Change Password</h3>
                        <form>
                            <div class="form-group">
                                <label>Current Password</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>New Password</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Confirm New Password</label>
                                <input type="password" class="form-control">
                            </div>
                            <input type="submit" value="Update Password">
                            <!-- <button type="submit" class="btn btn-primary">Update Password</button> -->
                        </form>
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