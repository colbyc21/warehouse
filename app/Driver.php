<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Driver extends Model {
   
   public function driverIssues() {
   		return $this->hasMany('App\DriverIssue');

   }
}
