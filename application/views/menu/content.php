<?php
ini_set("display_errors",1);
$this->load->view('menu/header');
$this->load->view($page);
$this->load->view('menu/footer');