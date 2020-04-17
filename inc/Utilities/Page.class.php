<?php
class Page {

    static function header() { ?>

        <!DOCTYPE html>
        <html class="no-js" lang="en">

        <head>
            <title>Sweet Spot</title>
            <link rel="dns-prefetch preconnect" href="https://cdn11.bigcommerce.com/s-q4y0hdrrlh" crossorigin>
            <link rel="dns-prefetch preconnect" href="https://fonts.googleapis.com" crossorigin>
            <link rel="dns-prefetch preconnect" href="https://fonts.gstatic.com" crossorigin>

            <link href="https://cdn11.bigcommerce.com/r-ce728c56d76b20c1000da7937a206de5ce184199/img/bc_favicon.ico" rel="shortcut icon">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

            <script>
                document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
            </script>
            <script>
                window.lazySizesConfig = window.lazySizesConfig || {};
                window.lazySizesConfig.loadMode = 1;
            </script>
            <script async src="https://cdn11.bigcommerce.com/s-q4y0hdrrlh/stencil/a276c7d0-4b5d-0138-fa70-0242ac11000f/dist/theme-bundle.head_async.js"></script>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="js/form_validation.js"></script>

            <link href="https://fonts.googleapis.com/css?family=Karla:400|Montserrat:400,500,700&display=swap" rel="stylesheet">
            <link data-stencil-stylesheet href="https://cdn11.bigcommerce.com/s-q4y0hdrrlh/stencil/a276c7d0-4b5d-0138-fa70-0242ac11000f/css/theme-4e2038f0-5dd4-0138-b7ec-0242ac110015.css" rel="stylesheet">

        </head>

        <body>
            <svg data-src="https://cdn11.bigcommerce.com/s-q4y0hdrrlh/stencil/a276c7d0-4b5d-0138-fa70-0242ac11000f/img/icon-sprite.svg" class="icons-svg-sprite"></svg>

            <header class="header" role="banner">
                <nav class="navUser">

                    <ul class="navUser-section navUser-section--alt">
                        <li class="navUser-item">
                            <a class="navUser-action navUser-action--quickSearch" href="<?php $_SERVER['PHP_SELF'] ?>?action=search" data-search="quickSearch" aria-controls="quickSearch" aria-expanded="false">Search</a>
                        </li>
                        <?php if (isset($_SESSION["loggedIn"]) && !empty($_SESSION["loggedIn"])) { ?>
                            <li class="navUser-item navUser-item--account">
                                <a class="navUser-action" href="logout.php">Welcome! <?php echo $_SESSION["loggedIn"]; ?> Log Out</a>
                            </li>
                        <?php } else { ?>
                            <li class="navUser-item navUser-item--account">
                                <a class="navUser-action" href="login.php">Sign in</a>
                                <span class="navUser-or">or</span> <a class="navUser-action" href="register.php">Register</a>
                            </li>
                        <?php } ?>
                        <li class="navUser-item navUser-item--cart">
                            <a class="navUser-action" href="cart.php">
                                <span class="navUser-item-cartLabel">Cart</span> <span class="countPill cart-quantity"></span>
                            </a>
                        </li>
                    </ul>
                    </div>
                </nav>
                <?php
                if (isset($_GET["action"]) && !empty($_GET["action"]) && ($_GET["action"] == "search")) { ?>
                    <div class="container">
                        <form class="form" action="/search.php">
                            <fieldset class="form-fieldset">
                                <div class="form-field">
                                    <label class="is-srOnly" for="search_query">Search</label>
                                    <input class="form-input" data-search-quick="" name="search_query" id="search_query" data-error-message="Search field cannot be empty." placeholder="Search the store" autocomplete="off">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                <?php } else { ?>
                    <div class="header-logo header-logo--center">
                        <a href="index.php">
                            <span class="header-logo-text">Sweet Spot</span>
                        </a>
                    </div>
                <?php } ?>

                <div class="navPages-container" id="menu" data-menu>
                    <nav class="navPages">
                        <ul class="navPages-list">
                            <li class="navPages-item">
                                <a class="navPages-action" href="index.php">Shop All</a>
                            </li>
                            <li class="navPages-item">
                                <a class="navPages-action" href="#">Bath</a>
                            </li>
                            <li class="navPages-item">
                                <a class="navPages-action" href="#">Garden</a>
                            </li>
                            <li class="navPages-item">
                                <a class="navPages-action" href="#">Kitchen</a>
                            </li>
                            <li class="navPages-item navPages-item-page">
                                <a class="navPages-action" href="#">Shipping &amp; Returns</a>
                            </li>
                            <li class="navPages-item navPages-item-page">
                                <a class="navPages-action" href="#">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </header>
            <div data-content-region="header_bottom"></div>
            <div class="body" data-currency-code="CAD">
            <?php }


