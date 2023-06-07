<?php

class Train {
    private $registrationNumber;
    private $merchanse;
    private $routes;
    private $willArriveTo;
    private $justLeft;

    function __construct($registrationNumber, $merchanse, Route $routes) {
        $this->registrationNumber = $registrationNumber;
        $this->merchanse = $merchanse;
        $this->routes = $routes;
    }

    function startStrip($dateAndTime) {
        $this->justLeft = $this->route->getFirstStation();
        $this->willArriveTo = $this->route->getNextStation($this->justLeft);
        // set date in time in database
    }

    function finishStrip($dateAndTime) {
        // set date in time in database
    }

    function setPassedNextStation() {
        $this->justLeft = $this->willArriveTo;
        $this->willArriveTo = $this->route->getNextStation($this->justLeft);
    }
}

?>