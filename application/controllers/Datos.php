<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Datos extends Auth_Controller {
    public function __construct() {
        parent::__construct();//echo $this->session->userdata('idusuario');die;
        $this->load->library('session');
    }
 public function registroEmpleado() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        $this->form_validation->set_rules('apellido', 'apellido', 'required');
        $this->form_validation->set_rules('avatar', 'avatar', 'required');
        $this->form_validation->set_rules('fechaDeNacimiento', 'Fecha de nacimiento', 'required');
        $this->form_validation->set_rules('contraseña', 'contraseña', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        if (empty($_FILES['foto']['name'])) {
            $this->form_validation->set_rules('foto', 'foto', 'required');
        }else{
            $nameFoto=$_FILES['foto']['name'];
            $extensionFoto=explode(".",$nameFoto);
        }
        if ($this->form_validation->run()) {
            $this->load->library('upload');
            //carga la foto)
            $config['upload_path'] = 'fotos';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $archivo = date('YmdHis');
            $config['file_name'] = 'foto'.$archivo.'.'.$extensionFoto[1];
            $config['file_ext_tolower'] = true;
            $this->upload->initialize($config);
            $this->upload->do_upload('foto');
            echo $this->upload->display_errors();
            
            $data['nombre'] = $this->input->post('nombre');
            $data['apellido'] = $this->input->post('apellido');
            $data['avatar'] = $this->input->post('avatar');
            $data['fechaDeNacimiento'] = $this->input->post('fechaDeNacimiento');
            $data['contraseña'] =md5($this->input->post('contraseña')) ;
            $data['email'] = $this->input->post('email');
            $data['foto'] = $config['file_name'];
            $this->load->model('model_empleados');
            $this->model_empleados->crear($data);
            redirect('Datos/listarEmpleado');
        } else {
            $this->load->view('templates/header');
            $this->load->view('templates/aside');
            $this->load->view('registroEmpleado');
            $this->load->view('templates/footer');
        }
    }

    public function listarEmpleado() {
         
        $this->load->model('model_empleados');
        $info['informacion']=$this->model_empleados->listarEmpleados();
        $this->load->view('templates/header');
        $this->load->view('templates/aside');
        $this->load->view('listarEmpleado', $info);
        $this->load->view('templates/footer');
        
    }

    public function eliminarEmpleados($id) {
        $this->load->model('model_empleados');
        $this->model_empleados->eliminarEmpleados($id);
        redirect('Datos/listarEmpleado');
    }
    
    
    public function verDetalle($id) {
         
        $this->load->model('model_empleados');
        $info['informacion']=$this->model_empleados->verdetalleempleado($id);
        $this->load->view('templates/header');
        $this->load->view('templates/aside');
        $this->load->view('verDetalle', $info);
        $this->load->view('templates/footer');
    }
    
    public function hello($fullname) {
        echo json_encode($fullname.'hola william yesid'); 
    }
   
    public function profile() {
         $this->load->view('templates/header');
         $this->load->view('templates/aside');
         $this->load->view('profile');
         $this->load->view('templates/footer');
        
    }
    public function salir() {
        $this->load->library('session');
        $this->session->sess_destroy();
        redirect('/', 'location', 301);
    }
    
    
 
}