        static function footer()
        { ?>
                <footer class="footer" role="contentinfo">
                    <div class="container" style="text-align: center;">
                        <section class="footer-info">
                            <article class="footer-info-col footer-info-col--small" data-section-type="footer-webPages">
                                <h5 class="footer-info-heading">Navigate</h5>
                                <ul class="footer-info-list">
                                    <li>
                                        <a href="#">Shipping &amp; Returns</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact Us</a>
                                    </li>
                                </ul>
                            </article>

                            <article class="footer-info-col footer-info-col--small" data-section-type="footer-categories">
                                <h5 class="footer-info-heading">Categories</h5>
                                <ul class="footer-info-list">
                                    <li>
                                        <a href="#">Shop All</a>
                                    </li>
                                    <li>
                                        <a href="#">Bath</a>
                                    </li>
                                    <li>
                                        <a href="#">Garden</a>
                                    </li>
                                    <li>
                                        <a href="#">Kitchen</a>
                                    </li>
                                </ul>
                            </article>

                    </div>
                </footer>

                <script type="text/javascript" src="https://cdn11.bigcommerce.com/shared/js/csrf-protection-header-8a5755f9faea238f4a4bbbc1dec86e53918cea7e.js"></script>
                <script type="text/javascript" src="https://cdn11.bigcommerce.com/r-ce728c56d76b20c1000da7937a206de5ce184199/javascript/visitor_stencil.js"></script>

        </body>

        </html>
    <?php }


    static function login($state)
        { ?>
        <div class="container">
            <div class="login">
                <ul class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
                    <li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a href="index.php" class="breadcrumb-label" itemprop="item"><span itemprop="name">Home</span></a>
                        <meta itemprop="position" content="1" />
                    </li>
                    <li class="breadcrumb is-active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <meta itemprop="item" content="login.php">
                        <span class="breadcrumb-label" itemprop="name">Login</span>
                        <meta itemprop="position" content="2" />
                    </li>
                </ul>
                <h1 class="page-heading">Sign in</h1>
                <div class="alertBox alertBox--error" style="display: <?php echo $state ? "none" : "display" ?> ;">
                    <div class="alertBox-column alertBox-icon">
                        <icon glyph="ic-error" class="icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path>
                            </svg></icon>
                    </div>
                    <p class="alertBox-column alertBox-message">
                        <span>Your email address or password is incorrect. Please try again.</span>
                    </p>
                </div>
                <div class="login-row">
                    <form class="login-form form" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">


                        <div class="form-field">
                            <label class="form-label" for="login_email">Email Address:</label>
                            <input class="form-input" name="login_email" id="login_email" type="email">
                        </div>
                        <div class="form-field">
                            <label class="form-label" for="login_pass">Password:</label>
                            <input class="form-input" id="login_pass" type="password" name="login_pass" autocomplete="off">
                        </div>
                        <div class="form-actions">
                            <input type="submit" class="button button--primary" value="Sign in">
                            <!-- <a class="forgot-password" href="/login.php?action=reset_password">Forgot your password?</a> -->
                        </div>
                    </form>
                    <div class="new-customer">
                        <div class="panel">
                            <div class="panel-header">
                                <h2 class="panel-title">New Customer?</h2>
                            </div>
                            <div class="panel-body">
                                <p class="new-customer-intro">Create an account with us and you&#x27;ll be able to:</p>
                                <ul class="new-customer-fact-list">
                                    <li class="new-customer-fact">Place your order</li>
                                    <li class="new-customer-fact">Access your order history</li>
                                    <li class="new-customer-fact">Track new orders</li>
                                </ul>
                                <a href="register.php"><button class="button button--primary">Create Account</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal" class="modal" data-reveal data-prevent-quick-search-close>
            <a href="#" class="modal-close" aria-label="Close" role="button">
                <span aria-hidden="true">&#215;</span>
            </a>
            <div class="modal-content"></div>
            <div class="loadingOverlay"></div>
        </div>
        <div id="alert-modal" class="modal modal--alert modal--small" data-reveal data-prevent-quick-search-close>
            <div class="swal2-icon swal2-error swal2-icon-show"><span class="swal2-x-mark"><span class="swal2-x-mark-line-left"></span><span class="swal2-x-mark-line-right"></span></span></div>

            <div class="modal-content"></div>

            <div class="button-container"><button type="button" class="confirm button" data-reveal-close>OK</button></div>
        </div>
        </div>
    <?php }


    static function loginSuccess()
        { ?>
        <div class="body" data-currency-code="CAD">
            <div class="container">
                <div class="login">
                    <ul class="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li class="breadcrumb " itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <a href="main.php" class="breadcrumb-label" itemprop="item"><span itemprop="name">Home</span></a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li class="breadcrumb is-active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <meta itemprop="item" content="https://amall.mybigcommerce.com/login.php">
                            <span class="breadcrumb-label" itemprop="name">Login</span>
                            <meta itemprop="position" content="2">
                        </li>
                    </ul>
                    <h1 class="page-heading">
                        Sign in Sccessful! <br>
                        Welcome Back
                    </h1>
                    <div class="login-row">
                        <form style="text-align: center; width: 100% !important" class="login-form form" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                            <input type="submit" class="button button--primary" name="welcome" value="Back to Main Page">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php }


