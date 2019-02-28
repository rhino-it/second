<?php

session_start();
if (!isset($_SESSION['ex_lg'])) {
    $_SESSION['ex_lg'] = 'ru';
}

defined('BASEPATH') OR exit('No direct script access allowed');

class Adminex extends CI_Controller {

    public function index() {
        if (isset($_POST['ex_login']) == false)
            $this->load->view('adminex/user_view');
        else {
            $this->load->model('Select_model');
            $data_select['ex_user'] = $this->Select_model->user_db($_POST['ex_login'], $_POST['ex_password']);
            $k = 0;
            foreach ($data_select['ex_user'] as $item) {
                $k = 1;
                $_SESSION['ex_lg'] = $_POST['ex_lg'];
                $_SESSION['ex_fio'] = $item['fio'];
                $_SESSION['ex_tel'] = $item['tel'];
                foreach ($this->Select_model->type_user($item['type_user']) as $item2) {
                    $_SESSION['ex_user_rol'] = $item2['name_' . $_SESSION['ex_lg']];
                }

                $_SESSION['ex_id_user'] = $item['id'];
                $_SESSION['ex_user'] = $item['login'] . '(' . $item['tel'] . ')';
                $_SESSION['ex_type_user'] = $item['type_user'];
                header('Location: ' . base_url('adminex/adminex/page/'));
            }
            if ($k == 0)
                header('Location: ' . base_url('adminex/adminex'));
        }
    }

    public function quit() {

        session_unset('ex_lg');
        session_unset('ex_id_user');
        session_unset('ex_user');
        session_unset('ex_type_user');
        $_SESSION['ex_id_user']=0;
        header('Location: ' . base_url('adminex'));
    }

    public function page() {
        if (isset($_SESSION['ex_id_user']) == false || $_SESSION['ex_id_user'] == 0)
            header('Location: ' . base_url('adminex'));

        $_SESSION['ex_check_a'] = rand(2, 9);
        $_SESSION['ex_check_b'] = rand(2, 9);

        $_SESSION['url'] = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $this->lang->load('content', $lang = 'en');
        $data_select['ex_lg_Exit'] = $this->lang->line('ex_lg_Exit');


        $this->load->model('Select_model');

        if (isset($_POST['exf_text'])) {
            $data_exf = array(
                'id_type_page' => $_POST['exf_type_page'],
                'user' => $_SESSION['ex_user'],
                'id_user' => $_SESSION['ex_id_user'],
                'address' => $_POST['exf_address'],
                'vrem_ot' => $_POST['exf_vrem_ot'],
                'vrem_do' => $_POST['exf_vrem_do'],
                'foto' => $_POST['exf_glav_photo'],
                'foto_thumb' => $_POST['exf_glav_photo_thumb'],
                'video' => $_POST['exf_video_url'],
                'audio' => $_POST['exf_audio_url'],
                'url' => $_POST['exf_url'],
                'id_page_tema' => $_POST['exf_page_tema'],
                'gallery_thumb' => $_POST['img_item_th_array'],
                'gallery' => $_POST['img_item_array'],
                'vrem' => date("Y-m-d H:i:s"),
            );



            if (isset($_POST['exf_add'])) {
                $data_exf += array('page_text_kg' => $_POST['exf_text'], 'page_text_ru' => $_POST['exf_text'], 'page_text_en' => $_POST['exf_text']);
                $data_exf += array('tema_kg' => $_POST['exf_tema'], 'tema_ru' => $_POST['exf_tema'], 'tema_en' => $_POST['exf_tema']);
                $this->db->insert('ex_page', $data_exf);
            }

            if (isset($_POST['exf_edit']) && $_POST['exf_edit'] == $_SESSION['id_page']) {
                $data_exf += array('page_text_' . $_SESSION['ex_lg'] => $_POST['exf_text']);
                $data_exf += array('tema_' . $_SESSION['ex_lg'] => $_POST['exf_tema']);
                $this->Select_model->edit_page($_POST['exf_edit'], $data_exf);
            }
        }

        if (isset($_POST['exf_summ']) && $_POST['exf_summ'] == $_SESSION['ex_check']) {
            //$this->db->where('id_parent', $_POST['exf_id']);
            //$this->db->from('ex_menu');
            //if ($this->db->count_all_results() == 0)
            $this->db->delete('ex_page', array('id' => $_POST['exf_id']));
            //else
            //$data_select['ex_error'] = 'Не могу удалить меню.';
        }

        $config['base_url'] = base_url() . 'adminex/adminex/page/';
        $config['total_rows'] = $this->db->count_all('ex_page'); // ex_page таблицасында канча жазуу бар
        $config['url_segment'] = 3;
        $config['per_page'] = 10;
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


        $data_select['ex_pages'] = $this->Select_model->pagination_pages($config['per_page'], $this->uri->segment(3));
        $data_select['ex_type_page'] = $this->Select_model->type_page();


        $data_select['k'] = 'Салам';
        $data_select['ex_menu1'] = 'm20';
        $data_select['ex_menu2'] = 'm21';
        $this->load->view('adminex/head_view');
        $this->load->view('adminex/header_view', $data_select);
        $this->load->view('adminex/menu_view', $data_select);
        $this->load->view('adminex/ex_page_view', $data_select);
        $this->load->view('adminex/footer_view');
    }

