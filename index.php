<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from demo.martanian.com/html/loriette/florists/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Oct 2015 10:52:17 GMT -->
<head>
    
    <title>The Florist from Eden</title>
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Signika:300,400,600,700" />
    <link rel="stylesheet" type="text/css" href="_assets/_libs/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="_assets/_libs/animate.css" />
    <link rel="stylesheet" type="text/css" href="_assets/_css/style.css" />
    <link rel="stylesheet" type="text/css" href="_assets/_css/colors/green.css" />

</head>
<body>

    <!--
    loader
    -->
    <div id="loader">
    
        <div id="circleG">

            <div id="circleG_1" class="circleG"></div>
            <div id="circleG_2" class="circleG"></div>
            <div id="circleG_3" class="circleG"></div>
        
        </div>

    </div>

    <!--
    gallery popup
    -->
    <div id="gallery-popup">

        <div class="gallery-popup-background">
        </div>

        <div class="gallery-popup-content animated speed bounceInDown">

            <!--
            close button
            -->
            <button id="close-gallery-popup" class="button button-gray button-right-arrow"><i class="fa fa-times"></i></button>

            <!--
            left gallery side
            -->
            <div class="left">

                <div class="padding">

                    <div class="left-up">

                        <div class="h3-line">

                            <h3>Our <span>bouquets</span></h3>

                        </div>

                        <p>Select our bouquets category from the list below.</p>

                        <!--
                        select: patients
                        -->
                        <span class="custom-dropdown">

                            <select class="custom-dropdown-select" name="gallery-thumbnails-category">

                                <option value="*">All bouquets</option>
                                <option value="wedding-bouquets">Wedding bouquets</option>
                                <option value="single-flowers">Single flowers</option>
                                <option value="home-decorations">Home decorations</option>

                            </select>

                        </span>

                        <!--
                        divider
                        -->
                        <hr />

                    </div>

                    <!--
                    thumbnails
                    -->
                    <div class="gallery-thumbnails">

                        <!--
                        single gallery thumbnail
                        -->
                        <div class="gallery-thumbnail" data-thumbnail-category="single-flowers">

                            <div class="gallery-thumbnail-image" style="background-image: url( '_assets/_img/beautiful-orange-red-tulips-on-grey-background.jpg' );">
                            </div>

                            <div class="gallery-thumbnail-title">Red tulips, <span>perfect gift for your wife!</span></div>

                        </div>

                        <!--
                        single gallery thumbnail
                        -->
                        <div class="gallery-thumbnail" data-thumbnail-category="wedding-bouquets">

                            <div class="gallery-thumbnail-image" style="background-image: url( '_assets/_img/background-of-the-wedding-bouquet.jpg' );">
                            </div>

                            <div class="gallery-thumbnail-title">Wedding bouquet, <span>for individual orders</span></div>

                        </div>

                        <!--
                        single gallery thumbnail
                        -->
                        <div class="gallery-thumbnail" data-thumbnail-category="wedding-bouquets">

                            <div class="gallery-thumbnail-image" style="background-image: url( '_assets/_img/roses.jpg' );">
                            </div>

                            <div class="gallery-thumbnail-title">Beautiful roses, <span>the perfect gift</span></div>

                        </div>

                        <!--
                        single gallery thumbnail
                        -->
                        <div class="gallery-thumbnail" data-thumbnail-category="home-decorations">

                            <div class="gallery-thumbnail-image" style="background-image: url( '_assets/_img/old-bicycle.jpg' );">
                            </div>

                            <div class="gallery-thumbnail-title">Old bicycle with flowers, <span>great for spring rides</span></div>

                        </div>

                        <!--
                        single gallery thumbnail
                        -->
                        <div class="gallery-thumbnail" data-thumbnail-category="single-flowers">

                            <div class="gallery-thumbnail-image" style="background-image: url( '_assets/_img/florist-hands-showing-red-roses-bouquet-flowers.jpg' );">
                            </div>

                            <div class="gallery-thumbnail-title">Roses bouquet, <span>the special gift</span></div>

                        </div>

                        <!--
                        single gallery thumbnail
                        -->
                        <div class="gallery-thumbnail" data-thumbnail-category="home-decorations">

                            <div class="gallery-thumbnail-image" style="background-image: url( '_assets/_img/flower.jpg' );">
                            </div>

                            <div class="gallery-thumbnail-title">Flowers pack, <span>great home decoration</span></div>

                        </div>

                    </div>

                </div>

            </div>

            <!--
            right gallery side: current image
            -->
            <div class="gallery-current-image">

                <div class="gallery-prev-image"><i class="fa fa-angle-left"></i></div>
                <div class="gallery-next-image"><i class="fa fa-angle-right"></i></div>

                <div class="gallery-current-image-title">

                    <h3>Image title</h3>

                </div>

            </div>

        </div>

    </div>

    <!--
    header
    -->
    <header data-menu-autostart="true">
    
        <!--
        header content
        -->
        <div class="header-content">
        
            <div class="center">
            
                <!--
                logo
                -->
                <div class="left">

                    <a style="top:1%;" href="index.php"><img src="_assets/_img/logo eden.png" alt="" /></a>
                    <div class="header-slogan">The Florist <span>from</span></div>
                                 
                </div>
                
                <!--
                contact informations
                -->
                <div class="right">
                
                    <div class="padding">
                        <h3>Questions?</span></h3>
                        <p class="action"><a href="index.php#contact" class="button button-green">Feel free to contact us!</a></p>

                    </div>
                
                </div>
                
                <div class="clear">
                </div>
            
            </div>
        
        </div>
        
        <!--
        header menu
        -->
        <nav class="header-menu">

            <!--
            header menu for standard screens
            -->
            <ul class="menu menu-standard">
            
                <li class="active"><a href="index.php#home">Home</a></li>
                <li><a href="index.php#about-us">About us</a></li>
                <li><a href="index.php#references">References</a></li>
                <li>
                    <a href="shop.php">Shop <i class="fa fa-caret-down"></i></a>
                
                    <!--
                    dropdown menu
                    -->
                    <ul class="sub-menu animated speed fadeInUp">
                    
                        <li><a href="shop-product.php">Single product</a></li>
                        <li><a href="shop-cart.php">Cart</a></li>
                        <li><a href="shop-checkout.php">Checkout</a></li>
                    
                    </ul>
                
                </li>
                <li><a href="index.php#contact">Contact</a></li>
                <li>
                
                    <i class="fa fa-search"></i>
                    
                    <!--
                    search form
                    -->
                    <form class="search-form animated speed fadeInLeft">
                    
                        <input type="text" name="search" placeholder="Type and hit enter..." />
                    
                    </form>
                
                </li>
            
            </ul>
            
            <!--
            header menu for smaller screens (eg. mobile)
            -->
            <ul class="menu menu-responsive">
            
                <li>
                
                    <a>Show menu <i class="fa fa-caret-down"></i> <i class="fa fa-caret-up"></i></a>
                    
                    <!--
                    dropdown menu
                    -->
                    <ul class="sub-menu animated speed fadeInUp">

                        <li class="active"><a href="index.php#home">Home</a></li>
                        <li><a href="index.php#about-us">About us</a></li>
                        <li><a href="index.php#references">References</a></li>
                        <li>

                            <a href="shop.php"><i class="fa fa-caret-left"></i> Shop</a>

                            <!--
                            dropdown menu
                            -->
                            <ul class="sub-menu animated speed fadeInUp">

                                <li><a href="shop-product.php">Single product</a></li>
                                <li><a href="shop-cart.php">Cart</a></li>
                                <li><a href="shop-checkout.php">Checkout</a></li>
                            </ul>
                        </li>
                        <li><a href="index.php#contact">Contact</a></li>

                    </ul>

                </li>

                <li>

                    <i class="fa fa-search"></i>

                    <!--
                    search form
                    -->
                    <form class="search-form animated speed fadeInLeft">

                        <input type="text" name="search" placeholder="Type and hit enter..." />

                    </form>

                </li>

            </ul>

        </nav>

        <!--
        header show / hide button
        -->
        <div id="menu-button">

            <i class="fa fa-reorder"></i>

        </div>

    </header>  
    
    <!--
    content
    -->
    <div id="content">  

        <!--
        full image header
        -->
        <div class="big-image-header" data-section-name="home">
        
            <div class="big-image-single" style="background-image: url( '_assets/_img/happy-florist.jpg' ); background-position: 50% 55%;">
            
                <div class="big-image-single-content">
                
                    <h4>Always fresh</h4>
                    <h1>Beautiful flowers!</h1>
                    
                    <hr />

                </div>
            
            </div>
        
        </div>
        
        <!--
        main content box (container)
        -->
        <div class="center">
        
            <!--
            four boxes
            -->
            <section class="four-boxes">
            
                <!--
                single box
                -->
                <div class="four-boxes-element" data-go-to="about-us">
                
                    <div class="padding">
                    
                        <div class="h3-line">
                        
                            <h3>Who  <span>we are</span></h3>
                            
                        </div>
                        
                        <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Aenean dapibus sollicitudin eros.</p>
                        
                        <!--
                        single box image
                        -->
                        <div class="four-boxes-element-image" style="background-image: url( '_assets/_img/florist-at-garden-centre-retail-inventory.jpg' );">
                        </div>

                    </div>
                
                </div>
                
                <!--
                single box
                -->
                <div class="four-boxes-element four-boxes-element-last-when-responsive" data-go-to="our-bouquets">
                
                    <div class="padding">
                    
                        <div class="h3-line">
                        
                            <h3>Our <span>bouquets</span></h3>
                        
                        </div>
                        
                        <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Aenean dapibus sollicitudin eros.</p>
                        
                        <!--
                        single box image
                        -->
                        <div class="four-boxes-element-image" style="background-image: url( '_assets/_img/florist-hands-showing-red-roses-bouquet-flowers.jpg' );">
                        </div>

                    </div>
                
                </div>
                
                <!--
                last two boxes will go bottom in responsive mode
                -->
                <div class="four-boxes-bottom">
                
                    <!--
                    single box
                    -->
                    <div class="four-boxes-element" data-go-to="references">
                    
                        <div class="padding">
                        
                            <div class="h3-line">
                            
                                <h3>Read our <span>references</span></h3>
                            
                            </div>
                        
                            <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Aenean dapibus sollicitudin eros.</p>
    
                            <!--
                            single box image
                            -->
                            <div class="four-boxes-element-image" style="background-image: url( '_assets/_img/person-1.jpg' );">
                            </div>
    
                        </div>
                    
                    </div>
                
                    <!--
                    single box
                    -->
                    <div class="four-boxes-element four-boxes-element-last" data-go-to="contact">
                    
                        <div class="padding">
                        
                            <div class="h3-line">
                            
                                <h3>Where to <span>find us</span></h3>
                            
                            </div>
                        
                            <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Aenean dapibus sollicitudin eros.</p>
    
                            <!--
                            single box image
                            -->
                            <div class="four-boxes-element-image" style="background-image: url( '_assets/_img/florist-is-phoning.jpg' );">
                            </div>
    
                        </div>
                    
                    </div>
                
                </div>
            
            </section>
            
            <!--
            slogan
            -->
            <section class="slogan">
            
                <h2>Always <span>fresh</span> flowers</h2>
                <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Aenean dapibus sollicitudin eros. In at fermentum risus. Curabitur nec augue a felis.</p>
            
            </section>

            <!--
            box-text-with-image-left
            -->
            <section class="box-text-with-image-left" data-section-name="about-us">

                <div class="contents">
                
                    <!--
                    single content
                    -->
                    <div class="single-content">
                
                        <div class="left">
                        
                            <div class="padding">
                            
                                <div class="h3-line">
                                    
                                    <h3>Few words <span>about us</span></h3>
                                
                                </div>
            
                                <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Aenean dapibus sollicitudin eros. Donec pulvinar lacus sed lacus congue tincidunt. In at fermentum risus. Curabitur nec augue a felis malesuada adipiscing in in turpis.</p>
                                <p>Maecenas ut ornare eros. Cras vitae nibh eget mauris placerat pellentesque a quis velit. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                
                                <h4>Why is it worth it?</h4>
                                <ul>
                                
                                    <li><i class="fa fa-check"></i> Odio nulla tempus elit. Consec tetur adipiscing elit aenean.</li>
                                    <li><i class="fa fa-check"></i> Aenean dapibus sollicitudin eros, donec pulvinar.</li>
                                    <li><i class="fa fa-check"></i> In tincidunt auctor urna, rutrum auctor lorem fringilla vitae.</li>
                                    <li><i class="fa fa-check"></i> Vivamus ac porta ligula. Sed non facilisis, lorem ipsum dolor sit elit.</li>
                                
                                </ul>
                                
                                <p class="action"><a href="index.php#references">Read our clients references</a></p>
                                
                            </div>
                        
                        </div>
        
                        <!--
                        background image
                        -->
                        <div class="right">
                                                  
                            <div class="padding">
                            
                                <div class="image" style="background-image: url( '_assets/_img/colorful-bouquet-florist-woman-selling-customer-flower.jpg' );">
                                </div>
                            
                            </div>                      
                                                  
                        </div>
                        
                        <div class="clear">
                        </div>
                    
                    </div>

                </div>

            </section>

            <!--
            facebook
            -->
            <section class="facebook">
            
                <i class="fa fa-thumbs-o-up"></i>
                
                <h3>Like us on <a href="http://www.facebook.com">Facebook!</a></h3>
            </section>

        <!--
        image section
        -->
        <div class="image-header image-header-between-sections" style="background-image: url( '_assets/_img/flower.jpg' );">
            
            <div class="image-header-content-center">
            
                <h2>Best <span>florist</span> in the city!</h2>
            
            </div>
        
        </div>
        
        <div class="center">    

                    <!--
            gallery
            -->
            <section class="gallery" data-section-name="our-bouquets">

                <!--
                more gallery elements button
                -->
                <button class="gallery-all-elements button button-green">See more of our bouquets</button>
                
                <!--
                gallery elements
                -->
                <div class="gallery-elements">
                
                    <!--
                    single gallery element
                    -->
                    <div class="gallery-element gallery-element-first">
    
                        <div class="padding">
                        
                            <div class="gallery-element-image" style="background-image: url( '_assets/_img/beautiful-orange-red-tulips-on-grey-background.jpg' );">
                            </div>
                        
                            <h3>Red tulips</h3>
                            <p>Perfect gift for your wife!</p>
                  
                        </div>
                    
                    </div>
                    
                    <!--
                    single gallery element
                    -->
                    <div class="gallery-element gallery-element-last-when-responsive">
    
                        <div class="padding">
                        
                            <div class="gallery-element-image" style="background-image: url( '_assets/_img/background-of-the-wedding-bouquet.jpg' );">
                            </div>
                            
                            <h3>Wedding bouquet</h3>
                            <p>For individual orders</p>
                  
                        </div>
                    
                    </div>
                    
                    <!--
                    gallery bottom elements (for responsive)
                    -->
                    <div class="gallery-bottom">
                    
                        <!--
                        single gallery element
                        -->
                        <div class="gallery-element">
         
                            <div class="padding">
                            
                                <div class="gallery-element-image" style="background-image: url( '_assets/_img/florist-hands-showing-red-roses-bouquet-flowers.jpg' );">
                                </div>
                                
                                <h3>Beautiful roses</h3>
                                <p>The perfect gift</p>
             
                            </div>
                        
                        </div>
                        
                        <!--
                        single gallery element
                        -->
                        <div class="gallery-element gallery-element-last">
        
                            <div class="padding">
        
                                <div class="gallery-element-image" style="background-image: url( '_assets/_img/old-bicycle.jpg' );">
                                </div>
                                
                                <h3>Old bicycle with flowers</h3>
                                <p>Great for spring rides</p>
        
                            </div>
                        
                        </div>
                    
                    </div>
                
                </div>

            </section> 
            
            <!--
            references
            -->
            <section class="references" data-section-name="references">
            
                <i class="fa fa-comments-o"></i>
                
                <!--
                references contents
                -->
                <div class="reference-content">
                
                    <!--
                    single reference
                    -->
                    <div class="single-reference">
                    
                        <h2>Perfect flowers for my girlfriend!</h2>
                        <p>Donec pulvinar lacus sed lacus congue tincidunt. In at fermentum risus. Donec pulvinar lacus sed lacus congue tincidunt, consec tetur adipiscing elit.</p>
                        <p class="author">Tom Latch</p>
                    
                    </div>
                    
                    <!--
                    single reference
                    -->
                    <div class="single-reference">
                    
                        <h2>The best florist - my recommendation</h2>
                        <p>In at fermentum risus. Curabitur nec augue a felis malesuada adipiscing in in turpis. Lorem ipsum dolor sit amet, consec tetur adipiscing elit.</p>
                        <p class="author">John Doe</p>
                    
                    </div>
                
                </div>

            </section>

            <!--
            opening hours
            -->
            <section class="opening-hours" data-section-name="opening-hours" style="background-image: url( '_assets/_img/clock.jpg' );">
            
                <div class="left">
                
                    <div class="padding">
                    
                        <div class="h3-line">
                                
                            <h3>See our <span>opening hours</span></h3>
                        
                        </div>
                        
                        <!--
                        opening hours for single day
                        -->
                        <div class="day-info">
                                              
                            <div class="day-info-single" data-day-name="mon">
                            
                                <h2>Monday</h2>
                                <h4>We're open from <span>8:15pm</span> to <span>2:15am</span></h4>
                            
                            </div>
                            
                            <div class="day-info-single" data-day-name="tue">
                            
                                <h2>Tuesday</h2>
                                <h4>We're open from <span>8:00pm</span> to <span>3:00am</span></h4>
                            
                            </div>
                            
                            <div class="day-info-single" data-day-name="wed">
                            
                                <h2>Wednesday</h2>
                                <h4>We're open from <span>8:45pm</span> to <span>3:15am</span></h4>
                            
                            </div>
                            
                            <div class="day-info-single" data-day-name="thu">
                            
                                <h2>Thursday</h2>
                                <h4>We're open from <span>8:05pm</span> to <span>1:05am</span></h4>
                            
                            </div>
                            
                            <div class="day-info-single" data-day-name="fri">
                            
                                <h2>Friday</h2>
                                <h4>We're open from <span>9:00pm</span> to <span>4:00am</span></h4>
                            
                            </div>
                            
                            <div class="day-info-single" data-day-name="sat">
                            
                                <h2>Saturday</h2>
                                <h4>We're open from <span>9:15pm</span> to <span>1:25am</span></h4>
                            
                            </div>
                            
                            <div class="day-info-single" data-day-name="sun">
                            
                                <h2>Sunday</h2>
                                <h4 class="closed">We're closed</h4>
                            
                            </div>
                        
                        </div>
                        
                        <!--
                        days switcher
                        -->
                        <ul class="other-days">
                        
                            <li data-day-name="mon">Mon</li>
                            <li data-day-name="tue" class="active">Tue</li>
                            <li data-day-name="wed">Wed</li>
                            <li data-day-name="thu">Thu</li>
                            <li data-day-name="fri">Fri</li>
                            <li data-day-name="sat">Sat</li>
                            <li data-day-name="sun">Sun</li>
                        
                        </ul>
                    
                    </div>
                
                </div>
                
                <!--
                additional content on right side
                -->
                <div class="right">
                
                    <div class="padding">
                    
                        <div class="h3-line">
                                
                            <h3>Feel free to <span>contact us!</span></h3>
                        
                        </div>
                            
                        <div class="description">
                        
                            <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Aenean dapibus sollicitudin eros. Donec pulvinar lacus sed lacus congue.</p>
                            <p>Odio nulla tempus elit. Consec tetur adipiscing elit aenean dapibus sollicitudin eros.</p>
                        
                        </div>
                        
                        <!--
                        phone data
                        -->
                        <div class="phone-data">
                        
                            <p class="phone">+156 98 541 565</p>
                            <p class="phone-details">Available in <span>opening hours.</span></p>
                        
                        </div>
                        
                        <div class="clear">
                        </div>

                    </div>
                
                </div>
                
                <div class="clear">
                </div>

            </section>

            <!--
            contact
            -->
            <section class="contact" data-section-name="contact">
            
                <div class="left">
                
                    <div class="padding">
                    
                        <!--
                        google map
                        -->
                        <div id="google-map">
                        </div>
                    
                    </div>
                
                </div>
                
                <div class="right">
                
                    <div class="padding">
                    
                        <div class="h3-line">
                                
                            <h3>Feel free to <span>contact us!</span></h3>
                        
                        </div>
                        
                        <p>Donec pulvinar lacus sed lacus congue tincidunt. In at fermentum risus. Donec pulvinar lacus sed lacus congue tincidunt, consec tetur adipiscing elit.</p>
                        
                        <!--
                        contact form
                        -->
                        <form method="post" id="contact-form">
                        
                            <!--
                            notice after sending contact form
                            -->
                            <div class="confirm">
                            
                                <div class="notice">Your message has been sent successfully. Thank you!</div>
                            
                            </div>
                            
                            <input type="text" name="name" placeholder="Name and surname..." />
                            <input type="text" name="email" placeholder="Email..." />
                            <input type="text" name="phone" placeholder="Phone..." class="input-right" />
                                                                                                      
                            <textarea name="message" placeholder="Message..." rows="5" cols="10"></textarea>
                            
                            <p class="action"><button type="button" class="button button-green" name="send-contact-form">Send message</button> <span>or call us: <strong>+156 98 541 565</strong></span></p>
                            
                            <div class="clear">
                            </div>
                        
                        </form>
                    
                    </div>
                
                </div>
                
                <div class="clear">
                </div>
            
            </section>
            
            <!--
            footer
            -->
            <footer>
                <ul style="float:left;">
                    <li style="display:inline;padding:10px;">&copy; 2015 <span>Eden</span>, Inc.</li>
                    <li style="display:inline;padding:10px;"><a href="">Terms</a></li>
                    <li style="display:inline;padding:10px;"><a href="" >Privacy</a></li>
                    <li style="display:inline;padding:10px;"><a href="" ">Security</a></li>

                </ul>

                <ul style="float:right;">
                    <li style="display:inline;padding:10px;"><a href="">Shop</a></li>
                    <li style="display:inline;padding:10px;"><a href="">About</a></li>
                    <li style="display:inline;padding:10px;"><a href="" >Contact</a></li>
                    <li style="display:inline;padding:10px;"><a href="" >Help</a></li>

                </ul>
            </footer>
        
        </div>
    
    </div>

    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="_assets/_libs/jquery-2.1.1.min.js"></script>
    <script src="_assets/_libs/smoothscroll.js"></script>
    <script src="_assets/_js/functions.js"></script>

    <!--
    facebook SDK
    -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "../../../../connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1476325629301808&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
</body>

<!-- Mirrored from demo.martanian.com/html/loriette/florists/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Oct 2015 10:54:06 GMT -->
</html>