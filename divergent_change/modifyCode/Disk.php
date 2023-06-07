<?php
    class Disk {
        private $configuration;

        function __construct(DiskConfiguration $configuration) {
            $this->configuration = $configuration;
        }

        function getUsed() {
            // return used in megabytes;
        }

        function createPartition($name, $size) {
            // logic to create a partition
        }

        function formatPartition($partitionId) {
            // do the format
        }

        function checkWorkingStatus() {
            // check disk is working
        }

       
    }

?>