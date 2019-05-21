<?php

    //connect to database
    $conn = mysqli_connect('localhost','kmor613','ravinX57','plantatree');
        
    //check connection
    if(!$conn){
        echo 'connction error' . mysqli_my_connect_error();
    }
?>

<!DOCTYPE html>

<html>

<head>
    <title>User Story 11</title>
</head>

<body>
    <!-- Top Navigation Bar -->
    <div class="nav-wrapper">
        <div class="nav-container">
            <div class="nav">
                <ul aria-haspopup="true" class="cmsNav1 menuStyle10">
                    <li data-id="1"><a href="Buy_Plants_main.php" aria-haspopup="false">Buy Plants </a></li>
                    <li data-id="2"><a href="acessories.php" aria-haspopup="false">Accessories</a></li>
                    <li data-id="3"><a href="Category_main.php" aria-haspopup="false">Categories</a></li>
                    <li data-id="4"></li>
                    <li data-id="8"><a href="javascript:;" aria-haspopup="true">About Us</a>
                        <ul class="menuStyle9"></ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--Drop downs for Treetype, Age, Height -->
    <div>
        <label>Tree Type</label>
        <select name=treeType>
            <option value="option1">Option1</option>
        </select>
    </div>
    <div>
        <label>Age</label>
        <select name=age>
            <option value="option1">Option1</option>
        </select>
    </div>
    <div>
        <label>Height</label>
        <select name=height>
            <option value="option1">Option1</option>
        </select>
    </div>

    <div>
        <label>Quantity</label>
        <input type=text value="quantity">
    </div>
    <!--Submit button/ -->
    <input type="submit">
    </form>

    <!--need to calc & echo the price-->

</body>

</html>
