<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * This controller is to control behavior when the user
 * is not logged in (i.e. a user's 'external' access)
 */

class External extends CI_Controller {
	public function index()
	{
		$this->load->model('project_info');

		$page_info = array(
			'page_title' => 'Home'
		);

		$this->project_info->append($page_info);

		$data['project'] = $this->project_info->project;

		$this->load->view('templates/ext_header', $data);
		$this->load->view('ext_index');
		$this->load->view('templates/ext_footer');
	}
}
