<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cv extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'email', 'summary'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
