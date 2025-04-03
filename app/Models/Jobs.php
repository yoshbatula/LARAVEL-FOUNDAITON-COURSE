<?php
namespace App\Models;

use Illuminate\Contracts\Queue\Job;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Jobs extends Model{

  use HasFactory;
  protected $table = 'job_listings';
  protected $fillable = ['title', 'company', 'salary'];

}
?>