<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Modules\RolePermission\Entities\CpmPermissionAssign;

class Role extends Model
{
    //
    public function permissions()
    {
        return $this->hasMany(CpmPermissionAssign::class, 'role_id', 'id');
    }
}
