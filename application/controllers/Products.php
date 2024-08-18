<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	

	function __construct() {
        parent::__construct();
        
        $this->load->helper('security');
        $this->load->model('products_model'); 
        $this->load->database();  
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

	public function index()
	{	
		
         //load the model  
         $this->load->model('products_model');  
         //load the method of model  
         $data['sel']=$this->products_model->select();  
         //return the data in view  
         $this->load->view('products', $data);  
          
	}

	 public function add()
	{
		$this->load->view('add_products');
	}

	public function addproducts()
	{
               

                $this->form_validation->set_rules('product_name', 'Product Name', 'required');
                $this->form_validation->set_rules('quantity', 'Quantity', 'required');
                $this->form_validation->set_rules('price', 'Price', 'required');
                 if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('add_products');
                }else{
		
        	$data = array(
		'product_name' => $this->input->post('product_name'),
		'quantity' => $this->input->post('quantity'),
		'price' => $this->input->post('price'),
        );
				
		$this->products_model->insert($data);
		//$query = $this->db->get("products");
		//$data['records'] = $query->result();
		$message = $this->session->flashdata('flash_data', 'You don\'t have access!');
		redirect('products', $message);}

	}
	public function delproducts($proid)
    {
        $this->products_model->delproducts($proid);
        $message = $this->session->flashdata('flash_data', 'You don\'t have access!');
        redirect('products', $message); 
    }
    public function invoice()
	{
        $this->load->database();  
        //load the method of model  
        $data['sel']=$this->products_model->select(); 
        //return the data in view  
		$this->load->view('invoice', $data);
	}
	
}
?>
