<?php

namespace App\Http\Middleware;

use Closure;
use Config; 

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // if ($request->age <= 200) {
        //     return redirect('home');
        // }

        $subdomain =  $request->account;

        Config::set('database.connections.mysql.database', $subdomain );

        echo  Config::get('database.connections.mysql.database');

        //set the connection


        return $next($request);
    }
}
