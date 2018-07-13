<?php
require_once('lib.php');
session_start();
echo "coucou";
$session = new Session();
$session->set("name","cedric");

$name = $session->get("name");
echo "<br>" . $name; 

$db = DataBase::getInstance();
$query = $db->getQuery();

$results = $query->request("select * from t_chars");

foreach($results as $result ){
echo '<br>' . $result["marque"];
}

?>
