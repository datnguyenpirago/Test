<?php

class Train {
    private $registrationNumber;
    private $merchanse;
    private $enRouteStations = ['HANOI', 'HAIPHONG', 'QUANGBINH', 'DONG HOI'];
    private $willArriveTo;
    private $justLeft;

    function __construct($registrationNumber, $merchanse) {
        $this->registrationNumber = $registrationNumber;
        $this->merchanse = $merchanse;
    }

    function startStrip($dateAndTime) {
        $this->justLeft = $this->enRouteStations[0];
        $this->willArriveTo = $this->enRouteStations[1];
        // set date in time in database
    }

    function finishStrip($dateAndTime) {
        // set date in time in database
    }

    function setPassedNextStation() {
        $this->justLeft = $this->willArriveTo;
        $this->willArriveTo = $this->enRouteStations[
            array_search($this->justLeft, $this->enRouteStations) + 1
        ];
    }

    // some functions here
}

?>