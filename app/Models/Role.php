<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function hasRole($role)
    {
        return $this->roles()->where('kasir', $role)->exists();
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
