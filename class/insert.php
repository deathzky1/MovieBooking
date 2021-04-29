<?php
require_once 'config.php';

  class insert extends config{

    public function updateSeats($seat_id){
        $con = $this->con();
        $sql = "UPDATE movie_seat_table SET is_available = '0'
        WHERE movie_seat_table.seat_id = (?) AND movie_seat_table.movie_id = 1";
        $data = $con->prepare($sql);

        if($data->execute([$seat_id])){

          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Successfully Booked Seat!</strong> Thank you for booking.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';

        }else{

        }
    }

    public function updateSeats2($seat_id){
      $con = $this->con();
      $sql = "UPDATE movie_seat_table SET is_available = '0'
      WHERE movie_seat_table.seat_id = (?) AND movie_seat_table.movie_id = 2";
      $data = $con->prepare($sql);

      if($data->execute([$seat_id])){

        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Successfully Booked Seat!</strong> Thank you for booking.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';

      }else{

      }
  }
}
?>
