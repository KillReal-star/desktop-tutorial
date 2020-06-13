<?php
$action = $_POST['action'];

require_once 'bron.php';

switch ($action) {
    case 'addBron':   
        addBron(); 
    break;
   
}
