<?php

/*
* @copyright Copyright (C) 2010-2013 land in sicht AG All rights reserved.
* @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
*/
 
// Introduction in the development of eZ Publish extensions
 
$Module = array( 'name' => 'LisZip' ); 
$ViewList = array();
 
$ViewList['fill'] = array( 'script' => 'fill.php', 
                           'functions' => array( 'read' ), 
                           'params' => array('ParamOne', 'ParamTwo'));
 
// The entries in the user rights 
// are used in the View definition, to assign rights to own View functions 
// in the user roles
 
$FunctionList = array(); 
$FunctionList['read'] = array(); 
 
?>