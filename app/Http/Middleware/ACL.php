<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Resource;
use App\Role;
use App\User as User;

class ACL 
{
    /**
     * The names of the cookies that should not be encrypted.
     *
     * @var array
     */
    protected $except = [
        //
    ];

     public function handle($request, Closure $next, $guard = null)
    {
        //dd($thisResource = $request->route()->getAction());
        //return $next($request);
        //$user = Auth::user();
        $userRoles=User::find(1)->roles()->get()->toArray();
        $thisResource = $request->route()->getAction();

        $thisResourceID = Resource::where('resource_action',$thisResource)->pluck('id')->first();
        $roleResource = Resource::find($thisResourceID)->roles()->get()->first();//реализовать проверку а есть ли ресурс в бд
        $search = !true;
        foreach ($userRoles  as $key => $value) {
            if($roleResource['id']===$value['id']) {
               $search = true;
            }
        }
       
        //$userResources = $resource->resources()->get();
        if($search) {
            return $next($request);//пускаем
        } else {
           return redirect('/');//редиректим
        }
       
    }
}
