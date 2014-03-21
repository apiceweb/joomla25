<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_users_latest
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

// Include the latest functions only once
require_once dirname(__FILE__).'/helper.php';//incluso l'helper
$shownumber = $params->get('shownumber', 5);// legge il parametro di quanti utenti visualizzare
$names	= moduserslatestHelper::getUsers($params);//nome di classse contenuto nell'helper
$linknames = $params->get('linknames', 0);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx')); //classe speciale (suffisso css)

require JModuleHelper::getLayoutPath('mod_users_latest', $params->get('layout', 'default')); //richiama sulfrontend con la vista selezionata
