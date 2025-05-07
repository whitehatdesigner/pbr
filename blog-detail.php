<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Detail - Prime Lab Solutions Inc</title>
    <?php include('includes/top-header.php') ?>
</head>

<body>
    <?php include('includes/header.php') ?>

    <section class="inner-banner">
        <div class="container">
            <h1 class="banner-title">Blog Details</h1>
        </div>
    </section>

    <section class="inner-blog-page blog-section">
        <div class="container">
            <div class="blog-row">
                <!-- Main Blog Content -->
                <div class="blog-main">
                    <article class="blog-detail">
                        <img src="assets/upload/blog/blog-img1.jpg" alt="Researcher working on coronavirus"
                            class="blog-detail-img">
                        <div class="blog-detail-content">
                            <div class="blog-date"><b>Date:</b> 05-Jan-2025</div>
                            <h1 class="blog-title">A researcher is conducting research on coronavirus in the lab</h1>
                            <div class="blog-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem laborum officia
                                    amet cum vel eaque? Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                                    in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque
                                    eu tellus rhoncus ut eleifend nibh porttitor.</p>

                                <p>Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl
                                    tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor
                                    posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at
                                    risus et justo dignissim congue.</p>

                                <p>Donec lacinia congue felis in faucibus. Donec sed odio dui. Nullam quis risus eget
                                    urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient
                                    montes, nascetur ridiculus mus. Cras mattis consectetur purus sit amet fermentum.
                                </p>
                                <div class="sharethis-inline-share-buttons"></div>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Sidebar -->
                <?php include('includes/blog-sidebar.php') ?>

            </div>
        </div>
    </section>

    <?php include('includes/footer.php') ?>
</body>

</html>