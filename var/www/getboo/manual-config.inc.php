<?php
/***************************************************************************
Copyright (C) 2005-2008 GetBoo project
http://sourceforge.net/projects/getboo/
http://www.getboo.com/

This file is part of GetBoo.

GetBoo is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

GetBoo is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with GetBoo; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
***************************************************************************/

/*
 * GetBoo Configuration File
 *
 * Required configuration: Database
 *
 * dbhost:   SQL database hostname.
 * dbport:	 SQL database port.
 * dbuname:  SQL username.
 * dbpass:   SQL password.
 * dbname:   SQL database name.
 * dbtype:   SQL database type.
 */

$dbhost = "localhost";
$dbport = "3306";
$dbuname = "getboo";
$dbpass = "getboo";
$dbname = "getboo";
$dbtype = "mysql";

define("TABLE_PREFIX", "%%TABLE_PREFIX%%");
define('ABSPATH', dirname(__FILE__). DIRECTORY_SEPARATOR);
if(!$from_conn)	include('includes/config.php');
?>