<?php

function viewSeats(){
    $view = new view;
    $view->viewData();  
}

function viewSeats2(){
    $view = new view;
    $view->viewData2();  
}



function update($seat_id){
    $insert = new insert;
    $insert->updateSeats($seat_id);
}

function update2($seat_id){
    $insert = new insert;
    $insert->updateSeats2($seat_id);
}

?>