    public function page_add() {
        if (isset($_SESSION['ex_id_user']) == false || $_SESSION['ex_id_user'] == 0)
            header('Location: ' . base_url('adminex'));

        $_SESSION['url'] = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $this->lang->load('content', $lang = $_SESSION['ex_lg']);
        $data_select['ex_lg_Exit'] = $this->lang->line('ex_lg_Exit');

        $this->load->model('Select_model');
        $data_select['ex_type_page'] = $this->Select_model->type_page();
        $data_select['ex_news_tema'] = $this->Select_model->news_tema();

        $data_select['ex_file'] = $this->Select_model->file_photo();

        $data_select['ex_menu1'] = 'm20';
        $data_select['ex_menu2'] = 'm22';
        $this->load->view('adminex/head_view');
        $this->load->view('adminex/header_view', $data_select);
        $this->load->view('adminex/menu_view', $data_select);
        $this->load->view('adminex/ex_page_add_view', $data_select);
        $this->load->view('adminex/footer_view');
    }

    public function page_edit($id = 0) {
        if (isset($_SESSION['ex_id_user']) == false || $_SESSION['ex_id_user'] == 0)
            header('Location: ' . base_url('adminex'));

        $_SESSION['url'] = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $this->lang->load('content', $lang = $_SESSION['ex_lg']);
        $data_select['ex_lg_Exit'] = $this->lang->line('ex_lg_Exit');

        $this->load->model('Select_model');
        $data_select['ex_type_page'] = $this->Select_model->type_page();
        $data_select['ex_page'] = $this->Select_model->pages($id);
        $data_select['ex_file'] = $this->Select_model->file_photo();
        $data_select['ex_file_page'] = $this->Select_model->file_page($id);
        $data_select['ex_news_tema'] = $this->Select_model->news_tema();

        $data_select['ex_menu1'] = 'm20';
        $data_select['ex_menu2'] = 'm21';
        $this->load->view('adminex/head_view');
        $this->load->view('adminex/header_view', $data_select);
        $this->load->view('adminex/menu_view', $data_select);
        $this->load->view('adminex/ex_page_edit_view', $data_select);
        $this->load->view('adminex/footer_view');
    }

    public function page_delete($id = 0, $summa = 0) {
        if (isset($_SESSION['ex_id_user']) == false || $_SESSION['ex_id_user'] == 0)
            header('Location: ' . base_url('adminex'));

        $this->lang->load('content', $lang = $_SESSION['ex_lg']);
        $data_select['ex_lg_Exit'] = $this->lang->line('ex_lg_Exit');

        //$this->load->model('Select_model');
        //$data_select['ex_type_page'] = $this->Select_model->type_page();
        //$data_select['ex_page'] = $this->Select_model->pages(0,$id);
        $data_select['id'] = $id;
        $data_select['ex_menu1'] = 'm20';
        $data_select['ex_menu2'] = 'm21';
        $this->load->view('adminex/head_view');
        $this->load->view('adminex/header_view', $data_select);
        $this->load->view('adminex/menu_view', $data_select);
        $this->load->view('adminex/ex_delete_view', $data_select);
        $this->load->view('adminex/footer_view');
    }

