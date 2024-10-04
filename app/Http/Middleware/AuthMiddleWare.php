<?php

namespace App\Http\Middleware;

use Closure;
use App\Helper\JWTToken;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->cookie('token');

         $data = JWTToken::verifyToken($token);
         if ($data === "unauthorized") {
            return redirect('/login-page');
        } 
        $request->headers->set('email', $data->userEmail);
        $request->headers->set('id', $data->userId);

        return $next($request);
    }
}
