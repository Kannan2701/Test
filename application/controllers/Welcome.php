	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
	public function Courses()
	{
		$this->load->model('Shyam');
		$result['data']=$this->Shyam->Subject();	
		$this->load->view('header');
		$this->load->view('Courses',$result);
		$this->load->view('footer');
	}
	public function blog()
	{
		$this->load->view('header');
		$this->load->view('blog');
		$this->load->view('footer');
	}
	public function single_blog()
	{
		$this->load->view('header');
		$this->load->view('single_blog');
		$this->load->view('footer');
	}
	public function Contact1()
	{
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}
	public function register()
	{
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
	}
	
	public function register_data()
	{
		$data['email'] = $this->input->post('email');
		$data['pwd'] = $this->input->post('psw');
		$this->load->model('Shyam');
		$result=$this->Shyam->register($data);
		if($result)
		{
			$this->session->set_flashdata("msg",'register sucessfully!');
		}
		else
		{
			$this->session->set_flashdata("msg",'can\'t register');
		}
		redirect(base_url().'Welcome/register');
		
	}
	
	public function apply()
	{
		$this->load->view('header');
		$this->load->view('apply');
		$this->load->view('footer');
	}
	public function applyy_data()
	{
		$data['name'] = $this->input->post('name');
		$data['department'] = $this->input->post('department');
		$data['project'] = $this->input->post('project');
		$this->load->model('Shyam');
		$result=$this->Shyam->apply($data);
		if($result)
		{
			$this->session->set_flashdata("msg",'applied sucessfully!');
		}
		else
		{
			$this->session->set_flashdata("msg",'can\'t aplly please try agian');
		}
		redirect(base_url().'Welcome/apply');
		
	}
	
	
}
	