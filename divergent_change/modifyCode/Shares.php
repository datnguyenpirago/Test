<?php
    class Shares {
        public $disk;

        public function __construct(Disk $disk) {
            $this->disk = $disk;
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