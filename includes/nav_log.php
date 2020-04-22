<style>
    .navbar {
    transition: all 0.4s;
}

.navbar .nav-link {
    color: #fff;
}

.navbar .nav-link:hover,
.navbar .nav-link:focus {
    color: #fff;
    text-decoration: none;
}

.navbar .navbar-brand {
    color: #fff;
}


/* Change navbar styling on scroll */
.navbar.active {
    background: #fff;
    box-shadow: 1px 2px 10px rgba(0, 0, 0, 0.1);
}

.navbar.active .nav-link {
    color: #555;
}

.navbar.active .nav-link:hover,
.navbar.active .nav-link:focus {
    color: #555;
    text-decoration: none;
}

.navbar.active .navbar-brand {
    color: #555;
}


/* Change navbar styling on small viewports */
@media (max-width: 991.98px) {
    .navbar {
        background: #fff;
    }

    .navbar .navbar-brand, .navbar .nav-link {
        color: #555;
    }
}



/*
*
* ==========================================
* FOR DEMO PURPOSES
* ==========================================
*
*/
.text-small {
    font-size: 0.9rem !important;
}


body {
    min-height: 110vh;
    background-color: #4ca1af;
    background-image: linear-gradient(135deg, #4ca1af 0%, #c4e0e5 100%);
}
  </style>
  <!-- Navbar-->
  <header class="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold">STORY PHOTO</a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars" aria-hidden="true"></i>
</button>
            
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
				<?php
				 (file_exists('index.php'))
					?>
					<li class="nav-item active"><a href="index.php" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
					
					<li class="nav-item"><a href="galery.php" class="nav-link text-uppercase font-weight-bold">Gallery</a>
                    </li>
                    
                    <?php
					(isset ($_SESSION['username']))
    				?>
					<li class="nav-item"><a href="logout.php" class="nav-link text-uppercase font-weight-bold">Logout <?php echo '"' . $_SESSION['username'] . '"'; ?></a></li>
					
					
                </ul>
            </div>
        </div>
    </nav>
</header>

<script>$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    });
});</script>