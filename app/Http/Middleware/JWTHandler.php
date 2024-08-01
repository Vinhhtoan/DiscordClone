<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Tymon\JWTAuth\Facades\JWTAuth;

class JWTHandler
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response{
        try {
            $token = Cookie::get(env('JWT_COOKIE_KEY'));
            if (!$token) {
                return response()->json(['error' => 'Token not provided'], 401);
            }
            JWTAuth::setToken($token);
            $user = JWTAuth::authenticate();
        } catch (Exception $e) {
            return response()->json(['error' => 'Token invalid'], 401);
        }
        
        return $next($request);
    }   
}
