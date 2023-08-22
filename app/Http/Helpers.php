<?php

use App\Models\AssignedTeacher;
use App\Models\ClassSubject;
use App\Models\School;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

if (!function_exists('areActiveRoutes')) {
    function areActiveRoutes(array $routes, $output = 'active', $default = ''): String
    {
        foreach ($routes as $key => $route) {
            if (Route::currentRouteName() == $route) return $output;
        }
        return $default;
    }
}
if (!function_exists('getAcronym')) {
    function getAcronym($str)
    {
        $words = preg_split("/[\s,_-]+/", $str);
        $acronym = '';

        foreach ($words as $key => $value) {
            $acronym .= mb_substr($value, 0, 1);
        }
        return $acronym;
    }
}

if (!function_exists('user')) {
    function user()
    {
        return Auth::check() ? Auth::user() : null;
    }
}

if (!function_exists('isAdmin')) {
    function isAdmin()
    {
        return Auth::check() ? user()->role == 'admin' : false;
    }
}
if (!function_exists('allSubjects')) {
    function allSubjects()
    {
        return Subject::get();
    }
}

if (!function_exists('allSchools')) {
    function allSchools()
    {
        return School::get();
    }
}
if (!function_exists('allTeachers')) {
    function allTeachers()
    {
        return User::where('role', 'user')->get();
    }
}

if (!function_exists('noTeacherClasses')) {
    function noTeacherClasses()
    {
        $count = 0;
        foreach (ClassSubject::get() as $key => $value) {
            $assigned = AssignedTeacher::where('class_subject_id', $value->id)->count();
            $count += $value->teachers - $assigned;
        }
        return $count;
    }
}
if (!function_exists('isAssigned')) {
    function isAssigned()
    {
        $user = user();
        $check = AssignedTeacher::where('user_id', $user->id)->count();
        return $check > 0;
    }
}
if (!function_exists('assigned')) {
    function assigned()
    {
        $user = user();
        return AssignedTeacher::where('user_id', $user->id)->first();
    }
}