    static function register()
        { ?>
        <div class="container">
            <ul class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
                <li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a href="index.php" class="breadcrumb-label" itemprop="item"><span itemprop="name">Home</span></a>
                    <meta itemprop="position" content="1" />
                </li>
                <li class="breadcrumb is-active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <meta itemprop="item" content="https://amall.mybigcommerce.com/login.php?action=create_account">
                    <span class="breadcrumb-label" itemprop="name">Create Account</span>
                    <meta itemprop="position" content="2" />
                </li>
            </ul>
            <h1 class="page-heading">New Account</h1>

            <div class="account account--fixed">
                <div class="account-body">
                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" data-create-account-form method="post" class="form" id="register_form">
                        <div class="form-row form-row--half">
                            <div class="form-field" id="FormField_1" data-type="EmailAddress">
                                <label class="form-label" for="email">Email Address
                                    <small>Required</small>
                                </label>
                                <input type="text" id="email" data-label="Email Address" name="email" class="form-input" aria-required="true" data-field-type="EmailAddress">
                                <span style="color: red;"></span>
                            </div>

                            <div class="form-field" id="FormField_2" data-type="Password">
                                <label class="form-label" for="password">Password
                                    <small>Required</small>
                                </label>
                                <input type="password" class="form-input" id="password" data-label="Password" name="password" value="" autocomplete="off" aria-required="true" data-field-type="Password">
                                <span style="color: red;"></span>
                            </div>

                            <div class="form-field" id="FormField_3" data-type="ConfirmPassword">
                                <label class="form-label" for="cfm_password">Confirm Password
                                    <small>Required</small>
                                </label>
                                <input type="password" class="form-input" id="cfm_password" data-label="Confirm Password" name="cfm_password" value="" autocomplete="off" aria-required="true" data-field-type="ConfirmPassword">
                                <span style="color: red;"></span>
                            </div>

                            <div class="form-field" id="FormField_4" data-type="FirstName">
                                <label class="form-label" for="fname">First Name
                                    <small>Required</small>
                                </label>
                                <input type="text" id="fname" data-label="First Name" name="fname" class="form-input" aria-required="true" data-field-type="FirstName">
                                <span style="color: red;"></span>
                            </div>

                            <div class="form-field" id="FormField_5" data-type="LastName">
                                <label class="form-label" for="lname">Last Name
                                    <small>Required</small>
                                </label>
                                <input type="text" id="lname" data-label="Last Name" name="lname" class="form-input" aria-required="true" data-field-type="LastName">
                                <span style="color: red;"></span>
                            </div>

                            <div class="form-field" id="FormField_6" data-type="Phone">
                                <label class="form-label" for="phone">Phone Number
                                    <small>Required</small>
                                </label>
                                <input type="text" id="phone" data-label="Phone Number" name="phone" class="form-input" aria-required="false" data-field-type="Phone">
                                <span style="color: red;"></span>
                            </div>

                            <div class="form-field" id="FormField_7" data-type="AddressLine1">
                                <label class="form-label" for="address">Address
                                    <small>Required</small>
                                </label>
                                <input type="text" id="address" data-label="address" name="address" class="form-input" aria-required="true" data-field-type="AddressLine1">
                                <span style="color: red;"></span>
                            </div>

                            <div class="form-field" id="FormField_8" data-type="City">
                                <label class="form-label" for="city">Suburb/City
                                    <small>Required</small>
                                </label>
                                <input type="text" id="city" data-label="Suburb/City" name="city" class="form-input" aria-required="true" data-field-type="City">
                                <span style="color: red;"></span>
                            </div>

                            <div class="form-field" id="FormField_9" data-type="State">
                                <label class="form-label" for="state">State/Province
                                    <small>Required</small>
                                </label>
                                <input type="text" id="state" data-label="State/Province" name="state" class="form-input" aria-required="true" data-field-type="State">
                                <span style="color: red;"></span>
                            </div>

                            <div class="form-field" id="FormField_10" data-type="Zip">
                                <label class="form-label" for="zip">Zip/Postcode
                                    <small>Required</small>
                                </label>
                                <input type="text" id="zip" data-label="Zip/Postcode" name="zip" class="form-input" aria-required="true" data-field-type="Zip">
                                <span style="color: red;"></span>
                            </div>
                        </div>
                        <div class="form-actions">
                            <input type="submit" class="button button--primary" value="Create Account" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="modal" class="modal" data-reveal data-prevent-quick-search-close>
            <a href="#" class="modal-close" aria-label="Close" role="button">
                <span aria-hidden="true">&#215;</span>
            </a>
            <div class="modal-content"></div>
            <div class="loadingOverlay"></div>
        </div>
        <div id="alert-modal" class="modal modal--alert modal--small" data-reveal data-prevent-quick-search-close>
            <div class="swal2-icon swal2-error swal2-icon-show"><span class="swal2-x-mark"><span class="swal2-x-mark-line-left"></span><span class="swal2-x-mark-line-right"></span></span></div>

            <div class="modal-content"></div>

            <div class="button-container"><button type="button" class="confirm button" data-reveal-close>OK</button></div>
        </div>
    <?php }


    static function registerSuccess()
        { ?>
        <div class="body" data-currency-code="CAD">
            <div class="container">
                <div class="login">
                    <ul class="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li class="breadcrumb " itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <a href="main.php" class="breadcrumb-label" itemprop="item"><span itemprop="name">Home</span></a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li class="breadcrumb is-active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <meta itemprop="item" content="https://amall.mybigcommerce.com/login.php">
                            <span class="breadcrumb-label" itemprop="name">Create Account</span>
                            <meta itemprop="position" content="2">
                        </li>
                    </ul>
                    <h1 class="page-heading">
                        Register Success!
                    </h1>
                    <div class="login-row">
                        <form style="text-align: center; width: 100% !important" class="login-form form" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                            <input type="submit" class="button button--primary" name="welcome" value="Login Now">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php }