    public function menu($id_parent = 0) {
        if (isset($_SESSION['ex_id_user']) == false || $_SESSION['ex_id_user'] == 0)
            header('Location: ' . base_url('adminex'));
        $_SESSION['ex_check_a'] = rand(2, 9);
        $_SESSION['ex_check_b'] = rand(2, 9);

        $_SESSION['url'] = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $this->lang->load('content', $lang = $_SESSION['ex_lg']);
        $data_select['ex_lg_Exit'] = $this->lang->line('ex_lg_Exit');

        $this->load->model('Select_model');
        $data_select['ex_menu1'] = 'm10';
        $data_select['ex_menu2'] = 'm11';
        $data_select['ex_error'] = '';
        $data_select['ex_id_parent'] = $id_parent;

        if (isset($_POST['exf_menu_text'])) {
            $data_exf = array(
                'id_parent' => $_POST['exf_id_parent'],
                'name_kg' => $_POST['exf_menu_text'], 'name_ru' => $_POST['exf_menu_text'], 'name_en' => $_POST['exf_menu_text'],
                'id_page' => $_POST['exf_page'],
                'url' => $_POST['exf_url'],
                'sort' => $_POST['exf_sort'],
                'target' => $_POST['exf_target']
            );
            $this->db->insert('ex_menu', $data_exf);
        }

        if (isset($_POST['exf_menu_edit'])) {
            $data_exf = array(
                'name_' . $_SESSION['ex_lg'] => $_POST['exf_menu_edit'],
                'id_page' => $_POST['exf_page'],
                'url' => $_POST['exf_url'],
                'sort' => $_POST['exf_sort'],
                'target' => $_POST['exf_target']
            );
            $this->Select_model->edit_menu($_POST['exf_id_edit'], $data_exf);
        }

        if (isset($_POST['exf_summ']) && $_POST['exf_summ'] == $_SESSION['ex_check']) {
            $this->db->where('id_parent', $_POST['exf_id']);
            $this->db->from('ex_menu');
            if ($this->db->count_all_results() == 0)
                $this->db->delete('ex_menu', array('id' => $_POST['exf_id']));
            else
                $data_select['ex_error'] = 'Не могу удалить меню.';
        }


        $data_select['ex_menu'] = $this->Select_model->menu($id_parent);
        $data_select['ex_menu_name'] = $this->Select_model->menu_name($id_parent);
        $data_select['ex_pages'] = $this->Select_model->pages(0, 2);
        $this->load->view('adminex/head_view');
        $this->load->view('adminex/header_view', $data_select);
        $this->load->view('adminex/menu_view', $data_select);
        $this->load->view('adminex/ex_menu_view', $data_select);
        $this->load->view('adminex/footer_view');
    }

    public function menu_edit($id = 0) {
        if (isset($_SESSION['ex_id_user']) == false || $_SESSION['ex_id_user'] == 0)
            header('Location: ' . base_url('adminex'));
        $this->lang->load('content', $lang = $_SESSION['ex_lg']);
        $data_select['ex_lg_Exit'] = $this->lang->line('ex_lg_Exit');

        $this->load->model('Select_model');
        $data_select['ex_menu'] = $this->Select_model->menu_name($id);
        $data_select['ex_pages'] = $this->Select_model->pages(0, 2);

        $data_select['ex_menu1'] = 'm10';
        $data_select['ex_menu2'] = 'm11';
        $data_select['ex_id'] = $id;

        $this->load->view('adminex/head_view');
        $this->load->view('adminex/header_view', $data_select);
        $this->load->view('adminex/menu_view', $data_select);
        $this->load->view('adminex/ex_menu_edit_view', $data_select);
        $this->load->view('adminex/footer_view');
    }

    public function menu_delete($id = 0, $summa = 0) {
        if (isset($_SESSION['ex_id_user']) == false || $_SESSION['ex_id_user'] == 0)
            header('Location: ' . base_url('adminex'));
        $this->lang->load('content', $lang = $_SESSION['ex_lg']);
        $data_select['ex_lg_Exit'] = $this->lang->line('ex_lg_Exit');

        $data_select['id'] = $id;
        $data_select['ex_menu1'] = 'm10';
        $data_select['ex_menu2'] = 'm11';
        $this->load->view('adminex/head_view');
        $this->load->view('adminex/header_view', $data_select);
        $this->load->view('adminex/menu_view', $data_select);
        $this->load->view('adminex/ex_delete_view', $data_select);
        $this->load->view('adminex/footer_view');
    }

