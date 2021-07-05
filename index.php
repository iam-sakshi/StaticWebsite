<!-- <!DOCTYPE html> -->
<html lang="en">

<head>
    <title>Static Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="all.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link rel="stylesheet" href="news-list.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Font styles -->
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Rokkitt:wght@500&display=swap');
    </style>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Kadwa&display=swap');
    </style>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
    </style>


    <!-- Font-awesome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php';?>
    <!-- header end -->
    <section class="home">
        <div class="slider">
            <div class="slide active" style="background-image: url('intro-img1.jpg')">
                <div class="container">
                    <div class="caption">
                        <div class="section-heading shm-none">
                            <div class="section-subheading">Multipurpose</div>
                            <h1>Business &amp; Services FastSpeed Template</h1>
                            <p class="section-desc">You can create a website for any business. The template has many
                                different sections and section types from which you can create your own unique website.
                            </p>
                        </div>
                        <a class="btn-posnawr" href="#">About Us<span></span></a>
                        <a class="btn-posnawr" href="#">Contact Us<span></span></a>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image: url('intro-img2.jpg')">
                <div class="container">
                    <div class="caption">
                        <div class="section-heading shm-none">
                            <div class="section-subheading">Multipurpose</div>
                            <h2>IT Solution for Your Business</h2>
                            <p class="section-desc">You can create a website for any business. The template has many
                                different sections and section types from which you can create your own unique website.
                            </p>
                        </div>
                        <a class="btn-posnawr" href="#">About Us<span></span></a>
                        <a class="btn-posnawr" href="#">Contact Us<span></span></a>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image: url('intro-img3.jpg')">
                <div class="container">
                    <div class="caption">
                        <div class="section-heading shm-none">
                            <div class="section-subheading">Multipurpose</div>
                            <h2>Business &amp; Services FastSpeed Template</h2>
                            <p class="section-desc">You can create a website for any business. The template has many
                                different sections and section types from which you can create your own unique website.
                            </p>
                        </div>
                        <a class="btn-posnawr" href="#">About Us<span></span></a>
                        <a class="btn-posnawr" href="#">Contact Us<span></span></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- controls  -->
        <div class="controls">
            <div class="prev"></div>
            <div class="next"></div>
        </div>

        <!-- indicators -->
        <div class="indicator">
        </div>

    </section>

    <script src="Script.js"></script>

    <!-- testimonial starts  -->
    <section class="review">
        <div class="heading">
            <span>REVIEWS FROM OUR CLIENTS</span>
            <h1>What People Say</h1>
        </div>
        <div class="testimonial">
            <div class="card">
                <div class="mybox">
                    <img src="auth-img-1.jpg" class="card-img-top" alt="...">
                    <div class="title">
                        <h5>Catherine Williams</h5>
                        <span>Regular client</span>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">PathSoft offers a high caliber of resources skilled in Microsoft Azure.NET,
                        mobile and Quality Assurance. They became our true business partners over the past three years.
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="mybox">
                    <img src="auth-img-2.jpg" class="card-img-top" alt="...">
                    <div class="title">
                        <h5>Rupert Wood</h5>
                        <span>Regular client</span>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit consequuntur
                        sequi eos beatae deleniti culpa cupiditate rerum. Similique, blanditiis rem perspiciatis fugiat
                        voluptatem quas officiis ducimus reprehenderit.</p>
                </div>
            </div>
            <div class="card">
                <div class="mybox">
                    <img src="auth-img-3.jpg" class="card-img-top" alt="...">
                    <div class="title">
                        <h5>Samantha Brown</h5>
                        <span>Regular client</span>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">We sincerely hope that each and every user entering our website will find
                        exactly. With advanced features of activating account and new login widgets, you will definitely
                        have a great experience of using our web page.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial ends  -->

    <!-- News List Starts -->
    <div class="wrapper style3">
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">

                        <header class="col-12">
                            <div class="section-heading heading-center">
                                <div class="section-subheading">MOST INTERESTING ARTICLES</div>
                                <h1 id="page-title">News</h1>
                            </div>
                        </header>

                        <div class="col-12 item">
                            <div class="blog-list items">

                                <article class="news-wide-item item">
                                    <a href="https://pathsoft.kovalweb.com/key-considerations-of-ipaas-3/"
                                        class="news-wide-item-img img-style" title="Key Considerations Of IPaaS">
                                        <img data-src="https://pathsoft.kovalweb.com/wp-content/uploads/2021/05/gallery-img-2-1024x683.jpg"
                                            class="img-cover lazy"
                                            src="https://pathsoft.kovalweb.com/wp-content/uploads/2021/05/gallery-img-2-1024x683.jpg"
                                            alt="" data-loaded="true">
                                    </a>
                                    <div class="news-wide-item-info">
                                        <h2 class="news-wide-item-heading item-heading"><a
                                                href="https://pathsoft.kovalweb.com/key-considerations-of-ipaas-3/"
                                                rel="bookmark" title="Key Considerations Of IPaaS">Key Considerations Of
                                                IPaaS</a></h2>
                                        <div class="news-wide-item-row">
                                            <div class="news-post-meta">
                                                <div class="news-post-meta-item"><i class="fa fa-clock-o"></i>May 24,
                                                    2021
                                                    <span class="news-post-meta-item"> by &nbsp;</span><a
                                                        href="https://pathsoft.kovalweb.com/author/admin/">Ryan
                                                        Wilson</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="news-wide-item-desc">
                                            <p>Whenever I’m TA for a introductory CSS class where students learn some
                                                programming language, I have trouble coming up with good exercises.
                                                Problems from Project Euler and the like are usually [...]</p>
                                        </div>
                                        <div class="wrapp-btn-link">
                                            <a href="https://pathsoft.kovalweb.com/key-considerations-of-ipaas-3/"
                                                class="btn-link">
                                                <span>Read more</span>
                                                <svg class="btn-link-ico btn-link-ico-right" viewBox="0 0 13 9"
                                                    width="13px" height="9px">
                                                    <use
                                                        xlink:href="https://pathsoft.kovalweb.com/wp-content/themes/pathsoft/assets/img/sprite.svg#arrow-right">
                                                    </use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>



                        <div class="col-12 item">
                            <div class="blog-list items">

                                <article class="news-wide-item item">
                                    <a href="https://pathsoft.kovalweb.com/benefits-of-async-await-3/"
                                        class="news-wide-item-img img-style" title="Benefits Of Async/Await">
                                        <img data-src="https://pathsoft.kovalweb.com/wp-content/uploads/2021/05/services-img-6-1024x528.jpg"
                                            class="img-cover lazy"
                                            src="https://pathsoft.kovalweb.com/wp-content/uploads/2021/05/services-img-6-1024x528.jpg"
                                            alt="" data-loaded="true">
                                    </a>
                                    <div class="news-wide-item-info">
                                        <h2 class="news-wide-item-heading item-heading"><a
                                                href="https://pathsoft.kovalweb.com/key-considerations-of-ipaas-3/"
                                                rel="bookmark" title="Key Considerations Of IPaaS">Benefits of
                                                Async/Await</a></h2>
                                        <div class="news-wide-item-row">
                                            <div class="news-post-meta">
                                                <div class="news-post-meta-item"><i class="fa fa-clock-o"></i>May 24,
                                                    2021
                                                    <span class="news-post-meta-item"> by &nbsp;</span><a
                                                        href="https://pathsoft.kovalweb.com/author/admin/">Ryan
                                                        Wilson</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="news-wide-item-desc">
                                            <p>Whenever I’m TA for a introductory CSS class where students learn some
                                                programming language, I have trouble coming up with good exercises.
                                                Problems from Project Euler and the like are usually [...]</p>
                                        </div>
                                        <div class="wrapp-btn-link">
                                            <a href="https://pathsoft.kovalweb.com/key-considerations-of-ipaas-3/"
                                                class="btn-link">
                                                <span>Read more</span>
                                                <svg class="btn-link-ico btn-link-ico-right" viewBox="0 0 13 9"
                                                    width="13px" height="9px">
                                                    <use
                                                        xlink:href="https://pathsoft.kovalweb.com/wp-content/themes/pathsoft/assets/img/sprite.svg#arrow-right">
                                                    </use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>


                        <div class="col-12 item">
                            <div class="blog-list items">

                                <article class="news-wide-item item">
                                    <a href="https://pathsoft.kovalweb.com/hibernate-query-language-3/"
                                        class="news-wide-item-img img-style" title="Hibernate Query Language">
                                        <img data-src="https://pathsoft.kovalweb.com/wp-content/uploads/2021/05/gallery-img-5-1024x524.jpg"
                                            class="img-cover lazy"
                                            src="https://pathsoft.kovalweb.com/wp-content/uploads/2021/05/gallery-img-5-1024x524.jpg"
                                            alt="" data-loaded="true">
                                    </a>
                                    <div class="news-wide-item-info">
                                        <h2 class="news-wide-item-heading item-heading"><a
                                                href="https://pathsoft.kovalweb.com/hibernate-query-language-3/"
                                                rel="bookmark" title="Hibernate Query Language">Hibernate
                                                Query Language</a></h2>
                                        <div class="news-wide-item-row">
                                            <div class="news-post-meta">
                                                <div class="news-post-meta-item"><i class="fa fa-clock-o"></i>May 24,
                                                    2021
                                                    <span class="news-post-meta-item "> by &nbsp;</span><a
                                                        href="https://pathsoft.kovalweb.com/author/admin/">Ryan
                                                        Wilson</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="news-wide-item-desc">
                                            <p>Whenever I’m TA for a introductory CSS class where students learn some
                                                programming language, I have trouble coming up with good exercises.
                                                Problems from Project Euler and the like are usually [...]</p>
                                        </div>
                                        <div class="wrapp-btn-link">
                                            <a href="https://pathsoft.kovalweb.com/key-considerations-of-ipaas-3/"
                                                class="btn-link">
                                                <span>Read more</span>
                                                <svg class="btn-link-ico btn-link-ico-right" viewBox="0 0 13 9"
                                                    width="13px" height="9px">
                                                    <use
                                                        xlink:href="https://pathsoft.kovalweb.com/wp-content/themes/pathsoft/assets/img/sprite.svg#arrow-right">
                                                    </use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>




                        <div class="col-12 item">
                            <div class="blog-list items">

                                <article class="news-wide-item item">
                                    <a href="https://pathsoft.kovalweb.com/key-considerations-of-ipaas-3/"
                                        class="news-wide-item-img img-style" title="Key Considerations Of IPaaS">
                                        <img data-src="https://pathsoft.kovalweb.com/wp-content/uploads/2021/05/gallery-img-2-1024x683.jpg"
                                            class="img-cover lazy"
                                            src="https://pathsoft.kovalweb.com/wp-content/uploads/2021/05/gallery-img-2-1024x683.jpg"
                                            alt="" data-loaded="true">
                                    </a>
                                    <div class="news-wide-item-info">
                                        <h2 class="news-wide-item-heading item-heading"><a
                                                href="https://pathsoft.kovalweb.com/key-considerations-of-ipaas-3/"
                                                rel="bookmark" title="Key Considerations Of IPaaS">Key Considerations Of
                                                IPaaS</a></h2>
                                        <div class="news-wide-item-row">
                                            <div class="news-post-meta">
                                                <div class="news-post-meta-item"><i class="fa fa-clock-o"></i>May 24,
                                                    2021
                                                    <span class="news-post-meta-item"> by &nbsp;</span><a
                                                        href="https://pathsoft.kovalweb.com/author/admin/">Ryan
                                                        Wilson</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="news-wide-item-desc">
                                            <p>Whenever I’m TA for a introductory CSS class where students learn some
                                                programming language, I have trouble coming up with good exercises.
                                                Problems from Project Euler and the like are usually [...]</p>
                                        </div>
                                        <div class="wrapp-btn-link">
                                            <a href="https://pathsoft.kovalweb.com/key-considerations-of-ipaas-3/"
                                                class="btn-link">
                                                <span>Read more</span>
                                                <svg class="btn-link-ico btn-link-ico-right" viewBox="0 0 13 9"
                                                    width="13px" height="9px">
                                                    <use
                                                        xlink:href="https://pathsoft.kovalweb.com/wp-content/themes/pathsoft/assets/img/sprite.svg#arrow-right">
                                                    </use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>



                        <div class="col-12 item">
                            <div class="blog-list items">

                                <article class="news-wide-item item">
                                    <a href="https://pathsoft.kovalweb.com/key-considerations-of-ipaas-3/"
                                        class="news-wide-item-img img-style" title="Key Considerations Of IPaaS">
                                        <img data-src="https://pathsoft.kovalweb.com/wp-content/uploads/2021/05/gallery-img-2-1024x683.jpg"
                                            class="img-cover lazy"
                                            src="https://pathsoft.kovalweb.com/wp-content/uploads/2021/05/gallery-img-2-1024x683.jpg"
                                            alt="" data-loaded="true">
                                    </a>
                                    <div class="news-wide-item-info">
                                        <h2 class="news-wide-item-heading item-heading"><a
                                                href="https://pathsoft.kovalweb.com/key-considerations-of-ipaas-3/"
                                                rel="bookmark" title="Key Considerations Of IPaaS">Key Considerations Of
                                                IPaaS</a></h2>
                                        <div class="news-wide-item-row">
                                            <div class="news-post-meta">
                                                <div class="news-post-meta-item"><i class="fa fa-clock-o"></i>May 24,
                                                    2021
                                                    <span class="news-post-meta-item"> by &nbsp;</span><a
                                                        href="https://pathsoft.kovalweb.com/author/admin/">Ryan
                                                        Wilson</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="news-wide-item-desc">
                                            <p>Whenever I’m TA for a introductory CSS class where students learn some
                                                programming language, I have trouble coming up with good exercises.
                                                Problems from Project Euler and the like are usually [...]</p>
                                        </div>
                                        <div class="wrapp-btn-link">
                                            <a href="https://pathsoft.kovalweb.com/key-considerations-of-ipaas-3/"
                                                class="btn-link">
                                                <span>Read more</span>
                                                <svg class="btn-link-ico btn-link-ico-right" viewBox="0 0 13 9"
                                                    width="13px" height="9px">
                                                    <use
                                                        xlink:href="https://pathsoft.kovalweb.com/wp-content/themes/pathsoft/assets/img/sprite.svg#arrow-right">
                                                    </use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>




                        <div class="col-12 my-4 item">
                            <nav class="Page pagination" aria-labelledby="posts-nav-label">

                                <ul class="pagination">


                                    <li class="page-item active " aria-current="page">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="col-md-3 my-5 mx-4 content-item" role="complementary">
                        <div class="sidebar items">
                            <aside id="search-2" class="sidebar-item item widget_search">
                                <form class="d-flex" method="get" id="searchform"
                                    action="https://pathsoft.kovalweb.com/" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Search"
                                        aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>

                            </aside>
                            <aside id="recent-posts-2" class="sidebar-item item widget_recent_entries">
                                <p class="sidebar-item-heading item-heading">Recent Posts</p>
                                <ul>
                                    <li>
                                        <a href="https://pathsoft.kovalweb.com/key-considerations-of-ipaas-3/">Key
                                            Considerations Of IPaaS</a>
                                    </li>
                                    <li>
                                        <a href="https://pathsoft.kovalweb.com/benefits-of-async-await-3/">Benefits
                                            Of Async/Await</a>
                                    </li>
                                    <li>
                                        <a href="https://pathsoft.kovalweb.com/hibernate-query-language-3/">Hibernate
                                            Query Language</a>
                                    </li>
                                    <li>
                                        <a href="https://pathsoft.kovalweb.com/key-considerations-of-ipaas-2/">Key
                                            Considerations Of IPaaS</a>
                                    </li>
                                    <li>
                                        <a href="https://pathsoft.kovalweb.com/benefits-of-async-await-2/">Benefits
                                            Of Async/Await</a>
                                    </li>
                                </ul>

                            </aside>
                            <aside id="tag_cloud-2" class="sidebar-item item widget_recent_entries">
                                <p class="sidebar-item-heading item-heading">Tags</p>
                                <div class="tagcloud"><a href="https://pathsoft.kovalweb.com/tag/it/"
                                        class="tag-cloud-link tag-link-16 tag-link-position-1" style="font-size: 8pt;"
                                        aria-label="It (1 item)">It</a>
                                    <a href="https://pathsoft.kovalweb.com/tag/programming/"
                                        class="tag-cloud-link tag-link-17 tag-link-position-2" style="font-size: 8pt;"
                                        aria-label="Programming (1 item)">Programming</a>
                                    <a href="https://pathsoft.kovalweb.com/tag/projects/"
                                        class="tag-cloud-link tag-link-14 tag-link-position-3" style="font-size: 8pt;"
                                        aria-label="Projects (1 item)">Projects</a>
                                    <a href="https://pathsoft.kovalweb.com/tag/software-development/"
                                        class="tag-cloud-link tag-link-13 tag-link-position-4" style="font-size: 22pt;"
                                        aria-label="Software Development (3 items)">Software Development</a>
                                    <a href="https://pathsoft.kovalweb.com/tag/startup/"
                                        class="tag-cloud-link tag-link-15 tag-link-position-5" style="font-size: 8pt;"
                                        aria-label="Startup (1 item)">Startup</a>
                                </div>
                            </aside>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- News List end -->

    <!-- contact section starts -->
    <section class="contact">
        <div class="heading">
            <span>WE ARE ALWAYS IN TOUCH</span>
            <h1>Contact Us</h1>
        </div>
        <div class="contactform">
            <div class="address">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Get in Touch</h5><br>
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="card-text">332,Second Floor,</span>
                        <span class="card-text">Iscon Mall,</span>
                        <span class="card-text">150,Ring Road,</span>
                        <span class="card-text">Rajkot , Gujarat - 360005 </span><br>
                        <i class="fas fa-mobile-alt"></i>
                        <span class="card-text">+ 000 000 000</span><br>
                        <i class="far fa-envelope"></i>
                        <span class="card-text">theyouthmonk@gmail.com</span>
                    </div>
                </div>
            </div><br>
            <div class="form">
                <h2>Contact Form</h2>
                <?php
                if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
               echo'
                <form class="contact" method="post" action="insertcontact.php">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" id="inputEmail3" placeholder="Your Name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="phone" id="inputEmail3" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Your Email">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Message</label>
                        <div class="col-sm-10">
                            <textarea  class="form-control" name="mes2" id="message" cols="30" rows="4"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
                </form>';
            }
            else{
                echo '<div class="container">
                <p>Please login to write us More</p>
            </div>';
            }
            ?>

            </div>
        </div>
    </section>
    <!-- contact section end  -->


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>online shop</h4>
                    <ul>
                        <li><a href="#">watch</a></li>
                        <li><a href="#">bag</a></li>
                        <li><a href="#">shoes</a></li>
                        <li><a href="#">dress</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

</html>