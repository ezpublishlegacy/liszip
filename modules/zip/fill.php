<?php

/*
* @copyright Copyright (C) 2010-2013 land in sicht AG All rights reserved.
* @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
*/

$http = eZHTTPTool::instance();
$db = eZDB::instance();

$query = "SELECT * FROM ezplz WHERE plz_plz like '".utf8_decode($http->variable('q'))."%' OR plz_plz LIKE '%,".utf8_decode($http->variable('q'))."%' LIMIT 60";
$rows = $db -> arrayQuery( $query );

$djson = array();
if (count($rows)) {
	foreach($rows as $adr) {
		$tmp = explode(",",$adr["plz_plz"]);      
		foreach($tmp as $t) {
			$djson[] = array("value" => $t,
			              	 "name" => $t." ".$adr["plz_ort"],
			              	 "ort" => $adr["plz_ort"] );
		}
	}
}



header("Content-Type: application/json;charset=UTF-8");
echo $http->variable('callback').'('.json_encode($djson).');';


eZExecution::cleanExit();

?>