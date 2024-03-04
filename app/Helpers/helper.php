<?php

function activeRoute($route, $isClass = false): string
{
    $requestUrl = request()->is($route);

    if($isClass) {
        return $requestUrl ? $isClass : '';
    } else {
        return $requestUrl ? 'active' : '';
    }
}

function authSession($force=false){
    $session = new \App\Models\User;
    if($force){
        $user = \Auth::user()->getRoleNames();
        \Session::put('auth_user',$user);
        $session = \Session::get('auth_user');
        return $session;
    }
    if(\Session::has('auth_user')){
        $session = \Session::get('auth_user');
    }else{
        $user = \Auth::user();
        \Session::put('auth_user',$user);
        $session = \Session::get('auth_user');
    }
    return $session;
}

function checkMenuRoleAndPermission($menu)
{
    if (\Auth::check()) {
        if ($menu->data('role') == null && auth()->user()->hasRole('admin')) {
            return true;
        }

        if($menu->data('permission') == null && $menu->data('role') == null) {
            return true;
        }

        if($menu->data('role') != null) {
            if(auth()->user()->hasAnyRole(explode(',', $menu->data('role')))) {
                return true;
            }
        }

        if($menu->data('permission') != null) {
            if(auth()->user()->can($menu->data('permission')) ) {
                return true;
            }
        }
    }

    return false;
}

function checkRolePermission($role,$permission){
    try{
        if($role->hasPermissionTo($permission)){
            return true;
        }
        return false;
    }catch (Exception $e){
        return false;
    }
}

function demoUserPermission(){
    if(\Auth::user()->hasRole('demo_admin')){
        return true;
    }else{
        return false;
    }
}
