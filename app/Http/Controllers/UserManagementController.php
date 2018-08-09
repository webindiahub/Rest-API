<?php

namespace App\Http\Controllers;
use App\Models\Session;
use App\Models\Users;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;

/**
 * Class UserManagementController
 * @package App\Http\Controllers
 */
class UserManagementController extends Controller {
    use ResponseTrait;
    /**
     * UserManagementController constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * @param Request $request
     * @return mixed
     * @throws \Illuminate\Validation\ValidationException
     */
    public function register(Request $request) {
        $this->validate($request, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string',
            'gender' => 'required|string|in:male,female',
            'bio' => 'string'
        ], [
            'required' => ':attribute field is mandatory',
            'unique' => ':attribute already exists',
        ]);

        $fieldMapper = array(
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'password' => sha1($request->input('password')),
            'gender' => $request->input('gender'),
            'bio' => $request->input('bio', 'Bio not filled')
        );

        $this->data = Users::create($fieldMapper);
        return response()->json($this->responseSerialize());
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function retrieve(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|string',
        ], [
            'required' => ':attribute field is mandatory',
        ]);

        $condition = array(
            ['email', '=', $request->input('email')],
            ['password', '=', sha1($request->input('password'))]
        );

        $current_user = Users::where($condition)->firstOrFail();

        $fieldMapper = array(
            'user_id' => $current_user->id,
            'session_id' => hash_hmac('sha256', str_random(20), microtime()),
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent()
        );

        $current_session = Session::create($fieldMapper);

        $this->data = array(
            'profile' => $current_user,
            'session' => $current_session
        );
        return response()->json($this->responseSerialize());
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function profile(Request $request) {
        $condition = array(
            ['session_id', '=', $request->header('session')]
        );
        $this->data = Session::with('user')->where($condition)->firstOrFail();
        return response()->json($this->responseSerialize());
    }
}