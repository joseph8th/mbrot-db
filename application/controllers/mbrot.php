<?php

/**
 * Controller for Mandelbrot database viewer.
 */
class Mbrot extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('mbrot_model');
  }


  /**
   * List all the databases (levels) in the directory
   */
  public function index()
  {
    $data['title'] = 'Available Levels';
    $data['levels'] = directory_map(APPPATH.'db');

    $this->load->view('templates/header', $data);
    $this->load->view('mbrot/index', $data);
    $this->load->view('templates/footer');
  }


  /**
   * View data for given level
   */
  public function level($dbgrp=FALSE)
  {
    if ( $dbgrp === FALSE ) {
      $level = $this->input->post('levels');
      $dbgrp = 'dataL'.$level;
    }

    $data['level'] = $dbgrp;
    $data['tiles'] = $this->mbrot_model->get_level($dbgrp);

    $data['title'] = "Viewing Level '".$dbgrp."'";

    $this->load->view('templates/header', $data);
    $this->load->view('mbrot/viewlevel', $data);
    $this->load->view('templates/footer');
  }


  /**
   * View data for given level/tile combo
   */
  public function tile($dbgrp, $tile_id)
  {
    $data['level'] = $dbgrp;
    $data['tile'] = $this->mbrot_model->get_level($dbgrp, $tile_id);

    // Using _SESSION variables for dynamic generated image
    session_start();
   
    // Make sure it's not a uniform tile
    if ($data['tile']['depth'] == -1) {
      $mbrot_data = json_decode(zlib_decode($data['tile']['data']));
      $_SESSION['uniform'] = 0;
      $_SESSION['maxdepth'] = $data['tile']['maxdepth'];
      $_SESSION['data'] = $mbrot_data;
    }
    else {
      $_SESSION['uniform'] = 1;
      $_SESSION['maxdepth'] = $data['tile']['maxdepth'];
      $_SESSION['data'] = $data['tile']['depth'];
    }

    $data['title'] = "Viewing Tile '".$tile_id."' of Level '".$dbgrp."'";

    $this->load->view('templates/header', $data);
    $this->load->view('mbrot/viewtile', $data);
    $this->load->view('templates/footer');
  }

//end class
} 

/* application/mbrot.php */