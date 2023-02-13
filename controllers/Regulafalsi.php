<?php

Class Regulafalsi extends MX_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
		
		$this->template->load('template','regulafalsi/list');	
    }
	
	}