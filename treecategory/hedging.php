<!DOCTYPE html>
<html>
<body>

<h1>Hedging</h1>
<style>
.container {
  position: relative;
}

.topleft {
  position: absolute;
  top: 8px;
  left: 16px;
  font-size: 18px;
}
.topright {
  position: absolute;
  top: 8px;
  right: 16px;
  font-size: 18px;
}
.center {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  font-size: 18px;
}
</style>
<div class="container">
    <div class="right">
 
    <img src="../images/Japanese Box Holly(1).jpg" alt="Japanese Box Holly" style="width:300px;height:400px;" >
    <div class="tree-list-name"><?php echo "Japanese Box Holly"; ?></div>
    <div class="tree-list-conditions"><span id="ideal">Ideal</span> Conditions: <?php echo "Full Sun"; ?></div>
    <div class="tree-list-soil">Soil: <?php echo "Basic (low accidity)"; ?></div>
    <div class="tree-list-root">Price: <?php echo "55$"; ?></div>
    <div class="tree-list-size">Size: <?php echo "0.5m - 1m"; ?></div>
    <div class="tree-list-info"><a href="<?php echo $row_rs_trees_list['more_info']; ?>" target="new">More info <span style="vertical-align: middle;" class="icon-mail-forward"></span></a></div>
    </div>
  
  </div>

</body>
</html>