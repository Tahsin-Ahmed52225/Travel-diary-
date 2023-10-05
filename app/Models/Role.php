<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'roles';
      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'guard_name',
    ];

    /**
     * create user
     */
    protected static function store(mixed $data): object|bool
    {
        $role = Role::create([
            'name' => $data["name"],
            'guard_name' => $data["guard_name"],
        ]);

        return !is_null($role) ? $role : false;
    }
    /**
     *  Get all roles
     */
    protected static function getAll(): mixed
    {
        return Role::all();
    }
}
