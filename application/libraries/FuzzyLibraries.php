<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class FuzzyLibraries
    {
        /**
         * Fungsi linear turun
         * Mencari nilai fuzzy pada diagram linear turun
         * @param input
         * @param batas2
         * @param batas3
         */
        public function linear_turun($input, $batas2, $batas3)
        {
            return ($batas3 - $input)/($batas3 - $batas2);
        }

        /**
         * Fungsi Linear naik
         * Mencari nilai fuzzy pada diagram linear naik.
         * @param input
         * @param batas2
         * @param batas3
         */
        public function linear_naik($input, $batas2, $batas3)
        {
            return ($input - $batas2) / ($batas3 - $batas2);
        }
    }
    
?>