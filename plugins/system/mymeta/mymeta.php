<?php
/**
 * @copyright	Copyright (C) 2005 - 2011 Mark Dexter and Louis Landry. 
 * @license	GNU General Public License version 2 or later; see LICENSE.txt
 */
// no direct access
defined('_JEXEC') or die;
jimport('joomla.plugin.plugin');//libreria nativa di joomla
/**
 * Example System Plugin
 */
class plgSystemMyMeta extends JPlugin
{
     function onBeforeCompileHead()
     {
        if ($this->params->get('revised')) {
           $document = JFactory::getDocument();
           $headData = $document->getHeadData(); //$headdata tag per identificare l'head
           $headData['metaTags']['standard']['revised'] =  
              $this->params->get('revised');
           $document->setHeadData($headData);             
        }
     }
}
