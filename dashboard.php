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

                    <div class="user-dashboard-main">
                        <!-- Add this inside your <div class="user-dashboard"> -->
                        <div class="profile-card">
                            <div class="profile-header">
                                <div class="profile-avatar">
                                    <img src="https://ui-avatars.com/api/?name=User+Name&background=6c5ce7&color=fff"
                                        alt="Profile Picture">
                                    <a href="edit-user-profile.php" class="edit-avatar-btn">
                                        <i class="fas fa-camera"></i>
                                    </a>
                                </div>
                                <h2>Welcome Back, <span>User Name</span></h2>
                                <p>Joined: October 2023</p>
                            </div>

                            <div class="profile-stats">
                                <div class="stat-item">
                                    <div class="stat-value">12</div>
                                    <div class="stat-label">Orders</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-value">$24,599</div>
                                    <div class="stat-label">Total Spent</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-value">8</div>
                                    <div class="stat-label">Reviews</div>
                                </div>
                            </div>

                            <div class="profile-details">
                                <div class="detail-item">
                                    <i class="fas fa-envelope"></i>
                                    <div>
                                        <div class="detail-label">Email</div>
                                        <div class="detail-value">user@example.com</div>
                                    </div>
                                </div>
                                <div class="detail-item">
                                    <i class="fas fa-phone"></i>
                                    <div>
                                        <div class="detail-label">Phone</div>
                                        <div class="detail-value">+91 9876543210</div>
                                    </div>
                                </div>
                                <div class="detail-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <div>
                                        <div class="detail-label">Address</div>
                                        <div class="detail-value">123 Street, City, Country</div>
                                    </div>
                                </div>
                            </div>

                            <div class="profile-actions">
                                <a href="edit-user-profile.php" class="edit-profile-btn">
                                    <i class="fas fa-user-edit"></i> Edit Profile
                                </a>
                            </div>
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