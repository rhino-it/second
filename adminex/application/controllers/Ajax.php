<?php

session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

    public function index() {

        $this->load->view('adminex/user_view');
    }

    public function file_photo($lis = 0) {
        if (isset($_SESSION['ex_id_user']) == false || $_SESSION['ex_id_user'] == 0)
            header('Location: ' . base_url('adminex'));
        $_SESSION['url'] = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $this->lang->load('content', $lang = $_SESSION['ex_lg']);
        $data_select['ex_lg_Exit'] = $this->lang->line('ex_lg_Exit');

        $this->load->model('Select_model');
        $data_select['ex_lis'] = $lis;
        $data_select['ex_file'] = $this->Select_model->file_photo_aj($lis);

        $this->load->view('adminex/ajax/ex_photo_view', $data_select);
    }

    public function file_document($lis = 0) {
        if (isset($_SESSION['ex_id_user']) == false || $_SESSION['ex_id_user'] == 0)
            header('Location: ' . base_url('adminex'));
        $_SESSION['url'] = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $this->lang->load('content', $lang = $_SESSION['ex_lg']);
        $data_select['ex_lg_Exit'] = $this->lang->line('ex_lg_Exit');

        $this->load->model('Select_model');
        $data_select['ex_lis2'] = $lis;
        $data_select['ex_file2'] = $this->Select_model->file_doc_aj($lis);

        $this->load->view('adminex/ajax/ex_document_view', $data_select);
    }

}
