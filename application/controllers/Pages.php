<?php

session_start();
if (isset($_SESSION['language'])!=true) $_SESSION['language'] = 'russian';

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index($id=0)
	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$data['main_menu'] = $this->Get_model->md_menu(1);
		$data['main_page_news'] = $this->Get_model->main_page_news();
		$data['uslugi'] = $this->Get_model->uslugi();
		
		$this->load->view('header_view',$data);
		$this->load->view('slider_view');
		$this->load->view('news_view');
		$this->load->view('middle_view',$data);
		$this->load->view('about_view');
		$this->load->view('footer_view');
	}
	public function results($id=0)
	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$data['main_menu'] = $this->Get_model->md_menu(1);
		$this->load->view('header_view',$data);
		$this->load->view('results_view');
		$this->load->view('footer_view');
	}
	public function uzi($id=0)
	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$data['main_menu'] = $this->Get_model->md_menu(1);
		$this->load->view('header_view',$data);
		$this->load->view('uzi_view');
		$this->load->view('footer_view');
	}
	public function phizio($id=0)
	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$data['main_menu'] = $this->Get_model->md_menu(1);
		$this->load->view('header_view',$data);
		$this->load->view('phizio_view');
		$this->load->view('footer_view');
	}
	public function schedule($id=0)
	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$data['main_menu'] = $this->Get_model->md_menu(1);
		$this->load->view('header_view',$data);
		$this->load->view('schedule_view');
		$this->load->view('footer_view');
	}
	public function recipes($id=0)
	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$data['main_menu'] = $this->Get_model->md_menu(1);
		$this->load->view('header_view',$data);
		$this->load->view('recipes_view');
		$this->load->view('footer_view');
	}

	public function staff($id=0)
	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$data['main_menu'] = $this->Get_model->md_menu(1);
		$this->load->view('header_view',$data);
		$this->load->view('staff_view');
		$this->load->view('footer_view');
	}
	public function doctor($id=0)
	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$data['main_menu'] = $this->Get_model->md_menu(1);
		$this->load->view('header_view',$data);
		$this->load->view('doctor_view');
		$this->load->view('footer_view');
	}
	public function page($id=0)
	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$data['main_menu'] = $this->Get_model->md_menu(1);
		$data['inf'] = $this->Get_model->inf($id);
		$this->load->view('header_view',$data);
		$this->load->view('content_view');
		$this->load->view('footer_view');
	}
	public function arhiv($id=0)
	{
		$this->load->model('Get_model');
		$data['main_menu'] = $this->Get_model->md_menu(1);

		$config['base_url'] = '/pages/arhiv/';
		$config['total_rows'] = $this->db->count_all('ex_page');
		$config['url_segment'] = 3;
		$config['per_page'] = 6;
		$config['num_links'] = 2;

		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';

		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';

		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';

		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['first_link'] = 'Первая';
		$config['last_link'] = 'Последняя';

		$this->pagination->initialize($config);
		$data['arhiv'] = $this->Get_model->arhiv($config['per_page'],$this->uri->segment(3));

		$this->load->view('head_view');
		$this->load->view('header_view',$data);
		$this->load->view('arhiv_view',$data);
		$this->load->view('footer_view');
	}
	public function uslugi_detail($id=0)
	{
		$this->load->model('Get_model');
		$data['uslugi_detail'] = $this->Get_model->uslugi_detail($id);

		$this->load->view('head_view');
		$this->load->view('uzi_view',$data);
		$this->load->view('footer_view');
	}
}	