    static function logout()
        { ?>
        <div class="body" data-currency-code="CAD">
            <div class="container">
                <div class="login">
                    <h1 class="page-heading">
                        You are logged out! <br>
                        Hope to see you again soon!
                    </h1>
                    <div class="login-row">
                        <form style="text-align: center; width: 100% !important" class="login-form form" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                            <input type="submit" class="button button--primary" name="welcome" value="Back to Main Page">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php }


    static function itemList($products){ ?>
        <div class="container">
            <ul class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
                <li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a href="index.php" class="breadcrumb-label" itemprop="item"><span itemprop="name">Home</span></a>
                    <meta itemprop="position" content="1" />
                </li>
                <li class="breadcrumb is-active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <meta itemprop="item" content="https://amall.mybigcommerce.com/shop-all/">
                    <span class="breadcrumb-label" itemprop="name">Shop All</span>
                    <meta itemprop="position" content="2" />
                </li>
            </ul>
            <h1 class="page-heading">Shop All</h1>
            <div data-content-region="category_below_header"></div>

            <div class="page">
                <main class="page-content" id="product-listing-container">
                    <form class="actionBar" method="get" data-sort-by>
                        <fieldset class="form-fieldset actionBar-section">
                            <div class="form-field">
                                <label class="form-label" for="sort">Sort By:</label>
                                <select class="form-select form-select--small" name="sort" id="sort">
                                    <option value="featured" selected>Featured Items</option>
                                    <option value="alphaasc">A to Z</option>
                                    <option value="alphadesc">Z to A</option>
                                    <option value="priceasc">Price: Ascending</option>
                                    <option value="pricedesc">Price: Descending</option>
                                </select>
                                <input type="submit">
                            </div>
                        </fieldset>
                    </form>

                    <form action="/compare" method='POST' data-product-compare>
                        <ul class="productGrid">
                            <?php foreach ($products as $product) { ?>
                                <li class="product">
                                    <article class="card ">
                                        <figure class="card-figure">
                                            <a href="?action=item&item_id=<?php echo $product->getProductID(); ?>">
                                                <div class="card-img-container">
                                                    <img src="https://cdn11.bigcommerce.com/s-q4y0hdrrlh/images/stencil/500x659/products/86/286/ablebrewingsystem4.1435947369.jpg?c=1" alt="" title="" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-q4y0hdrrlh/images/stencil/80w/products/86/286/ablebrewingsystem4.1435947369.jpg?c=1" data-srcset="https://cdn11.bigcommerce.com/s-q4y0hdrrlh/images/stencil/80w/products/86/286/ablebrewingsystem4.1435947369.jpg?c=1 80w, https://cdn11.bigcommerce.com/s-q4y0hdrrlh/images/stencil/160w/products/86/286/ablebrewingsystem4.1435947369.jpg?c=1 160w, https://cdn11.bigcommerce.com/s-q4y0hdrrlh/images/stencil/320w/products/86/286/ablebrewingsystem4.1435947369.jpg?c=1 320w, https://cdn11.bigcommerce.com/s-q4y0hdrrlh/images/stencil/640w/products/86/286/ablebrewingsystem4.1435947369.jpg?c=1 640w, https://cdn11.bigcommerce.com/s-q4y0hdrrlh/images/stencil/960w/products/86/286/ablebrewingsystem4.1435947369.jpg?c=1 960w, https://cdn11.bigcommerce.com/s-q4y0hdrrlh/images/stencil/1280w/products/86/286/ablebrewingsystem4.1435947369.jpg?c=1 1280w, https://cdn11.bigcommerce.com/s-q4y0hdrrlh/images/stencil/1920w/products/86/286/ablebrewingsystem4.1435947369.jpg?c=1 1920w, https://cdn11.bigcommerce.com/s-q4y0hdrrlh/images/stencil/2560w/products/86/286/ablebrewingsystem4.1435947369.jpg?c=1 2560w" class="lazyload card-image" />
                                                </div>
                                            </a>

                                            <figcaption class="card-figcaption">
                                                <div class="card-figcaption-body">
                                                    <a href="<?php echo $_SERVER["PHP_SELF"] . "?product_id=" . $product->getProductID(); ?>" data-event-type="product-click" class="button button--small card-figcaption-button">Add to Cart</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="?action=item&item_id=<?php echo $product->getProductID(); ?>">
                                                    <?php echo $product->getName(); ?></a>
                                            </h4>

                                            <div class="card-text" data-test-info-type="price">

                                                <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;">
                                                    MSRP:
                                                    <span data-product-rrp-price-without-tax class="price price--rrp">

                                                    </span>
                                                </div>
                                                <div class="price-section price-section--withoutTax non-sale-price--withoutTax" style="display: none;">
                                                    Was:
                                                    <span data-product-non-sale-price-without-tax class="price price--non-sale">

                                                    </span>
                                                </div>
                                                <div class="price-section price-section--withoutTax">
                                                    <span class="price-label">

                                                    </span>
                                                    <span class="price-now-label" style="display: none;">
                                                        Now:
                                                    </span>
                                                    <span data-product-price-without-tax class="price price--withoutTax">
                                                        Price: $<?php echo $product->getPrice(); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </li>
                            <?php } ?>
                        </ul>
                    </form>
                </main>
            </div>
        </div>
    <?php }


