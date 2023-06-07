<?php

class Schedule {
    private $stations = ['HANOI', 'HAIPHONG', 'QUANGBINH', 'DONG HOI'];
    private $arrivingTrains = [];
    private $departingTrains = [];

   function addArriving(Train $train, $stationId) {
        $this->arrivingTrains[] = [$this->stations[$stationId] => $train];
   }
}

?>