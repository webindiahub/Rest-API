<?php

namespace App\Http\Middleware;

use App\Models\Session;
use Closure;

class UserAuthorizationMiddleware {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        $condition = array(
            ['session_id', '=', $request->header('session')]
        );
        $current_user = Session::with('user')->where($condition)->first();

        if(empty($current_user)) {
            return response()->json(['error' => 'Sorry, no session such exist for any user']);
        }

        return $next($request);
    }
}
