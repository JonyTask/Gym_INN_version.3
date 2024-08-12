<<?php

    namespace App\Actions\Fortify;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\LoginRequest;
    use App\Models\User;
    use Illuminate\Contracts\Auth\StatefulGuard;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Hash;


    class AuthenticateController extends Controller
    {
        protected $guard;
        public const TOKEN_NAME = 'app_api_token';

        public function __construct(StatefulGuard $guard)
        {
            $this->guard = $guard;
        }

        public function login(LoginRequest $request){
            $user = User::where('email', $request->email)->first();

            if(! $user || ! Hash::check($request->password, $user->password)){
                return response()->json([
                    'message' => 'The provided credentials are incorrect.'
                ],401);
            }

            return response()->json([
                'accessToken' => $user->createToken(self::TOKEN_NAME)->plainTextToken
            ]);
        }
        
        public function logout(Request $request){
            $request->user()->currentAccessToken()->delete();
            return response()->json([
                'message' => 'ログアウトしました。'
            ],200);
        }
    }