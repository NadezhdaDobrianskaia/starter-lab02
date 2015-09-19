<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of About
 *
 * @author Nadia
 */
class About extends Application {
    /**
     * About Page for this controller.
     */
    public function index()
    {
	$this->data['page_tittle'] = 'About This Gallery';
	$this->data['pagebody'] = 'about';
        $this->render();
    }
}
