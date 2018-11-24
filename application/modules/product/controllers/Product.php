<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MX_Controller {

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

	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$data['products'] = json_decode($this->curl->simple_get($this->config->item('rest_api_default') . '/posts?categories=3'),true);
		$data['header_title'] = 'Layanan';
		$data['header_description'] = 'Layanan pengetahuan tentang gaya hidup, keuangan, motivasi, bisnis properti, publik speaking dan sales & marketing';
		$data['view'] = 'product/main';
		$this->load->view('template/template', $data);
	}

	public function detail($id) {
		$data['product'] = json_decode($this->curl->simple_get($this->config->item('rest_api_default') . '/posts/' . $id),true);
		$data['header_title'] = 'Produk ' . $data['product']['title']['rendered'];
		$data['header_description'] = 'Layanan pengetahuan tentang gaya hidup, keuangan, motivasi, bisnis properti, publik speaking dan sales & marketing';
		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);
		$data['view'] = 'product/detail';
		$data['js'] = array('assets/custom_js/contact_us_inquiry.js');
		$this->load->view('template/template', $data);
	}

	public function submit_inquiry() {
		$csrf = array(
			'csrfName' => $this->security->get_csrf_token_name(),
			'csrfHash' => $this->security->get_csrf_hash()
		);
		
		if (!$this->input->is_ajax_request()) {
			$response = array(
				'status'=>400, 
				'message' => 'Oops sorry something wrong please try again later'
			);
			echo json_encode(array_merge($response, $csrf));
		}

		$data = array(
			'email' => $this->input->post('email-inquiry'),
			'name' => $this->input->post('name-inquiry'),
			'message' => $this->input->post('message-inquiry'),
			'address' => $this->input->post('address-inquiry'),
			'phone' => $this->input->post('phone-inquiry'),
			'product' => $this->input->post('product-inquiry')
		);

		// $post = $this->curl->simple_post($this->config->item('rest_api_inoy') . '/inquiry', $data);

		$this->__sendMail($data);
		$response = array(
			'status'=>200, 
			'message' => 'Your inquiry is success submited'
		);
		echo json_encode(array_merge($response, $csrf));
	}

	private function __sendMail($data) {
        $msg = $this->load->view('product/include/email_inquiry',$data,true);
        $this->email->from('info@greenwoodsjonggol.com', 'GreenWood Hills Jonggol');
        $this->email->to($data['email']); 
        $this->email->subject('Terima Kasih Telah Mengajukan pertanyaan seputar produk GreenWood Hills Jonggol');
        $this->email->message($msg);  
		if ($this->email->send()) {
			$this->__sendMailOwn($data);
		} else {
			show_error($this->email->print_debugger());
			exit;
		}
	}
	
	private function __sendMailOwn($data) {
        $msg = $this->load->view('product/include/email_own_inquery',$data,true);
        $this->email->from('info@greenwoodsjonggol.com', 'GreenWood Hills Jonggol');
        $this->email->to('customer@greenwoodsjonggol.com'); 
        $this->email->subject('Inquery Product From ' . $data['name']);
        $this->email->message($msg);  
		if ($this->email->send()) {
			return true;
		} else {
			show_error($this->email->print_debugger());
			exit;
		}
    }
}
