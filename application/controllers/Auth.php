<?php
	class Auth extends CI_Controller{
		
		public function login(){

			$this->load->view('login');	
		// form validation
			$this->form_validation->set_rules(' email', 'Email', 'required');
			$this->form_validation->set_rules('password','Password','required');
			if($this->form_validation->run() == TRUE){
				//check user in database
				$email=$_POST('email');
				$password= $_POST('password'); 

				$this->db->select('*');
				$this->db->form('users');
				$this->db->where(array('email'=>$email, 'password' => $password));
				$query =$this->db->get();

				$user= $query->row();
				//if user exist

				if($user->email){
					//temporary message
					$this->session->set_flashdata('success','you have logged in');
				
					//session variable
					$_SESSION['user_logged'] == TRUE;
					$_SESSION['email'] = $user->email;
					//redirect to profile
					redirect('user/profile', 'refresh');
					} else{
					$this->session->set_flashdata('error','NO such account exist in the database');

						redirect("auth/register","refresh");
				}


			}
		}

		public function register(){

			if(isset($_POST['register'])){

				//form validation

				$this->form_validation->set_rules('name','name','required');

				$this->form_validation->set_rules('email','Email','required');

				$this->form_validation->set_rules('username','Username','required');

				$this->form_validation->set_rules('password','Password','required|min_length[5]');

				

				//if form validation true
				if($this->form_validation->run() ==TRUE){
					echo  'form validation';

					$data = array(
						'name'=>$_POST['name'],
						'email'=>$_POST['email'],
						'username'=>$_POST['username'],
						'password'=>$_POST['password'],
						

					);

					// we get all the data from the user table in the database and save what ever we got in the database
					
					$this->db->insert('users', $data);


					$this->session->set_flashdata("success", "Your account has been registered.You can login now");
					redirect("auth/register","refresh");

				}
			}
		


		
				//load view
				$this->load->view('register');

				$this->load->view('login');
			}






		public function books(){

			if(isset($_POST['register'])){

				//form validation

				$this->form_validation->set_rules('book_id','Book_id','required');

				$this->form_validation->set_rules('book_isbm','Book_isbm','required');

				$this->form_validation->set_rules('book_title','Book_title','required');

				$this->form_validation->set_rules('book_author','Book_author','required');

				$this->form_validation->set_rules('book_category','Book_category','required');

				

				

				//if form validation true
				if($this->form_validation->run() ==TRUE){
					echo  'form validation';

					$data = array(
						'book_id'=>$_POST['book_id'],
						'book_isbm'=>$_POST['book_isbm'],
						'book_title'=>$_POST['book_title'],
						'book_author'=>$_POST['book_author'],
						'book_category'=>$_POST['book_category'],
					);

					// we get all the data from the user input in the database and save what ever we got in the database 
					$this->db->insert('books',$data);


					$this->session->set_flashdata("success", "Your account has been registered");
					redirect("auth/books","refresh");

				}
			}

			//load the book view
			$this->load->view('books');
			
		}

			

		}
	
		