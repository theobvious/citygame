<?php

Class Building {

    private $name;
    private $level;
    private $timber;
    private $gold;

    function __CONSTRUCT($paramsArray) {
        $this->name = $paramsArray['name'];
        $this->level = $paramsArray['level'];
        $this->timber = $paramsArray['timber'];
        $this->gold = $paramsArray['gold'];
    }

    function getName() {
        return $this->name;
    }
    function getLevel() {
        return $this->level;
    }
    function getTimber() {
        return $this->timber;
    }
    function getGold() {
        return $this->gold;
    }   
}

//Class Complete extends Building {
  //  private $completion = "Done!";

    //function complete() {
      //  return $completion;
    //}
//}

?>