<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$view_data['page'] = "home";
	
		$this->load->view('main', $view_data);
	}
	
	
	public function products()
	{
	$view_data['page'] = "products";
		$this->load->view('products', $view_data);
	}
	public function preventive()
	{
	$view_data['page'] = "preventive";
		$this->load->view('preventive', $view_data);
	}
	
	public function fragrance()
	{
	$view_data['page'] = "fragrance";
		$this->load->view('fragrance', $view_data);
	}
	
	
	
	public function productlist()
	{
	$view_data['page'] = "productlist";
		$this->load->view('productlist', $view_data);
	}
	
		public function about()
	{
	$view_data['page'] = "about";
		$this->load->view('about', $view_data);
	}
	
	public function contacts()
	{
	$view_data['page'] = "contacts";
		$this->load->view('contacts', $view_data);
	}
	public function table2()
	{
	$view_data['page'] = "table2";
		$this->load->view('table2', $view_data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */