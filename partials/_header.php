<?php
session_start();
echo '
<header class="header">
    <div class="cont">
        <div class="header-main">
            <div class="logo">
                <img src="cropped-pathsoft.png">
            </div>
            <div class="open-nav-menu">
                <span></span>
            </div>
            <div class="menu-overlay">
            </div>
            <!-- navigation menu start -->
            <nav class="nav-menu">
                <div class="close-nav-menu">
                    X </div>
                <ul class="menu">
                    <li class="menu-item menu-item-has-children">
                        <a href="#" data-toggle="sub-menu" class="btn-flip" data-back="Home -"
                            data-front="Home +"><i></i></a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="#">Home 1</a></li>
                            <li class="menu-item"><a href="#">Home 2</a></li>
                            <li class="menu-item"><a href="#">Home 3</a></li>
                            <li class="menu-item"><a href="#">Home 4</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="btn-flip" data-back="About" data-front="About"></a>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="#" data-toggle="sub-menu" class="btn-flip" data-back="Services -"
                            data-front="Services +"></a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="#">Service 1</a></li>
                            <li class="menu-item"><a href="#">Service 2</a></li>
                            <li class="menu-item"><a href="#">Service 3</a></li>
                            <li class="menu-item"><a href="#">Service 4</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="#" data-toggle="sub-menu" class="btn-flip" data-back="Pages -"
                            data-front="Pages +"></a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="#">page 1</a></li>
                            <li class="menu-item"><a href="#">page 2</a></li>
                            <li class="menu-item"><a href="#">page 3</a></li>
                            <li class="menu-item"><a href="#">page 4</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="#" data-toggle="sub-menu" class="btn-flip" data-back="News -" data-front="News +"></a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="#">page 1</a></li>
                            <li class="menu-item"><a href="#">page 2</a></li>
                            <li class="menu-item"><a href="#">page 3</a></li>
                            <li class="menu-item"><a href="#">page 4</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="#" data-toggle="sub-menu" class="btn-flip" data-back="Gallery-"
                            data-front="Gallery +"></a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="#">page 1</a></li>
                            <li class="menu-item"><a href="#">page 2</a></li>
                            <li class="menu-item"><a href="#">page 3</a></li>
                            <li class="menu-item"><a href="#">page 4</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="#" data-toggle="sub-menu" class="btn-flip" data-back="Contacts -"
                            data-front="Contacts +"></a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="#">page 1</a></li>
                            <li class="menu-item"><a href="#">page 2</a></li>
                            <li class="menu-item"><a href="#">page 3</a></li>
                            <li class="menu-item"><a href="#">page 4</a></li>
                        </ul>
                    </li>';
                    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
                        echo '
                        <li class="menu-item menu-item-has-children">
                            <span>
                                <p class="btn btn-outline-success my-0 mx-2 ">Welcome '. $_SESSION['useremail']. ' </p>
                                <a href="partials/_logout.php" class="btn btn-outline-success ml-2">Logout</a>
                            </span>
                        </li>';
                      } else{ 
                    echo '
                    <li class="menu-item menu-item-has-children">
                      <button class="btn btn-outline-success ml-2" data-toggle="modal" data-target="#loginModal">Login</button>
                      <button class="btn btn-outline-success mx-2" data-toggle="modal" data-target="#signupModal">Signup</button>
                      </li>';
                    }
                    echo'
            </nav>
            <!-- navigation menu end -->
        </div>
    </div>
</header>';
include 'partials/_loginModal.php';
include 'partials/_signupModal.php';
if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
            <strong>Success!</strong> You can now login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>';
    }
?>
