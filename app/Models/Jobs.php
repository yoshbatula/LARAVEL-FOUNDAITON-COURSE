<?php
namespace App\Models;

use Illuminate\Contracts\Queue\Job;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Jobs extends Model{
    protected $table = 'job_listings';
}
?>