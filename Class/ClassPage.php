<?php
Class Page{
	private $viewPath;
	private $comName;

	public function __construct($comName){
		$this->comName=$comName;
//		echo 'page contructor ok!!'.$comName;
	}

	public function getViewPath(){
		return './Class/Vue/'.$this->comName.'.php';
//		return $this->viewPath;
	}
	
	public function setViewPath($viewPath){
		$this->viewPath=$viewPath;
	}
}
