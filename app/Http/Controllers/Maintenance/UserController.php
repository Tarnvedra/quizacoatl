<?php

namespace App\Http\Controllers\Maintenance;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Maintenance\Resources\UpdatePasswordRequest;
use App\Models\User;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function userSettingsView(ViewFactory $view): View
    {
        return $view->make('maintenance.user-settings', [
            'user' => Auth::user()
        ]);
    }

    public function updatePassword(UpdatePasswordRequest $request, ResponseFactory $response, User $user): RedirectResponse
    {
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return $response->redirectTo('/home')->with('success', 'Password successfully updated.');
    }
}
