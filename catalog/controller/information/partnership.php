<?php


class ControllerInformationPartnership extends Controller{
    //Метод для вывода страницы Партнерство
    public function index(){



        //Подключаем файл language
        $this->load->language('information/partnership');
        var_dump($this->request->post);
        if($this->request->server['REQUEST_METHOD'] == 'POST') {

            //Подключаем модель
            $this->load->model('catalog/partnership');

            if(!$this->request->post['name']){
                $data['error']['name'] = $this->language->get('error_name');
            }
            if(!$this->request->post['email']){
                $data['error']['email'] = $this->language->get('error_email');
            }
            if(!$this->post['company']){
                $data['error']['company'] = $this->language->get('error_company');
            }
            if(!$this->request->post['tax_form']){
                $data['error']['tax_form'] = $this->language->get('tax_form');
            }


            if (empty($data['error'])){
                $this->model_catalog_partnership->addPartner($this->request->post);
                $data['success'] = $this->language->get('text_success');
            }
        }


        //Проверка на существование данных в полях в том случае если одно из полей было заполнено неверно
        //Введеены верно не будут сбрасываться
        if(isset($this->request->post['name'])){
            $data['isset_name'] = $this->request->post['name'];
        }else{
            $data['isset_name'] = '';
        }

        if (isset($this->request->post['email'])){
            $data['isset_email'] = $this->request->post['email'];
        }else{
            $data['isset_email'] = '';
        }
        //Создаем массив для выбора формы налогообложения. Данные были указаны в админпанее в разделе Настройки
        $data['partnership_tax'] = explode(',', str_replace(', ',',',$this->config->get('config_partnership_tax')));
        var_dump($data['partnership_tax']);

        //Формируем массив с ХЛЕБНЫМИ КРОШКАМИ
        $data['breadcrumbs']= array ();

        $data['breadcrumbs'][] = array (
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );
        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('information/partnership')
        );

        //header
        $data['header'] = $this->load->controller('common/header');

        //footer
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('information/partnership',$data));

        $data['action'] = $this->url->link('information/partnership');
    }

}