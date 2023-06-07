<?php

class Schedule {
    private $arrivingTrains = [];
    private $departingTrains = [];
    private $route;

    public function __construct(Route $route) {
     $this->route = $route;
    }

   function addArriving(Train $train, $stationId) {
        $this->arrivingTrains[] = [
          $this->route->getStationById($stationId) => $train
        ];
   }
}

?>