<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Plagin extends CI_Controller {

    public function index() {
        $this->load->model('plagin/Plagin_model');
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'adminex/plagin/index/';
        $config['total_rows'] = $this->db->count_all('ex_vak_archive'); // ex_page таблицасында канча жазуу бар
        $config['url_segment'] = 3;
        $config['per_page'] = 7;
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


        $data_select['ex_vak_archive'] = $this->Plagin_model->pagination_pages($config['per_page'], $this->uri->segment(3));


        if (isset($_SESSION['ex_id_user']) == false || $_SESSION['ex_id_user'] == 0)
            header('Location: ' . base_url('adminex'));

        $_SESSION['url'] = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $this->lang->load('content', $lang = $_SESSION['ex_lg']);
        $data_select['ex_lg_Exit'] = $this->lang->line('ex_lg_Exit');
        $this->load->model('Select_model');
        $data_select['ex_type_page'] = $this->Select_model->type_page();
        $data_select['ex_news_tema'] = $this->Select_model->news_tema();
        $data_select['ex_file'] = $this->Select_model->file_photo();

        $data_select['ex_menu1'] = 'm50';
        $data_select['ex_menu2'] = 'm51';
        $this->load->view('adminex/head_view');
        $this->load->view('adminex/header_view', $data_select);
        $this->load->view('adminex/menu_view', $data_select);

        

        // Плагин  Архив год начало
        //$data_select['pl_year'] = $this->Plagin_model->pl_main();
        $this->load->view('plagin/year_view', $data_select); 
        // Плагин  Архив год конец



        $this->load->view('adminex/footer_view');
    }

    public function add() {
     if (isset($_SESSION['ex_id_user']) == false || $_SESSION['ex_id_user'] == 0)
        header('Location: ' . base_url('adminex'));

    $_SESSION['url'] = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $this->lang->load('content', $lang = $_SESSION['ex_lg']);
    $data_select['ex_lg_Exit'] = $this->lang->line('ex_lg_Exit');
    $this->load->model('Select_model');
    $data_select['ex_type_page'] = $this->Select_model->type_page();
    $data_select['ex_news_tema'] = $this->Select_model->news_tema();
    $data_select['ex_file'] = $this->Select_model->file_photo();

    $data_select['ex_menu1'] = 'm50';
    $data_select['ex_menu2'] = 'm51';
    $this->load->view('adminex/head_view');
    $this->load->view('adminex/header_view', $data_select);
    $this->load->view('adminex/menu_view', $data_select);



        // Плагин  Архив выпуск начало
    $this->load->model('plagin/Plagin_model');
         // $data_select['pl_add'] = $this->Get_model->pl_add();
    $data_select['pl_year'] = $this->Plagin_model->pl_year();
    $data_select['pl_edition'] = $this->Plagin_model->pl_edition();
    $data_select['pl_science'] = $this->Plagin_model->pl_science();
    $data_select['pl_author'] = $this->Plagin_model->pl_author();
    $this->load->view('plagin/add_view',$data_select); 
        // Плагин  Архив выпуск конец

    $this->load->view('adminex/footer_view');
}

public function edit($id=0) {
 if (isset($_SESSION['ex_id_user']) == false || $_SESSION['ex_id_user'] == 0)
    header('Location: ' . base_url('adminex'));

$_SESSION['url'] = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$this->lang->load('content', $lang = $_SESSION['ex_lg']);
$data_select['ex_lg_Exit'] = $this->lang->line('ex_lg_Exit');
$this->load->model('Select_model');
$data_select['ex_type_page'] = $this->Select_model->type_page();
$data_select['ex_news_tema'] = $this->Select_model->news_tema();
$data_select['ex_file'] = $this->Select_model->file_photo();

$data_select['ex_menu1'] = 'm50';
$data_select['ex_menu2'] = 'm51';
$this->load->view('adminex/head_view');
$this->load->view('adminex/header_view', $data_select);
$this->load->view('adminex/menu_view', $data_select);



        // Плагин  Архив выпуск начало
$this->load->model('plagin/Plagin_model');
$data_select['pl_edit'] = $this->Plagin_model->pl_edit($id);
$data_select['pl_year'] = $this->Plagin_model->pl_year();
$data_select['pl_edition'] = $this->Plagin_model->pl_edition();
$data_select['pl_science'] = $this->Plagin_model->pl_science();
$data_select['pl_author'] = $this->Plagin_model->pl_author();
$this->load->view('plagin/edit_view',$data_select); 

        // Плагин  Архив выпуск конец

$this->load->view('adminex/footer_view');
}

public function add_to_base() {
    $this->load->model('plagin/Plagin_model');

    $data_add_to_base = array(
        'year' => $_POST['year'],
        'edition' => $_POST['edition'],
        'science' => $_POST['science'],
        'author' => $_POST['author'],
        'tema_ru' => $_POST['tema_ru'],
        'text_ru' => $_POST['text_ru'],
        'tema_kg' => $_POST['tema_kg'],
        'text_kg' => $_POST['text_kg'],
        'tema_en' => $_POST['tema_en'],
        'text_en' => $_POST['text_en'],
    );

    if (isset($_POST['submit_add_to_base'])) {
        if ($_FILES['file'] ['size']!=0) {
            date_default_timezone_set("Asia/Bishkek");
            $date=md5(date('Y-m-d-h-i-s'));
            $name=$date.".".'pdf';
            copy($_FILES["file"] ["tmp_name"], '../assets/pdf/'.$name);
            $data_add_to_base +=array('file' => $name);
        }
        $this->Plagin_model->add_to_base($data_add_to_base); 
    }
    if (isset($_POST['submit_edit_base'])) {

        if ($_FILES['file'] ['size']!=0) {
            date_default_timezone_set("Asia/Bishkek");
            $date=md5(date('Y-m-d-h-i-s'));
            $name=$date.".".'pdf';
            copy($_FILES["file"] ["tmp_name"], '../assets/pdf/'.$name);
            $data_add_to_base +=array('file' => $name);
            unlink('../assets/pdf/'.$_POST['file_name']);
        }

        $this->Plagin_model->edit_base($data_add_to_base,$_POST['id']); 
    }
    header('Location: ' . base_url('adminex/plagin'));
}




public function delete_base($id) {
    if (isset($_SESSION['ex_id_user']) == false || $_SESSION['ex_id_user'] == 0)
        header('Location: ' . base_url('adminex'));

    $_SESSION['url'] = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $this->lang->load('content', $lang = $_SESSION['ex_lg']);
    $data_select['ex_lg_Exit'] = $this->lang->line('ex_lg_Exit');
    $this->load->model('Select_model');
    $data_select['ex_type_page'] = $this->Select_model->type_page();
    $data_select['ex_news_tema'] = $this->Select_model->news_tema();
    $data_select['ex_file'] = $this->Select_model->file_photo();

    $data_select['ex_menu1'] = 'm50';
    $data_select['ex_menu2'] = 'm51';
    $this->load->view('adminex/head_view');
    $this->load->view('adminex/header_view', $data_select);
    $this->load->view('adminex/menu_view', $data_select);
    $data_select['id'] = $id;



        // Плагин  Архив год начало
    $this->load->model('plagin/Plagin_model');
    $data_select['pl_year'] = $this->Plagin_model->pl_main();
    $this->load->view('plagin/delete_view', $data_select); 
        // Плагин  Архив год конец



    $this->load->view('adminex/footer_view');
}

public function delete_statement() {
    if (  $_SESSION['right_answer']==$_POST['answer']) {
       $this->load->model('plagin/Plagin_model');
       $file_name = $this->Plagin_model->file_name($_POST['id']); 
       $this->Plagin_model->delete_base($_POST['id']);
       if ($file_name!='' AND file_exists('../assets/pdf/'.$file_name)){
          unlink('../assets/pdf/'.$file_name);
      } 
  }

  header('Location: ' . base_url('adminex/plagin'));
}


}
