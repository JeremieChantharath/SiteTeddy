<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	private $data;

	public function __construct()
    {
		parent::__construct();
		$this->data['head']['seo']['titre'] = "Histoire Collectives";
    	$this->data['head']['seo']['description'] = "Demander TEDDY";
		$this->data['head']['seo']['mot-clés'] = "Demander TEDDY";
		$this->data['head']['titre'] = "A CHANGER";
	}
	
	public function index()
	{		
		$this->data['head']['titre'] = "Accueil";
		$this->load->view('accueil',$this->data);
	}

	public function topics(){
		
		$this->data['head']['titre'] = "Les Topics";
		$this->load->view('topics',$this->data);
	}

	public function histoiresPerso(){
	
		$this->data['head']['titre'] = "Vos Histoires";
		$this->load->view('histoires_perso',$this->data);
	}

	public function histoire1(){

		$this->load->view('histoire1',$this->data);
	}

	public function histoire2(){

		$this->load->view('histoire2',$this->data);
	}

	public function histoire3(){


		$this->load->view('histoire3',$this->data);
	}

	public function connexion(){

		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('mdp', 'mdp', 'required');

		if($this->form_validation->run()){
			$this->load->model('utilisateur_model');
			$utilisateur = $this->utilisateur_model->get($this->input->post('email'));
			if($utilisateur != null && $utilisateur->mdp == $this->input->post('mdp'))
			{
				$this->session->pseudo = $utilisateur->pseudo;
				$this->session->email = $utilisateur->email;
				$this->index();
			}
			else{
				$this->load->view('connexion',$this->data);
			}
		}
		else{
			$this->load->view('connexion',$this->data);
		}
	}

	public function inscription(){
		

		$this->form_validation->set_rules('nom', 'nom', 'required',array('required' => 'Vous devez entrer un %s.')); //TODO faire marcher ce truc
		$this->form_validation->set_rules('pseudo', 'pseudo', 'required');
		$this->form_validation->set_rules('prenom', 'prenom', 'required');
		$this->form_validation->set_rules('mdp', 'mdp', 'required');
		$this->form_validation->set_rules('mdp_conf', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		if($this->form_validation->run())
		{
			$this->load->model('utilisateur_model');
			$infos = array(
				'pseudo'=>$this->input->post('pseudo'),
				'nom'=>$this->input->post('nom'),
				'prenom'=>$this->input->post('prenom'),
				'email'=>$this->input->post('email'),
				'mdp'=>$this->input->post('mdp'),
				'valide'=>0 //compte pas encore validé
			);
			$this->utilisateur_model->insert($infos);
			$this->load->view('validation',$this->data);
		}
		else
		{
			$this->load->view('inscription',$this->data);
		}
	}

	public function deconnexion(){
		$this->load->view('deconnexion',$this->data);
	}

	public function validation(){

		$this->load->view('validation',$this->data);
	}
	public function valide(){

		$this->load->view('valide',$this->data);
	}

}