    public function files() {
        if (isset($_SESSION['ex_id_user']) == false || $_SESSION['ex_id_user'] == 0)
            header('Location: ' . base_url('adminex'));
        $_SESSION['url'] = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $this->lang->load('content', $lang = $_SESSION['ex_lg']);
        $data_select['ex_lg_Exit'] = $this->lang->line('ex_lg_Exit');

        //--  begin Пагинация
        //-- autoload.php
        //-- $autoload['libraries'] = array('database','pagination');
        $config['base_url'] = base_url() . '/adminex/files/'; // негизги URL шилтеме
        $config['total_rows'] = $this->db->count_all('ex_file'); // ex_page таблицасында канча жазуу бар
        $config['url_segment'] = 3;
        $config['per_page'] = 15;
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


        $this->load->model('Select_model');

        //--  end Пагинация

        $data_select['ex_menu1'] = 'm30';
        $data_select['ex_menu2'] = 'm31';
        $this->load->view('adminex/head2_view');
        $this->load->view('adminex/header_view', $data_select);
        $this->load->view('adminex/menu_view', $data_select);

        $data_select['ex_file'] = $this->Select_model->pagination_file($config['per_page'], $this->uri->segment(3));
        $this->load->view('adminex/ex_file_view', $data_select);
        $this->load->view('adminex/footer2_view');
    }

    public function files_copy() {
        if (isset($_SESSION['ex_id_user']) == false || $_SESSION['ex_id_user'] == 0)
            header('Location: ' . base_url('adminex'));

        $this->lang->load('content', $lang = $_SESSION['ex_lg']);
        $data_select['ex_lg_Exit'] = $this->lang->line('ex_lg_Exit');

        $this->load->model('Select_model');

        if (isset($_POST['download'])) {
            $log = FALSE;
            $f = substr(strrchr($_FILES["userfile"]["name"], '.'), 1);
            if ($f == 'doc' || $f == 'docx' || $f == 'pdf' || $f == 'ppt' || $f == 'pptx' || $f == 'xls' || $f == 'xlsx')
                $log = TRUE;
            if ($log == TRUE)
                $config['upload_path'] = '../assets/documents/';
            else
                $config['upload_path'] = '../assets/images/photos/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|doc|docx|pdf|ppt|pptx|xls|xlsx';
            $config['max_size'] = 3024;
            $config['encrypt_name'] = TRUE;
            $config['remove_spaces'] = TRUE;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile')) {

                $data_select['ex_inf'] = $this->upload->display_errors('<p style="color:red">', '</p>');
            } else {
                $data_select['ex_inf'] = "Файл успешно загружен.";

                //--  begin Базага жазуу
                $image_data = $this->upload->data();
                //-- begin Манипуляции С Изображениями
                if ($log != TRUE) {
                    $config2 = array(
                        'image_library' => 'gd2',
                        'source_image' => $image_data['full_path'],
                        'new_image' => APPPATH . '../../assets/images/photos/thumb',
                        'create_thumb' => TRUE,
                        'maintain_ratio' => TRUE,
                        'width' => 400,
                        'height' => 400
                    );
                    $this->load->library('image_lib', $config2);
                    $this->image_lib->resize();
                }
                //-- end Манипуляции С Изображениями

                $add_img['fail'] = $image_data['file_name'];
                if ($log == TRUE) {
                    $add_img['fail_thumb'] = strtolower($f) . '.jpg';
                } else {
                    $add_img['fail_thumb'] = $image_data['raw_name'] . '_thumb' . $image_data['file_ext'];
                }

                $add_img['id_user'] = $_SESSION['ex_id_user'];
                $add_img['type'] = $log;
                $add_img['name_kg'] = $_POST['exf_title'];
                $add_img['name_ru'] = $_POST['exf_title'];
                $add_img['name_en'] = $_POST['exf_title'];
                $add_img['vrem'] = date("Y-m-d H:i:s");



                $this->db->insert('ex_file', $add_img);
                //--  end Базага жазуу
            }
        }
        //--  end Файлды серверге кочурот    

