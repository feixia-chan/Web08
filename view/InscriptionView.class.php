<?php 
	class InscriptionView extends View {

		public function render(){  
			$this->loadTemplate('head');
			$this->loadTemplate('header_anonymous');
			$this->loadTemplate('content_inscription');
			$this->loadTemplate('foot');
		}
			
	}
?>