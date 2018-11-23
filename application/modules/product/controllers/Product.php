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
		$data['view'] = 'product/detail';
		$this->load->view('template/template', $data);
	}
}
