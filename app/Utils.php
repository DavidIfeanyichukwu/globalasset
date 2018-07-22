<?php

namespace App;

use Carbon\Carbon;

class Utils
{
  public static function dueAtDisplayState($created_at) {
    if(isset($created_at)) {
      $carbon = new Carbon();
      $created_at = new Carbon($created_at);
      $current_day = Carbon::today(); // Today 
      
      $red = 180; // Out Of Time
      $yellow = 150; // Time is running out
      $green = 0; // Plenty fo Time
      $print = ""; // Empty

      $diff = $created_at->diffInDays($current_day);

      if( $diff >= $green && $diff <= $yellow) {
          $print = "green";
      }else if( $diff >  $yellow && $diff < $red ) {
          $print = "yellow";
      }else if( $diff ==  $red ) {
          $print = "red";
      }else {
          $print = "black";
      }

      return  $print . ' ' . $diff ;
    
    }else {
      throw new \Exception("Make sure created_at is setup in DataBase/Bread!");
    }
  }

}
