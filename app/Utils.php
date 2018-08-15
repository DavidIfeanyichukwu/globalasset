<?php

namespace App;

use Carbon\Carbon;

class Utils
{
  public static function dueAtDisplayState($due_at) {
    if(isset($due_at)) {
      $carbon = new Carbon();
      $current = $carbon->today(); // Today 
      //$due_at = "2018-12-20"; Test Date
      
      $green = 60; //You have time - green
      $yellow = 30; //Time is running out - yellow
      $red = 10; //You are out of time - red
      $black = 0; //This stuff is bad - black
      $print = ""; // Empty

      if( $current->diffInDays($due_at) >= $green ) {
          $print = "green";
      }else if( $current->diffInDays($due_at) >=  $yellow ) {
          $print = "yellow";
      }else if( $current->diffInDays($due_at) >=  $red ) {
          $print = "red";
      }else if( $current->diffInDays($due_at) >=  $black ) {
          $print = "black";
      }

      return  $print;
    
    }else {
      // throw new \Exception("Make sure due_at is setup in DataBase/Bread!");
    }
  }

}