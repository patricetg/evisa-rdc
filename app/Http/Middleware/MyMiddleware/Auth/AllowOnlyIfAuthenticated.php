<?php

namespace App\Http\Middleware\MyMiddleware\Auth;

use App\Http\Controllers\Library\UserController;
use Closure;
use Illuminate\Support\Facades\Session;

class AllowOnlyIfAuthenticated
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
        if(!$request->ajax() && !Session::has("connectedUserId"))
        {
            $data = [
                "status" => "echecTraitement",
                "data" => [
                    "primaryData" => [
                        "msg" => "Veuillez vous connecter."
                    ],
                    "secondaryData" => [

                    ]
                ]
            ];

            UserController::deleteConnectedUserData();

            return redirect()->route("login")->with($data);
        }


        return $next($request);
    }
}
