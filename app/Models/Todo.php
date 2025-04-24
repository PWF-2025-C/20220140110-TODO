<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    // Specify the table name if it's not the plural form of the model name
    // protected $table = 'todos'; 

    // Specify the columns that can be mass-assigned
    protected $fillable = ['user_id', 'title', 'is_done'];

    // Specify the relationships (if any)
    // Example: public function user() { return $this->belongsTo(User::class); }


    // Optionally, add any custom methods or attributes

    public function user()
{
    return $this->belongsTo(User::class);
}
        
    
}


