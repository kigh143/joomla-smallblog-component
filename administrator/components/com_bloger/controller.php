<?php 
defined('_JEXEC') or die('Access denied');
	jimport('joomla.application.component.controller');
	 class blogerContoller extends JController
	 {
		 function display(){
			 echo JText::('COM_BLOGER_WELCOME');
		 }
		 
		 function cretae(){
			 echo JText::('COM_BOLGER_TASK_DELETE');
		 }
		 
		 function cretae(){
			 echo JText::('COM_BOLGER_TASK_CREATE');
		 }
	 }
	 
	 ?>