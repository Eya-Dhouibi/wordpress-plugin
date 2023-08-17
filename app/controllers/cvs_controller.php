<?php

class CvsController extends MvcPublicController {

    public function index(){
		$cvs=$this->Cv->find();
		$this->set('cvs',$cvs);
	}
   
    public function add(){
		$this->load_model('Domaine');
		$Domaines=$this->Domaine->find(
       	array('selects'=>array('id','domaine'),
	 			'conditions'=>array('active'=>'1')
		));
		$this->set('Domaines',$Domaines);

         if(isset($_POST['add'])):
           	$this->params['data']['Cv']['nom']=$_POST['nom'];
          	$this->params['data']['Cv']['email']=$_POST['email'];
         	$this->params['data']['Cv']['tel']=$_POST['tel'];
         	$this->params['data']['Cv']['titre']=$_POST['titre'];
         	$this->params['data']['Cv']['formations']=$_POST['formations'];
            $this->params['data']['Cv']['experiences']=$_POST['experiences'];
			$this->params['data']['Cv']['domaine_id']=$_POST['domaine_id'];
         	if($this->Cv->create($this->params['data'])){
				$url = MvcRouter::public_url(array('controller' => 'cvs', 
				'action' => 'index'));
				$this->redirect($url);
			};
         endif;
		}

	public function edit(){
		$id=$this->params['id'];
		$cvs =$this->Cv->find_by_id($id);
		  $this->set('cvs', $cvs);

		$this->load_model('Domaine');
		$Domaines=$this->Domaine->find(
			array('selects'=>array('id','domaine'),
			 'conditions'=>array('active'=>'1')
		  ));
		$this->set('Domaines',$Domaines);  

	  if(isset($_POST['edit'])):
		$this->params['data']['Cv']['id']=$_POST['id'];
		$this->params['data']['Cv']['nom']=$_POST['nom'];
		$this->params['data']['Cv']['email']=$_POST['email'];
		$this->params['data']['Cv']['tel']=$_POST['tel'];
		$this->params['data']['Cv']['titre']=$_POST['titre'];
		$this->params['data']['Cv']['formations']=$_POST['formations'];
		$this->params['data']['Cv']['experiences']=$_POST['experiences'];
		$this->params['data']['Cv']['domaine_id']=$_POST['domaine_id'];
		  if($this->Cv->save($this->params['data'])){
			 $url = MvcRouter::public_url(array('controller' => 'cvs', 
			 'action' => 'index'));
			 $this->redirect($url);
		 };
	  endif;	  
	   }	
	
	public function show(){
		$domaines =$this->Domaine->find_by_id($this->params['id']);
		$cvs=$domaines->cvs;
		$this->set('cvs',$cvs );
	}
}
