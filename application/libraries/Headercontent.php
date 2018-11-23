<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Codeigniter Multilevel menu Class
 * Provide easy way to render multi level menu
 * 
 * @package			CodeIgniter
 * @subpackage		Libraries
 * @category		Libraries
 * @author			Eding Muhamad Saprudin 
 * @link    		https://github.com/edomaru/codeigniter_multilevel_menu
 */
class Headercontent {

    public function __construct() {
        $this->ci =& get_instance();
		$this->ci->load->library('curl');
    }

    function getContent() {
        return json_decode($this->ci->curl->simple_get($this->ci->config->item('rest_api_default') . '/pages?slug=top-header'),true);
    }
}