<?php
# @version		$version 0.1 My Company$
# @copyright	Copyright (C) 2018 My Company All rights reserved.
# @license		MIT, see LICENSE.php
# Updated		5th January 2018
#
# Site: http://example.com
# Email: info@example.com
# Phone: null
#
# Joomla! is free software. This version may have been modified pursuant
# to the GNU General Public License, and as distributed it includes or
# is derivative of works licensed under the GNU General Public License or
# other free or open source software licenses.
# See COPYRIGHT.php for copyright notices and details.

// no direct access
defined('_JEXEC') or die ('Restricted Access');

$module = JModuleHelper::getModule('mod_mymodule');
$moduleParams = new JRegistry($module->params);
$home="modules/mod_mymodule";
$options['first']   =   $moduleParams->get('first', 0);
$options['second']   =   $moduleParams->get('second', '#fff');


echo 'Hello World';

