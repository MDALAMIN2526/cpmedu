<?php

namespace App\Scopes;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Builder;

class AcademicSchoolScope implements Scope
{

    public function apply(Builder $builder, Model $model)
    {
        $table=$model->getTable();
        $academicId =  '.academic_id';
        if(moduleStatusCheck('University')){
            $columns = Schema::getColumnListing($table);
            if( in_array('un_academic_id', $columns)){
                $academicId =  '.un_academic_id';
            }
        }
        if (Auth::check()) {
            if (app()->bound('school')) {
                if (moduleStatusCheck('Saas') == true && Auth::user()->is_administrator == "yes" && Session::get('isSchoolAdmin') == false && Auth::user()->role_id == 1) {
                    $builder->where($table. $academicId, getAcademicId());
                } else {
                    $builder->where($table. $academicId, getAcademicId())->where($table.'.school_id', app('school')->id);
                }
            } elseif (Auth::check()) {
                if (moduleStatusCheck('Saas') == true && Auth::user()->is_administrator == "yes" && Session::get('isSchoolAdmin') == false && Auth::user()->role_id == 1) {
                    $builder->where($table. $academicId, getAcademicId());
                } else {
                    $builder->where($table. $academicId, getAcademicId())->where($table.'.school_id', Auth::user()->school_id);
                }
            }
        } else {
            $builder->where($table.'.school_id', 1);
        }
    }
}
