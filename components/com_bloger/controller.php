<?php 
defined('_JEXEC') or die('Access denied');
	jimport('joomla.application.component.controller');
	 class blogerController extends JController
	 {
		 function create(){
			echo "welcome to create function"; 
		 }
		 
		 function delete(){
			$id=JRequest::getInt('id',0);
			echo "welcome to delete , you want to delete {$id}"; 
		 }
		 
	 }
?>