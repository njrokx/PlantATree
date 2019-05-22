<!DOCTYPE html>
<html>

<head>
    <title>PlantATree Search Page</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="robots" content="follow, index" />
    <meta property="og:site_name" content="PlantAtree" />
    <meta property="og:type" content="Article" />
    <meta property="og:title" content="PlantAtree" />
    <meta property="og:url" content="https://www.southernwoods.co.nz/buy-plants-online.php" />


    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="shortcut icon" type="image/x-icon" href="https://www.southernwoods.co.nz/images/favicon.ico" />
    <link rel="stylesheet" href="bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="https://www.southernwoods.co.nz/libraries/jquery/css/smoothness/jquery-ui.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="stysheet1.css" />
    <link rel="stylesheet" type="text/css" href="stylesheet2.css" />
    <link rel="stylesheet" href="https://www.southernwoods.co.nz/includes/icomoon.css?1557354655" type="text/css" />
    <link rel="stylesheet" href="stylesheet.css" type="text/css" />
    <link rel="stylesheet" href="https://www.southernwoods.co.nz/includes/styles.css?1557354655" type="text/css" />
    <link rel="stylesheet" href="https://www.southernwoods.co.nz/includes/skins/flat/green.css" type="text/css" />
    <script type="text/javascript" src="https://www.southernwoods.co.nz/libraries/jquery/jquery.js"></script>
    <script type="text/javascript" src="https://www.southernwoods.co.nz/libraries/jquery/jquery-ui.js"></script>
    <script type="text/javascript" src="https://www.southernwoods.co.nz/includes/jquery.customSelect.js"></script>
    <script type="text/javascript" src="https://www.southernwoods.co.nz/libraries/jquery/galleria.js"></script>
    <script type="text/javascript" src="https://www.southernwoods.co.nz/includes/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://www.southernwoods.co.nz/includes/template.js?1557354655"></script>
    <script type="text/javascript" src="https://www.southernwoods.co.nz/includes/icheck.js"></script>


</head>

<body>
    <div id="page2">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="ecommerce-buttons-wrapper">
                            <a class="login-link" href="/login.php">Sign In</a>
                            <div id="Shoppingcart_cart" class="Shoppingcart_cart" style="margin: 0px;">
                                <div class="items"><a class="view-cart-link">View Cart</a> (0)</div>
                                <div class="show-view-cart-wrapper">
                                    <div id="cart-summary">
                                        <p class="num-items"><span class="update items">0</span>
                                            item(s) in your cart</p>
                                        <hr />
                                        <p class="latest-products">Have you seen our latest products?</p>
                                        <div class="product-list">
                                            <div class="category-item"><a href="#">Fruit Tree</a></div>
                                            <div class="category-item"><a href="#">Hedging</a></div>
                                            <div class="category-item"><a href="#">Evergreen</a></div>
                                            <div class="category-item"><a href="#">NZ Native</a></div>
                                            <div class="category-item"><a href="#">Gum Tree</a></div>
                                            <div class="category-item"><a href="#">Palm Tree</a></div>
                                            <div class="category-item"><a href="#">Hardwood</a></div>
                                        </div><span class="close-popup"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <a class="logo" title="Treeco" href="index.php"><img src="treeco.png" alt="treeco" /></a>
                    </div>
                </div>
                <div class="nav-wrapper">
                    <div class="nav-container">
                        <div class="nav">
                            <ul aria-haspopup="true" class="cmsNav1 menuStyle10">
                                <li data-id="1"><a href="Buy_Plants_main.php" aria-haspopup="false">Buy Plants </a></li>
                                <li data-id="2"><a href="accessories.php" aria-haspopup="false">Accessories</a></li>
                                <li data-id="3"><a href="Category.php" aria-haspopup="false">Categories</a></li>
                                <li data-id="4"><a href="TreeSearch.php">Search Trees</a></li>
                                <li data-id="5"><a href="javascript:;" aria-haspopup="true">About Us</a>
                                    <ul class="menuStyle9"></ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container breadcrumb">
            <div class="row">
                <div class="col-xs-12"><a href="/">Home</a><a href="TreeSearch.php" class="active-breadcrumb">Tree Search</a></div>
            </div>
        </div>
        <div class="container content-area-nobanner">
            <div class="row">
                <div class="col-xs-12 content">
                    <div class="row">
                        <div class="col-xs-8 center main-search-container">
                            <form method="get" action="Tree list.php">
                                <h2 color="green">Search for your ideal plant</h2>
                                <div class="main-search-wrapper">
                                    <input type="hidden" name="s" value="true" />
                                    <input type="hidden" name="min_height_max" id="min_height" value="0" />
                                    <input type="hidden" name="max_height_max" id="max_height" value="60" />
                                    <input type="hidden" name="max_spread_range" id="max_spread" value="20" />
                                    <div class="category-wrapper">
                                        <h6>Customise</h6>
                                    </div>
                                    <div class="slider-container">
                                        <div class="row">
                                            <div class="col-xs-6 left">
                                                <h6>Height Range</h6>
                                                <div class="min-height-icon"></div>
                                                <div class="slider-wrapper"><span class="min">0m</span><input type="text" id="theheight" /><span class="max">60m</span>
                                                    <div id="slider-height"></div>
                                                </div>
                                                <div class="max-height-icon"></div>
                                            </div>
                                            <div class="col-xs-6 left">
                                                <h6>Spread Range</h6>
                                                <div class="min-spread-icon"></div>
                                                <div class="slider-wrapper"><span class="min">0m</span><input type="text" id="thespread" /><span class="max">20m</span>
                                                    <div id="slider-spread"></div>
                                                </div>
                                                <div class="max-spread-icon"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="conditions-wrapper">
                                        <div class="row">
                                            <div class="col-xs-3 left">
                                                <h6>Growth</h6>
                                                <select name="growth" class="conditionsDrpDown">
                                                    <option value="">Please Select</option>
                                                    <option value="Slow">Slow</option>
                                                    <option value="Medium">Medium</option>
                                                    <option value="Rapid">Rapid</option>
                                                    <option value="Very Rapid">Very Rapid</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-3 left">
                                                <h6>Site Conditions</h6>
                                                <select name="site_conditions" class="conditionsDrpDown">
                                                    <option value="">Please Select</option>
                                                    <option value="Coastal/Salt Wind">Coastal/Salt Wind</option>
                                                    <option value="Exposed">Exposed</option>
                                                    <option value="Cold/Frosty">Cold/Frosty</option>
                                                    <option value="Clay Soil">Clay Soil</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-3 left">
                                                <h6>Drainage</h6>
                                                <select name="drainage" class="conditionsDrpDown">
                                                    <option value="">Please Select</option>
                                                    <option value="Dry">Dry</option>
                                                    <option value="Moist">Moist</option>
                                                    <option value="Wet">Wet</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-3 left">
                                                <h6>Sunlight</h6>
                                                <select name="sunlight" class="conditionsDrpDown">
                                                    <option value="">Please Select</option>
                                                    <option value="Full Sun">Full Sun</option>
                                                    <option value="Partial Sun">Partial Sun</option>
                                                    <option value="Full Shade">Full Shade</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-3 left"><br>
                                                <h6>Maintenance</h6>
                                                <select name="sunlight" class="conditionsDrpDown">
                                                    <option value="">Please Select</option>
                                                    <option value="High">High</option>
                                                    <option value="Medium">Medium</option>
                                                    <option value="Low">Low</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="buttons-wrapper left">
                                        <a class="reset btn" href="TreeSearch.php">Reset</a>
                                        <span class="find-plants-btn-wrapper"><input type="submit" value="Find Plants"/></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
