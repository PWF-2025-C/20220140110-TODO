<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
>>>>>>> d5616eb11ec06e9e3822d6008a972b0fa7adda88

class Todo extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = [
        'title',

        'user_id',

        'is_complete',
    ];

    public function user()

    {
        return $this->belongsTo(User::class);
    }
}
=======
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


>>>>>>> d5616eb11ec06e9e3822d6008a972b0fa7adda88
