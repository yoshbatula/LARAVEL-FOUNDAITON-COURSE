<?php
    namespace App\Models;

    use Illuminate\Contracts\Queue\Job;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Arr;
    
    class donna extends Model {
        protected $table = 'donna';
        protected $fillable = ['name', 'email'];
    }
?>