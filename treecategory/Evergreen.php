<!DOCTYPE html>
<html>
<body>

<h1>Conifer</h1>

<div class="container-list">
 
    <img src="ABIES KOREANA.jpg" alt="<ABIES KOREANA.jpg"style="width:300px;height:400px;" >
    <div class="tree-list-name"><?php echo "ABIES KOREANA"; ?></div>
    <div class="tree-list-Genus"><?php echo "Conifer"; ?></div>
    <div class="tree-list-conditions"><span id="ideal">Ideal</span> Conditions: <?php echo "Heat/Drought tolerant"; ?></div>
    <div class="tree-list-soil">Soil: <?php echo "Sandy"; ?></div>
    <div class="tree-list-root">Price: <?php echo "15$"; ?></div>
    <div class="tree-list-size">Size: <?php echo "2m - 10m"; ?></div>
    <div class="tree-list-info"><a href="<?php echo $row_rs_trees_list['more_info']; ?>" target="new">More info <span style="vertical-align: middle;" class="icon-mail-forward"></span></a></div>
    
  
  </div>

</body>
</html>