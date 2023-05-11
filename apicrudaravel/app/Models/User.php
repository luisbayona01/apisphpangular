<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
public $timestamps = false;
protected $table = 'usuario';
protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
        'apellido',
        'edad',
        'foto',
        'tipo_documento',
        'id_rol',
       
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}