    static function item($product) { ?>
        <div data-content-region="header_bottom"></div>
        <div class="body" data-currency-code="CAD">

            <div class="container">
                <ul class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
                    <li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a href="index.php" class="breadcrumb-label" itemprop="item"><span itemprop="name">Home</span></a>
                        <meta itemprop="position" content="1" />
                    </li>
                    <li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a href="https://amall.mybigcommerce.com/kitchen/" class="breadcrumb-label" itemprop="item"><span itemprop="name">Kitchen</span></a>
                        <meta itemprop="position" content="2" />
                    </li>
                    <li class="breadcrumb is-active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <meta itemprop="item" content="https://amall.mybigcommerce.com/able-brewing-system/">
                        <span class="breadcrumb-label" itemprop="name"><?php echo ($product->getName()); ?></span>
                        <meta itemprop="position" content="3" />
                    </li>
                </ul>


                <div itemscope itemtype="http://schema.org/Product">
                    <div class="productView">

                        <section class="productView-details">
                            <div class="productView-product">
                                <h1 class="productView-title" itemprop="name"><?php echo ($product->getName()); ?></h1>
                                <div class="productView-price">

                                    <div class="price-section price-section--withoutTax" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                        <span class="price-label">

                                        </span>
                                        <span class="price-now-label">
                                            Now:
                                        </span>
                                        <span data-product-price-without-tax class="price price--withoutTax">$<?php echo ($product->getPrice()); ?></span>
                                        <meta itemprop="availability" itemtype="http://schema.org/ItemAvailability" content="http://schema.org/InStock">
                                        <meta itemprop="itemCondition" itemtype="http://schema.org/OfferItemCondition" content="http://schema.org/Condition">
                                        <meta itemprop="priceCurrency" content="CAD">
                                        <meta itemprop="url" content="https://amall.mybigcommerce.com/able-brewing-system/">
                                        <div itemprop="priceSpecification" itemscope itemtype="http://schema.org/PriceSpecification">
                                            <meta itemprop="price" content="225">
                                            <meta itemprop="priceCurrency" content="CAD">
                                            <meta itemprop="valueAddedTaxIncluded" content="false">
                                        </div>
                                    </div>

                                </div>
                                <div data-content-region="product_below_price"></div>
                                <div class="productView-rating">
                                    <span class="icon icon--ratingEmpty">
                                        <svg>
                                            <use xlink:href="#icon-star" />
                                        </svg>
                                    </span>
                                </div>
                        </section>

                        <section class="productView-images" data-image-gallery>
                            <figure class="productView-image" data-image-gallery-main data-zoom-image="https://cdn11.bigcommerce.com/s-q4y0hdrrlh/images/stencil/1280x1280/products/86/286/ablebrewingsystem4.1435947369.jpg?c=1&imbypass=on">
                                <div class="productView-img-container">
                                    <a href="https://cdn11.bigcommerce.com/s-q4y0hdrrlh/images/stencil/1280x1280/products/86/286/ablebrewingsystem4.1435947369.jpg?c=1&imbypass=on" target="_blank" itemprop="image">
                                        <img src="https://cdn11.bigcommerce.com/s-q4y0hdrrlh/images/stencil/500x659/products/86/286/ablebrewingsystem4.1435947369.jpg?c=1&imbypass=on" alt="[Sample] Able Brewing System" title="[Sample] Able Brewing System" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-q4y0hdrrlh/images/stencil/80w/products/86/286/ablebrewingsystem4.1435947369.jpg?c=1&imbypass=on" data-srcset="https://cdn11.bigcommerce.com/s-q4y0hdrrlh/images/stencil/80w/products/86/286/ablebrewingsystem4.1435947369.jpg?c=1&imbypass=on 80w, https://cdn11.bigcommerce.com/s-q4y0hdrrlh/images/stencil/160w/products/86/286/ablebrewingsystem4.1435947369.jpg?c=1&imbypass=on 160w, https://cdn11.bigcommerce.com/s-q4y0hdrrlh/images/stencil/320w/products/86/286/ablebrewingsystem4.1435947369.jpg?c=1&imbypass=on 320w, https://cdn11.bigcommerce.com/s-q4y0hdrrlh/images/stencil/640w/products/86/286/ablebrewingsystem4.1435947369.jpg?c=1&imbypass=on 640w, https://cdn11.bigcommerce.com/s-q4y0hdrrlh/images/stencil/960w/products/86/286/ablebrewingsystem4.1435947369.jpg?c=1&imbypass=on 960w, https://cdn11.bigcommerce.com/s-q4y0hdrrlh/images/stencil/1280w/products/86/286/ablebrewingsystem4.1435947369.jpg?c=1&imbypass=on 1280w, https://cdn11.bigcommerce.com/s-q4y0hdrrlh/images/stencil/1920w/products/86/286/ablebrewingsystem4.1435947369.jpg?c=1&imbypass=on 1920w, https://cdn11.bigcommerce.com/s-q4y0hdrrlh/images/stencil/2560w/products/86/286/ablebrewingsystem4.1435947369.jpg?c=1&imbypass=on 2560w" class="lazyload productView-image--default" data-main-image />
                                    </a>
                                </div>
                            </figure>

                        </section>

                        <section class="productView-details">
                            <div class="productView-options">
                                <form class="form" method="post" action="cart.php" enctype="multipart/form-data" data-cart-item-add>
                                    <input type="hidden" name="action" value="add">
                                    <input type="hidden" name="product_id" value="86" />
                                    <div data-product-option-change style="display:none;">
                                    </div>
                                    <div class="form-field form-field--stock u-hiddenVisually">
                                        <label class="form-label form-label--alternate">
                                            Current Stock:
                                            <span data-product-stock></span>
                                        </label>
                                    </div>
                                    <div class="form-field form-field--increments">
                                        <label class="form-label form-label--alternate" for="qty[]">Quantity:</label>
                                        <div class="form-increment" data-quantity-change>
                                            <button class="button button--icon" data-action="dec">
                                                <span class="is-srOnly">Decrease Quantity:</span>
                                                <i class="icon" aria-hidden="true">
                                                    <svg>
                                                        <use xlink:href="#icon-keyboard-arrow-down" />
                                                    </svg>
                                                </i>
                                            </button>
                                            <input class="form-input form-input--incrementTotal" id="qty[]" name="qty[]" type="tel" value="1" data-quantity-min="0" data-quantity-max="0" min="1" pattern="[0-9]*" aria-live="polite">
                                            <button class="button button--icon" data-action="inc">
                                                <span class="is-srOnly">Increase Quantity:</span>
                                                <i class="icon" aria-hidden="true">
                                                    <svg>
                                                        <use xlink:href="#icon-keyboard-arrow-up" />
                                                    </svg>
                                                </i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="alertBox productAttributes-message" style="display:none">
                                        <div class="alertBox-column alertBox-icon">
                                            <icon glyph="ic-success" class="icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path>
                                                </svg></icon>
                                        </div>
                                        <p class="alertBox-column alertBox-message"></p>
                                    </div>
                                    <div class="form-action">
                                        <a href="<?php echo $_SERVER["PHP_SELF"] . "?product_id=" . $product->getProductID(); ?>"><input id="form-action-addToCart" data-wait-message="Adding to cart…" class="button button--primary" type="button" value="Add to Cart"></a>
                                    </div>
                                </form>

                            </div>
                            <div class="addthis_toolbox addthis_32x32_style" addthis:url="" addthis:title="">

                                <script type="text/javascript" defer src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4e94ed470ee51e32"></script>
                                <script>
                                    window.addEventListener('DOMContentLoaded', function() {
                                        if (typeof(addthis) === "object") {
                                            addthis.toolbox('.addthis_toolbox');
                                        }
                                    });
                                </script>
                            </div>
                        </section>

                        <article class="productView-description" itemprop="description">
                            <ul class="tabs" data-tab>
                                <li class="tab is-active">
                                    <a class="tab-title" href="#tab-description">Description</a>
                                </li>
                            </ul>
                            <div class="tabs-contents">
                                <div class="tab-content is-active" id="tab-description">
                                    <p>Sample Description</p>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div id="previewModal" class="modal modal--large" data-reveal>
                        <a href="#" class="modal-close" aria-label="Close" role="button">
                            <span aria-hidden="true">&#215;</span>
                        </a>
                        <div class="modal-content"></div>
                        <div class="loadingOverlay"></div>
                    </div>
                </div>
            </div>
        </div>
    <?php }


