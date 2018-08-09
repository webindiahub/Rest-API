<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

/**
 * Class UserManagementController
 * @package App\Http\Controllers
 */
class UserManagementController extends Controller {
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

        $response = Users::create($fieldMapper);
        return response()->json($response);
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

        $response = Users::where($condition)->firstOrFail();

        return response()->json($response);
    }
}