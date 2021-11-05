<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Puestos extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 public function __construct()
	 {
					 parent::__construct();
					 $this->load->model('PuestosModel');
					 $this->load->helper('url_helper');
					 $this->load->helper('form');

	 }


		 public function verPuestos(){


			 $datax = $this->PuestosModel->getPuestos();
			 $sum = 0;
			 $count = 0;
       if($datax){

 				foreach ($datax as &$k) {
 					// code...
 					$dataq =$this->PuestosModel->get_dia_by_id($k['dias']) ;
 					$k['dias']= $dataq['dias'];

 				}

				foreach ($datax as &$k1) {
 					// code...
 					$dataq1 =$this->PuestosModel->get_comida_by_id($k1['comida']) ;
 					$k1['comida']= $dataq1['comida'];

 				}

				foreach ($datax as &$k2) {
 					// code...
 					$dataq2 =$this->PuestosModel->get_periodo_by_id($k2['periodo']) ;
 					$k2['periodo']= $dataq2['periodo'];

 				}



 			}
       //var_dump($datax);
       $data = array(
         'data' => $datax
       );
       $this->load->view('Puesto/verPuestos', $data);
     }



     public function crearPuesto(){
       $estado = $this->input->post('submit');
       //$this->load->library('bcrypt');

       $query = $this->PuestosModel->get_dias();
			 $querya = $this->PuestosModel->get_comidas();
			 $queryb = $this->PuestosModel->get_periodos();
       $query2 = array(
         'dias' => $query,
				 'comidas' => $querya,
				 'periodos' => $queryb

       );
       if(!(isset($estado))){
         $this->load->view("Puesto/crearPuesto",$query2);
       }
       else{
         $configf = array(
           array(
               'field' => 'direccion',
               'label' => 'Direccion',
               'rules' => 'required|strip_tags'
           ),
           array(
               'field' => 'comida',
               'label' => 'Comida',
               'rules' => 'required|strip_tags'
           ),
					 array(
               'field' => 'dias',
               'label' => 'Dias',
               'rules' => 'required|strip_tags'
           ),
           array(
               'field' => 'periodo',
               'label' => 'Periodo',
               'rules' => 'required|strip_tags'
           )
         );

         $this->form_validation->set_rules($configf);

         if($this->form_validation->run() == FALSE):

           $error_datos = $this->form_validation->error_array();
           $errorx = implode(' ',$error_datos);
           $data = array(
             'direccion' => $this->input->post('direccion') ,
             'comida' => $this->input->post('comida'),
             'dias' => $this->input->post('dias'),
						 'periodo' => $this->input->post('periodo')
           );
           $datax = array(
             'error' => $errorx,
						 'dias' => $query,
						 'comidas' => $querya,
						 'periodos' => $queryb,
             'data' => $data
           );

           $this->load->view('Puesto/crearPuesto',$datax);
         else:


           $data = array(
						 'direccion' => $this->input->post('direccion') ,
             'comida' => $this->input->post('comida'),
             'dias' => $this->input->post('dias'),
						 'periodo' => $this->input->post('periodo')
           );

					 $this->AdminModel->crearUsuario($data);
					 redirect('Administrador/verUsuarios', 'refresh');

           $user = $this->input->post('username');

           $queryusr = $this->AdminModel->usuarioExiste($user);
           $numusr = $queryusr[0]['c'];
           //var_dump($queryusr);





         endif;
       }

     }


}
