<?php

class Mbrot_model extends CI_Model {

  public function get_level($dbgrp, $tile_id=FALSE)
  {
    $db = $this->load->database($dbgrp, TRUE);

    if ($tile_id === FALSE) {
      $query = $db->get('maps');
      return $query->result_array();
    }

    $query = $db->get_where('maps', array('id' => $tile_id));
    return $query->row_array();
  }

}