    static function cart($contents){
        $lineItems = $contents->data->line_items->physical_items; ?>
        <div class="container">
            <div class="page">
                <main class="page-content" data-cart>
                    <ul class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a href="index.php" class="breadcrumb-label" itemprop="item"><span itemprop="name">Home</span></a>
                            <meta itemprop="position" content="1" />
                        </li>
                        <li class="breadcrumb is-active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <meta itemprop="item" content="cart.php">
                            <span class="breadcrumb-label" itemprop="name">Your Cart</span>
                            <meta itemprop="position" content="2" />
                        </li>
                    </ul>

                    <h1 class="page-heading" data-cart-page-title>
                        Your Cart (<?php echo count($lineItems); ?> item)
                    </h1>

                    <div data-cart-status>
                    </div>

                    <div class="loadingOverlay"></div>

                    <div data-cart-content>
                        <table class="cart" data-cart-quantity="1">
                            <thead class="cart-header">
                                <tr>
                                    <th class="cart-header-item" colspan="2">Item</th>
                                    <th class="cart-header-item">Price</th>
                                    <th class="cart-header-item cart-header-quantity">Quantity</th>
                                    <th class="cart-header-item">Total</th>
                                </tr>
                            </thead>
                            <tbody class="cart-list">
                                <?php $subTotal = 0;
                                foreach ($lineItems as $lineItem) { ?>
                                    <tr class="cart-item" data-item-row>
                                        <td class="cart-item-block cart-item-figure">
                                            <img src="<?php echo $lineItem->image_url; ?>" alt="[Sample] Canvas Laundry Cart" title="[Sample] Canvas Laundry Cart" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-q4y0hdrrlh/images/stencil/80w/products/103/334/naturalcanvascart2.1435949279.jpg?c=1 80w, https://cdn11.bigcommerce.com/s-q4y0hdrrlh/images/stencil/160w/products/103/334/naturalcanvascart2.1435949279.jpg?c=1 160w, https://cdn11.bigcommerce.com/s-q4y0hdrrlh/images/stencil/320w/products/103/334/naturalcanvascart2.1435949279.jpg?c=1 320w, https://cdn11.bigcommerce.com/s-q4y0hdrrlh/images/stencil/640w/products/103/334/naturalcanvascart2.1435949279.jpg?c=1 640w, https://cdn11.bigcommerce.com/s-q4y0hdrrlh/images/stencil/960w/products/103/334/naturalcanvascart2.1435949279.jpg?c=1 960w, https://cdn11.bigcommerce.com/s-q4y0hdrrlh/images/stencil/1280w/products/103/334/naturalcanvascart2.1435949279.jpg?c=1 1280w, https://cdn11.bigcommerce.com/s-q4y0hdrrlh/images/stencil/1920w/products/103/334/naturalcanvascart2.1435949279.jpg?c=1 1920w, https://cdn11.bigcommerce.com/s-q4y0hdrrlh/images/stencil/2560w/products/103/334/naturalcanvascart2.1435949279.jpg?c=1 2560w" class=" cart-item-image" />
                                        </td>
                                        <td class="cart-item-block cart-item-title">
                                            <p class="cart-item-brand"></p>
                                            <h4 class="cart-item-name"><a href="?action=item&id=<?php echo ($lineItem->product_id); ?>"></a><?php echo ($lineItem->name); ?></h4>
                                        </td>
                                        <td class="cart-item-block cart-item-info">
                                            <span class="cart-item-label">Price</span>
                                            <span class="cart-item-value ">$<?php echo ($lineItem->list_price); ?></span>
                                        </td>
                                        <td class="cart-item-block cart-item-info cart-item-quantity">

                                            <label class="form-label cart-item-label" for="qty-bdceb8e4-7efa-4f93-a3bc-b3653cc4385d">Quantity:</label>
                                            <div class="form-increment">
                                                <button class="button button--icon" data-cart-update data-cart-itemid="bdceb8e4-7efa-4f93-a3bc-b3653cc4385d" data-action="dec">
                                                    <span class="is-srOnly">Decrease Quantity:</span>
                                                    <a href="?action=reduce&item_id=<?php echo ($lineItem->id . "&id=" . $lineItem->product_id . "&quantity=" . $lineItem->quantity);?>"><img width="23px" height="23px" src="css/image/cart_minus.jpg"></a>
                                                </button>
                                                <input class="form-input form-input--incrementTotal cart-item-qty-input" id="qty-bdceb8e4-7efa-4f93-a3bc-b3653cc4385d" name="qty-bdceb8e4-7efa-4f93-a3bc-b3653cc4385d" type="tel" value="<?php echo ($lineItem->quantity) ?>" data-quantity-min="0" data-quantity-max="100" data-quantity-min-error="The minimum purchasable quantity is null" data-quantity-max-error="The maximum purchasable quantity is null" min="1" pattern="[0-9]*" data-cart-itemid="bdceb8e4-7efa-4f93-a3bc-b3653cc4385d" data-action="manualQtyChange" aria-live="polite">
                                                <button class="button button--icon" data-cart-update data-cart-itemid="bdceb8e4-7efa-4f93-a3bc-b3653cc4385d" data-action="inc">
                                                    <span class="is-srOnly">Increase Quantity:</span>
                                                    <a href="?action=add&item_id=<?php echo ($lineItem->id . "&id=" . $lineItem->product_id . "&quantity=" . $lineItem->quantity);?>"><img width="23px" height="23px" src="css/image/cart_add.jpg"></a>
                                                </button>
                                            </div>

                                        </td>
                                        <td class="cart-item-block cart-item-info">
                                            <span class="cart-item-label">Total</span>
                                            <strong class="cart-item-value ">$<?php echo ($lineItem->quantity * $lineItem->list_price) ?></strong>
                                            <a href="<?php echo $_SERVER["PHP_SELF"] . "?action=delete&item_id=" . $lineItem->id; ?>">
                                                <img width="23px" height="23px" src="css/image/cart_delete.jpg">
                                            </a>
                                        </td>
                                    </tr>
                                <?php
                                    $subTotal += $lineItem->list_price;
                                } ?>

                            </tbody>
                        </table>
                    </div>

                    <div data-cart-totals>
                        <ul class="cart-totals">
                            <li class="cart-total">
                                <div class="cart-total-label">
                                    <strong>Subtotal:</strong>
                                </div>
                                <div class="cart-total-value">
                                    <span>$<?php echo $subTotal; ?></span>
                                </div>
                            </li>
                            <li class="cart-total">
                                <div class="cart-total-label">
                                    <strong>Taxes:</strong>
                                </div>
                                <div class="cart-total-value cart-total-grandTotal">
                                    <span>$<?php echo number_format($subTotal * 0.12, 2); ?></span>
                                </div>
                            </li>
                            <li class="cart-total">
                                <div class="cart-total-label">
                                    <strong>Grand total:</strong>
                                </div>
                                <div class="cart-total-value cart-total-grandTotal">
                                    <span>$<?php echo number_format($subTotal * 1.12, 2); ?></span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="cart-actions">
                        <a class="button button--primary" href="checkout.php" title="Click here to proceed to checkout">Check out</a>
                    </div>
                </main>
            </div>
        </div>
        <div id="modal" class="modal" data-reveal data-prevent-quick-search-close>
            <a href="#" class="modal-close" aria-label="Close" role="button">
                <span aria-hidden="true">&#215;</span>
            </a>
            <div class="modal-content"></div>
            <div class="loadingOverlay"></div>
        </div>
        <div id="alert-modal" class="modal modal--alert modal--small" data-reveal data-prevent-quick-search-close>
            <div class="swal2-icon swal2-error swal2-icon-show"><span class="swal2-x-mark"><span class="swal2-x-mark-line-left"></span><span class="swal2-x-mark-line-right"></span></span></div>
            <div class="modal-content"></div>
            <div class="button-container"><button type="button" class="confirm button" data-reveal-close>OK</button></div>
        </div>
        </div>
    <?php }


