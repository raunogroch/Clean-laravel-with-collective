<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class RedirectIfAuthenticated
{
    protected $auth;
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {
        if ($this->auth->check()) {
            switch ($this->auth->user()->roles->name){
                case 'administrator':
                    return redirect()->to('administrator');
                    break;
                case 'player':
                    return redirect()->to('player');
                    break;
                default :
                    return redirect()->to('login');
                    break;
            }
        }
        return $next($request);
    }

}
