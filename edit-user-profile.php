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

                    <!-- Edit Profile Section -->
                    <div id="profile" class="content-section">
                        <div class="card">
                            <h3>Edit Your Profile</h3>
                            <form>
                                <div class="group-input">
                                    <div class="box">
                                        <label>First Name</label>
                                        <input type="text" placeholder="Jhon">
                                    </div>
                                    <div class="box">
                                        <label>Last Name</label>
                                        <input type="text" placeholder="Last Name">
                                    </div>
                                </div>

                                <div class="group-input">
                                    <div class="box">
                                        <label>Phone No.</label>
                                        <input type="text" placeholder="64813258984">
                                    </div>
                                    <div class="box">
                                        <label>Email I'd</label>
                                        <input type="text" placeholder="info@gmail.com">
                                    </div>
                                </div>

                                <div class="box">
                                    <label>Address Line 1</label>
                                    <input type="text" placeholder="Address..">
                                </div>
                                <div class="box">
                                    <label>Address Line 2</label>
                                    <input type="text" placeholder="Address..">
                                </div>

                                <div class="group-input">
                                    <div class="box">
                                        <label>City</label>
                                        <input type="text" placeholder="city">
                                    </div>
                                    <div class="box">
                                        <label>State</label>
                                        <input type="text" placeholder="state">
                                    </div>
                                    <div class="box">
                                        <label>Country</label>
                                        <input type="text" placeholder="country">
                                    </div>
                                </div>

                                <div class="box">
                                    <label for="profile">Change Profile pic</label>
                                    <input type="file" id="profile">
                                </div>

                                <div class="box">
                                    <input type="submit" value="Update Profile">
                                </div>
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