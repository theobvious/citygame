<?php
require_once 'BuildingModel.php';

Class ShowBuilding {
    private $buildingArray;

    function __CONSTRUCT($buildingArray) {
        $this->buildingArray = $buildingArray;
    }

    function getBuilding() {
        $newBuilding = new Building($this->buildingArray);
        $displayArray = array(
            $newBuilding->getName(), 
            $newBuilding->getLevel(), 
            $newBuilding->getTimber(), 
            $newBuilding->getGold()
        );
        return $displayArray;
    }

    function displayBuilding() {
        $display = $this->getBuilding();
        foreach($display as $value) {
            echo $value . '<br/>';
        }
    }
}

?>