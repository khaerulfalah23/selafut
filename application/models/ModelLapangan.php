<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelLapangan extends CI_Model
{
    public function getDataLapangan($lapangan)
    {
        return $this->db->get($lapangan);
    }
}