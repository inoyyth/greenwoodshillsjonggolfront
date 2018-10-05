<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends MX_Controller {

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
		$blog = json_decode($this->curl->simple_get($this->config->item('rest_api_default') . '/categories/?slug=blog'), true);
		$data['list_category'] = json_decode($this->curl->simple_get($this->config->item('rest_api_default') . '/categories/?parent=' . $blog[0]['id']),true);
		$data['blog'] = json_decode($this->curl->simple_get($this->config->item('rest_api_default') . '/posts?categories=' . $blog[0]['id']),true);
		$data['current_category'] = 0;
		$data['view'] = 'blog/main';
		$this->load->view('template/template', $data);
	}

	public function category($slug) {
		$parent = json_decode($this->curl->simple_get($this->config->item('rest_api_default') . '/categories/?slug=blog'), true);
		$blog = json_decode($this->curl->simple_get($this->config->item('rest_api_default') . '/categories/?slug=' . $slug), true);
		$data['blog'] = json_decode($this->curl->simple_get($this->config->item('rest_api_default') . '/posts?categories=' . $blog[0]['id']),true);
		$data['list_category'] = json_decode($this->curl->simple_get($this->config->item('rest_api_default') . '/categories/?parent=' . $parent[0]['id']),true);
		$data['current_category'] = $blog[0]['id'];
		$data['view'] = 'blog/main';
		$this->load->view('template/template', $data);
	}

	public function detail($id) {
		//increment posts view
		$this->curl->simple_get($this->config->item('rest_api_inoy') . '/countview/' . $id);
		$data['article'] = json_decode($this->curl->simple_get($this->config->item('rest_api_default') . '/posts/' . $id), true);
		$data['contact'] = json_decode($this->curl->simple_get($this->config->item('rest_api_default') . '/pages?slug=contact-us'), true);
		$data['view'] = 'blog/detail';
		$this->load->view('template/template', $data);
	}
}