        header('Location: ' . $_SESSION['url']);
        exit;
    }

    public function users() {
        if (isset($_SESSION['ex_id_user']) == false || $_SESSION['ex_id_user'] == 0) {echo '77777'; header('Location: ' . base_url('adminex'));}
        $_SESSION['url'] = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $this->lang->load('content', $lang = $_SESSION['ex_lg']);
        $data_select['ex_lg_Exit'] = $this->lang->line('ex_lg_Exit');
        $_SESSION['ex_check_a'] = rand(2, 9);
        $_SESSION['ex_check_b'] = rand(2, 9);
        $data_select['ex_error'] = '';

        $this->load->model('Select_model');

        if (isset($_POST['exf_login'])) {
            $data_exf = array(
                'login' => $_POST['exf_login'],
                'fio' => $_POST['exf_fio'],
                'tel' => $_POST['exf_tel'],
                'pass' => md5($_POST['exf_pass']),
                'type_user' => $_POST['exf_rol']
            );
            if (isset($_POST['exf_add'])) {
                $this->db->insert('ex_user', $data_exf);
            }
            if (isset($_POST['exf_edit']) && $_POST['exf_edit'] == $_SESSION['id_page']) {
                unset($data_exf['pass']);
                $this->Select_model->edit_user($_POST['exf_edit'], $data_exf);
            }
        }

        if (isset($_POST['exf_summ']) && $_POST['exf_summ'] == $_SESSION['ex_check']) {

            $this->db->where('id_user', $_POST['exf_id']);
            $this->db->from('ex_page');
            if ($this->db->count_all_results() == 0)
                $this->db->delete('ex_user', array('id' => $_POST['exf_id']));
            else
                $data_select['ex_error'] = '<center><p style="color:red"><i>Бул колдонуучунун автордук макалалары бар болгондугуна байланыштуу өчүрүүгө мүмкүн эмес.</i></p></center>';
        }

        $data_select['ex_user'] = $this->Select_model->user();
        $data_select['ex_type_user'] = $this->Select_model->type_user();
        $data_select['ex_menu1'] = 'm40';
        $data_select['ex_menu2'] = 'm41';

        $this->load->view('adminex/head_view');
        $this->load->view('adminex/header_view', $data_select);
        $this->load->view('adminex/menu_view', $data_select);
        $this->load->view('adminex/ex_user_view', $data_select);
        $this->load->view('adminex/footer_view');
    }

    public function user_delete($id = 0, $summa = 0) {
        if (isset($_SESSION['ex_id_user']) == false || $_SESSION['ex_id_user'] == 0)
            header('Location: ' . base_url('adminex'));

        $this->lang->load('content', $lang = $_SESSION['ex_lg']);
        $data_select['ex_lg_Exit'] = $this->lang->line('ex_lg_Exit');

        $data_select['id'] = $id;
        $data_select['ex_menu1'] = 'm10';
        $data_select['ex_menu2'] = 'm11';
        $this->load->view('adminex/head_view');
        $this->load->view('adminex/header_view', $data_select);
        $this->load->view('adminex/menu_view', $data_select);
        $this->load->view('adminex/ex_delete_view', $data_select);
        $this->load->view('adminex/footer_view');
    }

    public function user_edit($id = 0) {
        if (isset($_SESSION['ex_id_user']) == false || $_SESSION['ex_id_user'] == 0)
            header('Location: ' . base_url('adminex'));

        $this->lang->load('content', $lang = $_SESSION['ex_lg']);
        $data_select['ex_lg_Exit'] = $this->lang->line('ex_lg_Exit');
        $this->load->model('Select_model');
        $data_select['ex_user'] = $this->Select_model->user_name($id);
        $data_select['ex_menu1'] = 'm40';
        $data_select['ex_menu2'] = 'm41';
        $data_select['ex_id'] = $id;
        $this->load->view('adminex/head_view');
        $this->load->view('adminex/header_view', $data_select);
        $this->load->view('adminex/menu_view', $data_select);
        $this->load->view('adminex/ex_user_edit_view', $data_select);
        $this->load->view('adminex/footer_view');
    }

}
