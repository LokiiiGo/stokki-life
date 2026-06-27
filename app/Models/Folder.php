<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// database Folder (Pasta) criada
class Folder extends Model
{
    protected $fillable = ['nome'];

    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}
