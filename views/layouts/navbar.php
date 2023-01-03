<nav class="navbar navbar-dark navbar-expand-sm fixed-top">
    <div class="container">

        <!-- If small screen then navbar turns into a button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#Navbar" aria-controls="#Navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Logo and Name -->
        <!-- if login then click on logo will go to dashboard, else go to index -->
        <a class="navbar-brand mr-auto top_nav_left" href=<?php echo isset($_SESSION['login']) ? "index.php?page=dashboard" : "index.php";?>>
            <img src="/lab-7/assets/images/hcmut.jpg" alt="hcmut" height="36">
            Nguyen Phan
        </a>

        <div class="collapse navbar-collapse" id="Navbar">
            <ul class="navbar-nav mr-auto">
                <!-- if login then home button is dashboard, else send get request to index -->
                <?php echo '<li class="nav-item active"><a class="nav-link" href="index.php?page=home">Home</a></li>';?>
                <?php echo (isset($_SESSION['id'])) ? '<li class="nav-item active"><a class="nav-link" href="index.php?page=dashboard">Dashboard</a></li>' : '';?>
                

                <!-- Products drop down -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="index.php?page=products" id="navbarDropdown"\
                    data-bs-toggle="href" aria-expanded="false">
                        Products
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="index.php?page=products&id=4">Dog 1</a></li>
                        <li><a class="dropdown-item" href="index.php?page=products&id=5">Dog 2</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                        <a class="dropdown-item" href="index.php?page=products&id=7"\
                           data-bs-toggle="dropdown" aria-expanded="false">Car&raquo;
                        </a>
                        
                        <!-- FIX LATER!!! Sub dropdown does not work in small screen -->

                        <ul class="dropdown-menu dropdown-submenu">
                            <li><a class="dropdown-item" href="index.php?page=products&id=1">Car 1</a></li>
                            <li><a class="dropdown-item" href="index.php?page=products&id=2">Car 2</a></li>

                            <li>
                                <a class="dropdown-item" href="#" data-bs-toggle="dropdown" aria-expanded="false">Cat &raquo;</a>

                                <ul class="dropdown-menu dropdown-submenu">
                                    <li><a class="dropdown-item" href="index.php?page=products&id=6">Cate 0</a></li>
                                    <li><a class="dropdown-item" href="index.php?page=products&id=6">Cate</a></li>
                                </ul>
                            </li>

                        </ul>
                        </li>
                    </ul>
                </li>
                
                <!-- if login display login and register, else display profile and logout -->
                <?php 
                    echo (isset($_SESSION["id"])) ?
                        '<li class="nav-item"><a class="nav-link" href="index.php?page=profile">Profile</a></li>
                         <li class="nav-item"><a class="nav-link" href="index.php?page=logout">Log out</a></li>'
                    :
                        '<li class="nav-item"><a class="nav-link" href="index.php?page=login">Log in</a></li>
                         <li class="nav-item"><a class="nav-link" href="index.php?page=register">Register</a></li>';
                ?>

            </ul>
        </div>
    </div>
</nav>