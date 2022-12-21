<?php 
$db = mysqli_connect("sql200.epizy.com", "epiz_33236904", "IZMIRNcdSTB", "epiz_33236904_web_ft");

function query($query){
    global $db;
    $query_awal = mysqli_query($db, $query);
    $result_query = [];

    while($res = mysqli_fetch_assoc($query_awal)){
        $result_query[] = $res;    
    };

    return $result_query;
};