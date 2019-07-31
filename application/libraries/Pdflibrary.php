<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdflibrary {

    function __construct() {
        include_once APPPATH . '/third_party/fpdf/fpdf.php';
    }
}
?>