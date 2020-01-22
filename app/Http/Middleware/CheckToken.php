<?php

namespace App\Http\Middleware;

use App\Helpers\Errors;
use Illuminate\Support\Facades\Cache;
use Closure;

class CheckToken
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

        if(!isset($_SERVER['HTTP_AUTHORIZATION']))
            Errors::generateError(["auth" => ['No token supplied']], 403, 'Auth failed');

        //if we have the Bearer {token}, strip it and use the token to authenticate
        $token = str_replace('Bearer ','', $_SERVER['HTTP_AUTHORIZATION']);

        //Throw error if we don't have a token
        if(empty($token))
            Errors::generateError(["auth" => 'Supplied token is not valid'], 403, 'Auth failed');

        //Check if the Token supplied is the same as the secret Token
        dd($token);
        if($token === 'mBu7IB6nuxh8RVzJ61f4') {
            //Return the response
            $response = $next($request);
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        }

        //Default return an error
        Errors::generateError(["auth" => 'Supplied token is not valid'], 403, 'Auth failed');
    }
}
