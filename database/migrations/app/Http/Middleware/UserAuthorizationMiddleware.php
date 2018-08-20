<?php

namespace App\Http\Middleware;

use App\Models\Session;
use App\Traits\ResponseTrait;
use Closure;

class UserAuthorizationMiddleware {
    use ResponseTrait;
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
            $this->err_code = 403;
            $this->err_message = 'Sorry, no session such exist for any user';
            return response()->json($this->responseSerialize(False));
        }

        return $next($request);
    }
}
