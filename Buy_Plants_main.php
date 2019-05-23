<?php

    $conn_string = "host=ec2-54-225-72-238.compute-1.amazonaws.com port=5432 dbname=dd6mqv3gs2odmu user=fyfjbkmagcjdqy password=1c408f7c3644b0db91d4c3f70ed00eae5cd328dd7d8eab2e6a5f9cd08e1d9abb";

    //connect to database
    $conn = pg_connect($conn_string);
        
    //check connection
    if(!$conn){
        echo 'connction error' . mysqli_connect_error();
    }

    $result = pg_query($conn, "SELECT * FROM tree_info ORDER BY category");

    if (!$result) {
        echo "An error occurred.\n";
    }

    $trees = pg_fetch_all($result, PGSQL_ASSOC);

    //free result from memory
    pg_free_result($result);

    //close connection
    mysqli_close($conn);
?>

<!DOCTYPE html>

<html>

<head>
    <!--<meta http-equiv="refresh" content="0; url=TreeSearch.php">-->
    <title>Buy Plants</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="robots" content="follow, index" />
    <meta property="og:site_name" content="PlantAtree" />
    <meta property="og:type" content="Article" />
    <meta property="og:title" content="PlantAtree" />


    <link rel="shortcut icon" type="image/x-icon" href="https://www.southernwoods.co.nz/images/favicon.ico" />
    <link rel="stylesheet" href="bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="https://www.southernwoods.co.nz/libraries/jquery/css/smoothness/jquery-ui.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="stysheet1.css" />
    <link rel="stylesheet" type="text/css" href="stylesheet2.css" />
    <link rel="stylesheet" type="text/css" href="buy_plants_positioning.css" />
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

    <div id="page1">
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
                                        </div>
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
        <form>
            <div class="custom1">
                <h6>Tree Type</h6>
                <select name="growth" class="conditionsDrpDown">
                    <option value="">Please Select</option>
                    <?php foreach($trees as $trees){ ?>
                    <option name="treeType"><?php echo htmlspecialchars($trees['category']); ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="">
                <label>Quantity</label>
                <input type="text" value="quantity" >
            </div>
            <!--Submit button/ -->
            <div class="button-wrapper left">
                <span class="find-plant-btn-wrapper">
                <input type="submit" value="submit"></span>
                
            </div>
        </form>
    </div>
</body>

</html>
