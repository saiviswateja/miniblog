<?php


class Login extends CI_Controller
{
	public function index()
	{
		if(isset($_SESSION['user_id'])){
			redirect("admin/dashboard");
		}
		$data = array();
		if(isset($_SESSION['error'])){
//			die($_SESSION['error']);
			$data['error'] = $_SESSION['error'];
		}
		else{
			$data['error'] = "NO_ERROR";
		}
//		$this->load->helper('url');
		$this->load->view('adminpanel/loginview',$data);
	}
	function login_post()
	{
		print_r($_POST);
		if(isset($_POST)){
			$email = $_POST['email'];
			$password = $_POST['password'];
			$query = $this->db->query("SELECT * FROM `backendusers` WHERE `username`='$email' AND `password`='$password'");
			if($query->num_rows()){
				$result = $query->result_array();
//				print_r($result);
				$this->session->set_userdata('user_id',$result[0]['uid']);

				redirect('admin/dashboard');
			}
			else{
				$this->session->set_flashdata('error','Invalid credentials');
				redirect("admin/login");
			}
		}
		else{
			die("Invalid inputs");
		}
	}
	function logout()
	{
		session_destroy();
		redirect('admin/login');
	}
}
