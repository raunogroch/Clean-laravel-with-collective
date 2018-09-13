<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Player
{
    protected $auth;
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {
        switch ($this->auth->user()->roles->name){
            case 'administrator':
                return redirect()->to('administrator');
                break;
            case 'player':
//                return redirect()->to('player');
                break;
        }
        return $next($request);
    }
}
