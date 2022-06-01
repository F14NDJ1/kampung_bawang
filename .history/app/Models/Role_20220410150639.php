<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(User::class, 'role_users');
    }

    public function showRole($role)
    {

        return $this->roles()->where('name', $role)->count() == 1;
        /* if ($this->roles()->where('name', $role)->count() == 1) {
            return "Admin";
        } else {
            return "User Content";
        } */
    }
}
