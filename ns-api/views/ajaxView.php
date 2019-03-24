<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);

if ((isset($_POST['functionname']) && !empty($_POST['functionname'])) && ($_POST['functionname'] == 'getStationList')) {
    $function = $_POST['functionname'];

    $NS_API_Controller = new NS_API_Controller;
    $stations_array[] = $NS_API_Controller->fill_Station_Array();
    //this header functions only for this echo
    header("Content-Type: application/json");
    echo json_encode ($stations_array);
}else if(((isset($_POST['functionname']) && !empty($_POST['functionname'])) && (isset($_POST['station']) && !empty($_POST['station']))) && ($_POST['functionname'] == 'getStationInfo')){
    $function = $_POST['functionname'];
    $station = $_POST['station'];

    $NS_API_Controller = new NS_API_Controller;
    $DepartInfo = $NS_API_Controller->departinfoForStation($station);
    echo $DepartInfo;
}
else{
    $result = 'error_uploadToPHPWentWrong';
    echo $result;
    // echo $result;
}

