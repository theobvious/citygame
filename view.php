
<?php

require_once 'controller.php';

$allBuildings = array(
    array('name'=>'Farm', 'level'=>'level 8', 'timber'=>'100 timber', 'gold'=>'200 gold'),
    array('name'=>'Church', 'level'=>'level 8', 'timber'=>'300 timber', 'gold'=>'600 gold'),
    array('name'=>'Shop', 'level'=>'level 8', 'timber'=>'50 timber', 'gold'=>'100 gold')
);

foreach ($allBuildings as $value) {
    $build = new ShowBuilding($value);
    $show = $build->DisplayBuilding();
    echo '<br/><br/>';
}

?>
