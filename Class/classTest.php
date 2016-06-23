<?php
require_once('classParent.php');
	class Test extends ParentClass{
		public function __construct(){
			Parent::__contruct();
			echo 'ceci est un test!!!!';
		}
	}

