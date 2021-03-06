<?php
/**
 * BIGACE - a PHP and MySQL based Web CMS.
 * Copyright (C) Kevin Papst.
 *
 * BIGACE is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 * 
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @author Kevin Papst 
 * @copyright Copyright (C) Kevin Papst
 * @version $Id$
 * @package bigace.smarty
 * @subpackage function
 */

/**
 * Imports a class.
 * 
 * Parameter:
 * - class	= the full qualified classname to import (like classes.item.Item)    
 */
function smarty_function_import($params, &$smarty)
{	
	if(!isset($params['class'])) {
		$smarty->trigger_error("is_leaf: neither 'item' not 'id' attribute is set");
		return;
	}
	import($params['class']);
}
