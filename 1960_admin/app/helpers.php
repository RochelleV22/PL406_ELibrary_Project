<?php

use App\Book;
use App\Option;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use Milon\Barcode\DNS1D;


function href($name)
{
    $string = 'href=' . route($name);
    if (Route::currentRouteName() == $name) {
        $string .= ' class=active';
    }
    return $string;
}

function active_menu(array $names)
{
    foreach ($names as $name) {
        if (Route::currentRouteName() == $name) {
            return 'class=active';
        }
    }
}

function isAdmin()
{
    return auth()->user()->level == 'admin' || auth()->user()->level == 'creator' ? true : false;
}

function tab($name)
{
    return $GLOBALS[$name];
}


function barcode($str)
{
    $barcode = new DNS1D();

    if (!is_dir(public_path('img/barcode'))) {
        File::makeDirectory(public_path('img/barcode'));
    }

    $barcode->setStorPath(public_path('img/barcode'));
    $path = $barcode->getBarcodePNGPath($str, "C39E", 3, 33, array(69, 78, 89));

    return '/img/barcode/'. basename($path);
}

function can_delete_user($user_id)
{
    $user = User::find($user_id);

    if ($user->id == auth()->user()->id) {
        return false;
    }

    if ($user->level == 'creator') {
        return false;
    }

    if (!in_array(auth()->user()->level, ['admin', 'creator'])) {
        return false;
    }

    if (auth()->user()->level == 'creator') {
        return true;
    }

    if (Gate::allows('roles-admin')) {
        return true;
    }

    if (Gate::allows('users-admin') && in_array($user->level, ['user', 'new'])) {
        return true;
    }

    return false;
}

function str_random($length = 20)
{
    $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
}

function get_date($date, $format = null)
{
    return $format ? $date->format($format) : $date;
}
