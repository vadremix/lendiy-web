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

		/*
		* To avoid requesting unused scripts
		*/
		$data['plugins_js'] = array(
			'<script src="'.$this->project_info->project['base_path'].'assets/js/plugins/jquery.waypoints.js"></script>',
			'<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>',
			'<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>',
			'<script src="'.$this->project_info->project['base_path'].'assets/js/plugins/jssor.js"></script>',
			'<script src="'.$this->project_info->project['base_path'].'assets/js/plugins/jssor.slider.js"></script>'
		);

		/*
		* Constructs the page, passes $data
		* In CI, arrays are abstracted, e.g.
		* $data['project_info'] becomes $project
		*/
		$this->load->view('templates/ext_header', $data);
		$this->load->view('ext_index');
		$this->load->view('templates/ext_footer');
	}
}
