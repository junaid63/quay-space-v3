<?php

namespace App\Http\Controllers;

use App\Http\Requests\SwitchAccountRequest;
use Auth;
use Symfony\Component\HttpFoundation\Response;

class AccountSwitchController extends Controller
{
    public function __invoke(SwitchAccountRequest $request)
    {
        $target = $request->targetUser();
        $request->session()->put('original_user_id', Auth::id());
        Auth::login($target);

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
