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

        function addNFSShareOnFolder($folderName) {
            // Create a NFS share for a folder
        }

        function findAllNFShares() {
            // find all NFS shares for this disk
        }

        function addAFPShareOnFolder($folderName) {
            // Create a NFS share for a folder
        }

        function findAllAFPShare() {
            // find all NFS shares for this disk
        }

        function addCIFSareOnFolder($folderName) {
            // Create a NFS share for a folder
        }

        function findAllCIFShares() {
            // find all NFS shares for this disk
        }
    }

?>