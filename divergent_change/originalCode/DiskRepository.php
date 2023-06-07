<?php
    class DiskRepository {
        function addNewDisk(DiskConfiguration $conf) {
            $newDisk = new Disk($conf);
            $this->applyChangesToSystem($newDisk);
        }

        function getAllDisks() {
            return $this->runCommandOnSystemToListAllDisks();
        }

        private function applyChangesToSystem($newDisk) {
            // some logic to apply changes
        }

        private function getAllSharesOnTheSystem() {
            $nfsShares = [];
            $cifShares = [];
            $afpShares = [];

            foreach ($this->getAllDisks() as $disk) {
                $nfsShares = array_merge($nfsShares, $disk->findAllNfsShares());
                $cifShares = array_merge($cifShares, $disk->findAllCifShares());
                $afpShares = array_merge($afpShares, $disk->findAllAfpShares());
            }

            return array_merge($nfsShares, $cifShares, $afpShares);
        }


    }

?>