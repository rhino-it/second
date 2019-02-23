<?php

session_start();
if (isset($_SESSION['language'])!=true) $_SESSION['language'] = 'russian';

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index($id=0)
	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('slider_view');
		$this->load->view('middle_view');
		$this->load->view('about_view');
		$this->load->view('footer_view');
	}
	public function results($id=0)
	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('results_view');
		$this->load->view('footer_view');
	}
	public function uzi($id=0)
	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('uzi_view');
		$this->load->view('footer_view');
	}
	public function phizio($id=0)
	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('phizio_view');
		$this->load->view('footer_view');
	}
	public function schedule($id=0)
	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('schedule_view');
		$this->load->view('footer_view');
	}
	public function recipes($id=0)
	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('recipes_view');
		$this->load->view('footer_view');
	}
}	