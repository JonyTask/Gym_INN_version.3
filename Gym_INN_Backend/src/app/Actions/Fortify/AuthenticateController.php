<<?php

    namespace App\Actions\Fortify;

    use App\Http\Controllers\Controller;
    use Illuminate\Contracts\Auth\StatefulGuard;

    class AuthenticateController extends Controller
    {
        protected $guard;

        public function __construct(StatefulGuard $guard)
        {
            $this->guard = $guard;
        }

        public function store(){}
        public function destroy(){}
    }