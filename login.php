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
            <h1 class="banner-title">My Login</h1>
        </div>
    </section>

    <main class="login-page">
        <section class="auth-section">
            <div class="container">
                <!-- Toggle Between Login/Signup -->

                <div class="auth-tabs">
                    <button class="tab-btn active" onclick="openTab('login')">Login</button>
                    <button class="tab-btn" onclick="openTab('signup')">Sign Up</button>
                </div>

                <!-- Login Form -->
                <div id="login" class="auth-form active">
                    <form action="login.php" method="POST">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="lab@example.com" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="••••••••" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                        <a href="#forgot-password" class="forgot-link">Forgot Password?</a>
                    </form>
                </div>

                <!-- Signup Form -->
                <div id="signup" class="auth-form">
                    <form action="signup.php" method="POST">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="name" placeholder="Dr. John Doe" required>
                        </div>
                        <div class="form-group">
                            <label>Phone no.</label>
                            <input type="email" name="email" placeholder="xxxx-xxx-xxx" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="lab@example.com" required>
                        </div>
                        <!-- Updated Password Fields (Add this to both login and signup forms) -->
                        <div class="form-group password-group">
                            <label>Password</label>
                            <div class="password-wrapper">
                                <input type="password" name="password" placeholder="••••••••" required>
                                <span class="toggle-password" onclick="togglePassword(this)">
                                    <i class="eye-icon">👁️</i>
                                </span>
                            </div>
                        </div>

                        <div class="form-group password-group">
                            <!-- For signup's confirm password -->
                            <label>Confirm Password</label>
                            <div class="password-wrapper">
                                <input type="password" name="confirm_password" placeholder="••••••••" required>
                                <span class="toggle-password" onclick="togglePassword(this)">
                                    <i class="eye-icon">👁️</i>
                                </span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Create Account</button>
                    </form>
                </div>
            </div>
        </section>

        <!-- Forgot Password Modal (Add before </section>) -->
<div id="forgot-password-modal" class="modal">
    <div class="modal-content">
        <span class="close-modal" onclick="closeModal()">&times;</span>
        <h2>Reset Password</h2>
        <form id="forgot-password-form">
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" placeholder="Enter your registered email" required>
            </div>
            <button type="submit" class="btn btn-primary">Send Reset Link</button>
        </form>
        <div class="success-message" style="display:none;">
            <i class="success-icon">✓</i>
            <h3>Email Sent!</h3>
            <p>We've sent a password reset link to your email.</p>
        </div>
    </div>
</div>
    </main>


    <!-- ========== footer =========== -->

    <?php include('includes/footer.php') ?>

</body>

</html>