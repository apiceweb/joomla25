<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?><tr>
	<th width="5">
		<?php echo JText::_('COM_HELLOWORLD_HELLOWORLD_HEADING_ID'); ?> <!-- JText:: per stampa macro traduzione -->
	</th>
	<th width="20">
		<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count($this->items); ?>);" />
	</th>			
	<th>
		<?php echo JText::_('COM_HELLOWORLD_HELLOWORLD_HEADING_GREETING'); ?>
	</th>
</tr>

