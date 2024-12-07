<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureTokenIsValid
{
    public function handle(Request $request, Closure $next): Response
    {
        $validKey = '1234'; // Replace this with your actual token or key logic

        if ($request->input('key') !== $validKey) {
            return response()->json(['error' => 'Invalid key'], 403); // Forbidden
        }

        return $next($request);
    }
}
