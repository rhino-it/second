<?php
session_start();
if (!isset($_SESSION['ex_lg'])) {
    $_SESSION['ex_lg'] = 'ru';
}

//defined('BASEPATH') OR exit('No direct script access allowed');

class Language extends CI_Controller {

    public function index($lg='kg')
	{
            
            if ($lg=='kg' || $lg=='ru' || $lg=='en' || $lg=='tr') $_SESSION['ex_lg'] = $lg; else $_SESSION['ex_lg'] = 'ru';
            header('Location: '.$_SESSION['url']);
            exit;
        }        

            
   
}
