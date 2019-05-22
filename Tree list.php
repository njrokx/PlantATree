<?php
    //connect to db
//    include('config/db_connect.php');
//        
//    $sql = 'SELECT * FROM tree_info ORDER BY category';
//
//    $result = mysqli_query($conn, $sql);
//
//    $trees = mysqli_fetch_all($result, MYSQLI_ASSOC);
//
//    //free result from memory
//    mysqli_free_result($result);
//
//    //close connection
//    mysqli_close($conn);

    $conn_string = "host=ec2-54-225-72-238.compute-1.amazonaws.com port=5432 dbname=dd6mqv3gs2odmu user=fyfjbkmagcjdqy password=1c408f7c3644b0db91d4c3f70ed00eae5cd328dd7d8eab2e6a5f9cd08e1d9abb";
    $conn = pg_connect($conn_string);

    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }
    echo 'test';
    $sql = 'SELECT * FROM tree_info';
    $result = pg_query($conn, $sql);

    $trees = pg_fetch_all($result, MYSQL_ASSOC);
    echo $trees;

    pg_free_result($result);

    pg_close($connn);
    //echo '<img src="images/pink_abelia_preview.jpg" />'
?>

<!DOCTYPE html>
<html>
    <h4 class="center gray-text">Tree list</h4>
    
    <div class="container">
        <div class="row">
        <?php foreach($trees as $trees){ ?>
            
            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card content center">
                        <img src="<?php echo htmlspecialchars($trees['img_prev'])?>" alt="">
                        
                        <h5>Tree Name: <?php echo htmlspecialchars($trees['name']); ?></h5>
                        <h5>Category: <?php echo htmlspecialchars($trees['category']);?></h5>
                        <h5>Soil Drainage Condition: <?php echo htmlspecialchars($trees['soil_drainage']);?></h5>
                        <h5>Sunlight Condition: <?php echo htmlspecialchars($trees['sun']);?></h5>
                        <h5>Maintainence Requirements: <?php echo htmlspecialchars($trees['maint_req']);?></h5>
                        <h5>Max Height of Mature Tree: <?php echo htmlspecialchars($trees['max_height']);?></h5>
                        <h5>Growth Rate: <?php echo htmlspecialchars($trees['growth_rate']);?></h5>
                        <h5>Price: $<?php echo htmlspecialchars($trees['price']);?></h5>
                    </div>
                    <div class="card-action right-align">
                        <a class="brand-text" href="#">more info</a>
                    </div>
                </div>
            
            </div>
            
            <?php } ?>
        </div>
    
    
    </div>

</html>