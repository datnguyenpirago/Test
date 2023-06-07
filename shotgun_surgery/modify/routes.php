<?php

class Route {
    private $stations = ['HANOI', 'HAIPHONG', 'QUANGBINH', 'DONG HOI'];
    private $merchendiseTypesAndPlaces = [
        'gạch' => ['HANOI', 'HAIPHONG'],
        'đá' => ['QUANGBINH', 'DONG HOI'],
    ];

    public function getStationById($stationId) {
        return $this->stations[$stationId];
    }

    public function getFirstStation() {
        return $this->stations[0];
    }

    public function getNextStation($stationLeft) {
        return  $this->stations[array_search($stationLeft, $this->stations) + 1];
    }
}

?>