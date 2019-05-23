<?php

    $conn_string = "host=ec2-54-225-72-238.compute-1.amazonaws.com port=5432 dbname=dd6mqv3gs2odmu user=fyfjbkmagcjdqy password=1c408f7c3644b0db91d4c3f70ed00eae5cd328dd7d8eab2e6a5f9cd08e1d9abb";
    $conn = pg_connect($conn_string);

    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }

    $result = pg_query($conn, "SELECT * FROM tree_info ORDER BY category");

    if (!$result) {
        echo "An error occurred.\n";
    }

    $trees = pg_fetch_all($result, PGSQL_ASSOC);

    pg_free_result($result);

    pg_close($conn);
?>

<!DOCTYPE html>
<html>

<head>
    <title>PlantATree Tree List</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="robots" content="follow, index" />
    <meta property="og:site_name" content="PlantAtree" />
    <meta property="og:type" content="Article" />
    <meta property="og:title" content="PlantAtree" />

    <link rel="shortcut icon" type="image/x-icon" href="symbol_icon.jpg" />
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
    <div id="page4">
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
        <h2 class="center gray-text">Tree list</h2>

        <div class="container">
            <div class="row">
                <?php foreach($trees as $trees){ ?>
                <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <div class="card content center">
                            <?php
                                switch($trees['name']){
             case "White Agapanthus":
                 echo '<img src="images/white_agapanthus.jpg" alt="WhiteAgapanthus" width="200" height="200" />';
                 break;
             case "Pink Abelia":
                 echo '<img src="images/pink_abelia_full.jpg" alt="PinkAbelia" width="200" height="200" />';
                 break;
             case "Apple Granny Smith":
                 echo '<img src="images/granny_smith.jpg" alt="PinkAbelia" width="200" height="200" />';
                 break;
             case "Lemon Tree":
                 echo '<img src="images/lemon_tree.jpg" alt="PinkAbelia" width="200" height="200" />';
                 break;
             case "Shinning Gum":
                 echo '<img src="images/shining_gum.jpg" alt="ShiningGum" width="200" height="200" />';
                 break;
             case "Southern Mahogany":
                 echo '<img src="images/south_maho.jpg" alt="SouthernMahogany" width="200" height="200" />';
                 break;
             case "Silver Fir":
                 echo '<img src="images/silver_fir.jpg" alt="SilverFir" width="200" height="200" />';
                 break;
             case "Norway Maple":
                 echo '<img src="images/norway_maple.jpg" alt="NorwayMaple" width="200" height="200" />';
                 break;
             case "Upright Hornbeam":
                 echo '<img src="images/up_horn.jpg" alt="UprightHornbeam" width="200" height="200" />';
                 break;
             case "Upright Box":
                 echo '<img src="images/up_box.jpg" alt="UprightBox" width="200" height="200" />';
                 break;
             case "Wind Grass":
                 echo '<img src="images/wind_grass.jpg" alt="WindGrass" width="200" height="200" />';
                 break;
             case "Purple Bidibidi":
                 echo '<img src="images/purp_bidi.jpg" alt="PurpleBidibidi" width="200" height="200" />';
                 break;
             case "Pygmy Date Palm":
                 echo '<img src="images/pygmy_date.jpg" alt="PygmyDatePalm" width="200" height="200" />';
                 break;
             case "Ponytail Palm":
                 echo '<img src="images/ponytail_palm.jpg" alt="PonytailPalm" width="200" height="200" />';
                 break;
                    }
                            ?>
                            <h5>Tree Name: <?php echo $trees['name']; ?></h5>
                            <h5>Category: <?php echo htmlspecialchars($trees['category']);?></h5>
                            <h5>Soil Drainage Condition: <?php echo htmlspecialchars($trees['soil_drainage']);?></h5>
                            <h5>Sunlight Condition: <?php echo htmlspecialchars($trees['sun']);?></h5>
                            <h5>Maintainence Requirements: <?php echo htmlspecialchars($trees['maint_req']);?></h5>
                            <h5>Max Height of Mature Tree: <?php echo htmlspecialchars($trees['max_height']);?></h5>
                            <h5>Growth Rate: <?php echo htmlspecialchars($trees['growth_rate']);?></h5>
                            <h5>Price: $<?php echo htmlspecialchars($trees['price']);?></h5>
                            <a class="brand-text" href="#">more info</a>
                        </div>
                    </div>
                </div><br>
                <?php } ?>
            </div>

        </div>
    </div>
</body>

</html>
