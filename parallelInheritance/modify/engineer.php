
<?php

interface engineer {
    public function getType();

    public function getSalary();

    public function getMileStone(): MileStone;

    public function setMileStone(MileStone $mileStone);

    public function work();
    
    public function target();
}
?>