    static function emptyCart(){ ?>
        <div class="body" data-currency-code="CAD">
            <div class="container">
                <div class="login">
                    <h1 class="page-heading">
                        Your cart is empty!
                    </h1>
                    <div class="login-row">
                        <form style="text-align: center; width: 100% !important" class="login-form form" action="index.php" method="post">
                            <input type="submit" class="button button--primary" name="back" value="Back to Product List!">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php }


    static function checkout($customer, $contents) {
        $lineItems = $contents->data->line_items->physical_items; ?>

        <!DOCTYPE html>
        <html>

        <head>
            <title>Sweet Spot</title>
            <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
            <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
            <style>
                .invoice-title h2,
                .invoice-title h3 {
                    display: inline-block;
                }

                .table>tbody>tr>.no-line {
                    border-top: none;
                }

                .table>thead>tr>.no-line {
                    border-bottom: none;
                }

                .table>tbody>tr>.thick-line {
                    border-top: 2px solid;
                }
            </style>
        </head>

        <body>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="invoice-title">
                            <h2>Invoice</h2>
                            <h3 class="pull-right">Order # 12345</h3>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xs-6">
                                <address>
                                    <strong>Billed To:</strong><br>
                                    <?php echo $customer->getName(); ?><br>
                                    <?php echo $customer->getAddress(); ?><br>
                                    <?php echo $customer->getCity(); ?>. <?php $customer->getProvince(); ?><br>
                                    <?php echo $customer->getZipcode(); ?>
                                </address>
                            </div>
                            <div class="col-xs-6 text-right">
                                <address>
                                    <strong>Shipped To:</strong><br>
                                    <?php echo $customer->getName(); ?><br>
                                    <?php echo $customer->getAddress(); ?><br>
                                    <?php echo $customer->getCity(); ?>. <?php echo $customer->getProvince(); ?><br>
                                    <?php echo $customer->getZipcode(); ?>
                                </address>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <address>
                                    <strong>Payment Method:</strong><br>
                                    Visa ending **** 4242<br>
                                    <?php echo $customer->getEmail(); ?>
                                </address>
                            </div>
                            <div class="col-xs-6 text-right">
                                <address>
                                    <strong>Order Date:</strong><br>
                                    <?php date("Y-m-d") ?><br><br>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Order summary</strong></h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <td><strong>Item</strong></td>
                                                <td class="text-center"><strong>Price</strong></td>
                                                <td class="text-center"><strong>Quantity</strong></td>
                                                <td class="text-right"><strong>Totals</strong></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $grandTotal = 0;
                                            foreach ($lineItems as $lineItem) { ?>
                                                <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                                <tr>
                                                    <td><?php echo ($lineItem->name); ?></td>
                                                    <td class="text-center">$<?php echo ($lineItem->list_price); ?></td>
                                                    <td class="text-center"><?php echo ($lineItem->quantity); ?></td>
                                                    <td class="text-right">$<?php echo ($lineItem->quantity * $lineItem->list_price) ?></td>
                                                </tr>
                                            <?php
                                                $subTotal = $lineItem->quantity * $lineItem->list_price;
                                                $grandTotal += $subTotal;
                                            } ?>
                                            <tr>
                                                <td class="thick-line"></td>
                                                <td class="thick-line"></td>
                                                <td style="padding-top: 5%;" class="thick-line text-center"><strong>Subtotal</strong></td>
                                                <td style="padding-top: 5%;" class="thick-line text-right">$<?php 
                                                $grandTotal += $grandTotal * 0.12;
                                                echo number_format($grandTotal, 2); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="no-line"></td>
                                                <td class="no-line"></td>
                                                <td class="no-line text-center"><strong>Shipping</strong></td>
                                                <td class="no-line text-right">$15</td>
                                            </tr>
                                            <tr>
                                                <td class="no-line"></td>
                                                <td class="no-line"></td>
                                                <td class="no-line text-center"><strong>Total</strong></td>
                                                <td class="no-line text-right">$<?php echo ($grandTotal + 15); ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="button-container">
                                    <button style="margin-left: 90%;" type="button" class="btn btn-primary" onclick="window.location.href='index.php'">Return</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
        </html>
    <?php }
}
?>