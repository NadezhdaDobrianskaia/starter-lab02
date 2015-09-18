<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Gallery
 *
 * @author Nadia
 */
class Gallery extends CI_Controller{
    /**
     * Gallery Page for this controller.
     */
    public function index()
    {
	$this->load->view('gallery');
    }
}
