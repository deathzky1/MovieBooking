<?php
require_once 'config.php';

class view extends config{

    public function viewData(){
        $con = $this->con();
        $sql = "SELECT * FROM `movie_seat_table`JOIN seat_table ON movie_seat_table.seat_id = seat_table.seat_id 
        JOIN movie_table ON movie_seat_table.movie_id = movie_table.movie_id WHERE movie_seat_table.movie_id = 1;";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);
    
         echo'<div="btn-group"> <div class="row inline">';
         echo ' <div class="col-12 d-flex align-items-start">';

         $count =0;
         foreach($result as $data){

             if($count >8){
                echo '</div></div> <div class="row inline">';
                echo ' <div class="col-12 d-flex align-items-start">';

                $count=0;
            }
             if($count <= 9){

                if(boolval($data['is_available']) === true){
                    echo" <div><label class='btn btn-sm btn-seat p-3 btn-outline-danger'><i class='fa fa-couch nav-text text-center fa-sm d-block'><input type='radio' class='d-block' name='Seat' value=$data[seat_id]>$data[seat_number]</i></div>";
                }else {
                    echo" <div><label class='btn btn-sm btn-seat p-3 btn-outline-light'><i class='fa fa-couch nav-text text-center fa-sm d-block'><input type='radio' disabled class='d-block' name='Seat' value=$data[seat_id]>$data[seat_number]</i></div>";

                }
             }
             $count++;
    
    
         }
         echo' </div>';
         echo' </div>';

    
    }

    public function viewData2(){
        $con = $this->con();
        $sql = "SELECT * FROM `movie_seat_table`JOIN seat_table ON movie_seat_table.seat_id = seat_table.seat_id 
        JOIN movie_table ON movie_seat_table.movie_id = movie_table.movie_id WHERE movie_seat_table.movie_id = 2;";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);
    
         echo'<div="btn-group"> <div class="row inline">';
         echo ' <div class="col-12 d-flex align-items-start">';

         $count =0;
         foreach($result as $data){

             if($count >8){
                echo '</div></div> <div class="row inline">';
                echo ' <div class="col-12 d-flex align-items-start">';

                $count=0;
            }
             if($count <= 9){

                if(boolval($data['is_available']) === true){
                    echo" <div><label class='btn btn-sm btn-seat p-3 btn-outline-danger'><i class='fa fa-couch nav-text text-center fa-sm d-block'><input type='radio' class='d-block' name='Seat' value=$data[seat_id]>$data[seat_number]</i></div>";
                }else {
                    echo" <div><label class='btn btn-sm btn-seat p-3 btn-outline-light'><i class='fa fa-couch nav-text text-center fa-sm d-block'><input type='radio' disabled class='d-block' name='Seat' value=$data[seat_id]>$data[seat_number]</i></div>";

                }
             }
             $count++;
    
    
         }
         echo' </div>';
         echo' </div>';

    
    }

}
?>
