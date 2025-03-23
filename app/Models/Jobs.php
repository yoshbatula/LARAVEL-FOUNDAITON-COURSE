<?php
namespace App\Models;

use Illuminate\Contracts\Queue\Job;
use Illuminate\Support\Arr;

class Jobs {
    public static function all () {
          return [
               [
                 'id'=> 1,
                 'title' => 'Web Developer',
                 'company' => 'Google',
                 'salary' => '100k'
               ],
               [
                 'id'=> 2,
                 'title' => 'Backend Developer',
                 'company' => 'Facebook',
                 'salary' => '90k'
               ]
          ];
    }

    public static function find(int $id) {
        return Arr::first(static::all(), fn($jobs) => $jobs['id'] == $id);
    }
     
 }

?>