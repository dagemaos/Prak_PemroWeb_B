<?php
    class kubus {
        private $sisi;

        public function setSisi($option) {
            $this->sisi = $option;
            // akses properti dalam kelas memakai $this
        }

        public function getLuas() {
            $luas = 0;
            $luas = 6 * pow($this->sisi, 2);
            return $luas;
        }

        public function getVolume() {
            
        }
    }
?>