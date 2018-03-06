<?php
class user extends CI_Controler
{
	public function __construct ()
	{

			if(!isset($_SESSION['user_logged'])){
			$this->session->set_flashdata('error','Please login first to view this page!');
			redirect("auth/login");
		}

	}
	public function profile (){
		$this->load->view('profile');
	}

}
	

?> 