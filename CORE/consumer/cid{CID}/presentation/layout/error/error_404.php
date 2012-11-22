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
 * BIGACE is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software Foundation,
 * Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 *
 * For further information visit {@link http://www.bigace.de http://www.bigace.de}.
 *
 * @version $Id$
 * @author Kevin Papst 
 */


/**
 * This script deisplays a HTML representation of the 404 Error Code.
 */

import('classes.util.ApplicationLinks');
include_once(dirname(__FILE__).'/error_environment.php');

header("HTTP/1.0 404 Not Found");

$tpl = loadErrorTemplate();

$tpl->setVariable('TITLE', '404 Not Found');
$tpl->setVariable('ERROR_TITLE', 'Error: 404');
$tpl->setVariable('MESSAGE', 'File Not Found');
$tpl->setVariable('LOGIN_URL', ApplicationLinks::getLoginFormURL($GLOBALS['_BIGACE']['PARSER']->getItemID()));
$tpl->setVariable('AUTHENTICATE_URL', ApplicationLinks::getLoginURL($GLOBALS['_BIGACE']['PARSER']->getItemID()));
$tpl->setVariable('HOME_URL', ApplicationLinks::getHomeURL());
$tpl->setVariable('EXTENDED_ERROR_HTML', 'The requested File could not be found!');

$tpl->show();

?>