<?php 
defined('_JEXEC') or die('Access denied');
jimport('joomla.application.component.controller');
$controller = JController::getInstance('bloger');

$controller->excute(JRequest::getVar('task'));

$controller->redirect();



?>