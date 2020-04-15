<?php

$page_title = "galery";

include 'includes/config.php';

include 'includes/header.php';

include 'includes/navbar.php';

$dirname = "uploads/";
$images = glob ($dirname . "*.jpg");

$sql1 = "SELECT foto FROM upload_photo";
$result = mysqli_query ($connection, $sql1);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $path = "databasephoto/" . $row['foto'];
?> 
        <div id="landing">
            <div id="landing-text">
                <div id="landing-text-inner">
                    <h1>Ade Rizki Wiranto</h1>
                    <h2>Urban Photography</h2>
                    <a href="#images" class="btn" id="view-work">
                        View Work
                    </a>
                </div>
            </div>
            <div id="landing-images"></div>
        </div>
           
        <div class="caption">
            <h3>Photo One</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing   elit. Ipsum, veniam?</p></div>
            <!-- Image Section -->
            <div id="images">
            <img src="<?php echo $path; ?>" id="<?php $filename = $row['foto']; ?>">
            <div class="caption">
                <h3 class="desc"><?php echo $row["judul"]; ?></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, veniam?</p>
            </div>
            <?php
    }
    mysqli_free_result ($result);
}

mysqli_close ($connection);
unset ($connection);

include 'includes/footer.php';

?>
