<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ChangePasswordRequest;

class ProfileController extends Controller
{
   	public function changePasswordForm()
    {
        $login_user = auth()->user();

        return view('admin.profile.changepassword', compact('login_user'));
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        $data = $request->validated();
        $data['password'] = bcrypt($request->new_password);

        tap(auth()->user())->update($data);

        return redirect()
            ->route('dashboard')
            ->with('success', 'Your password successfully changed.');
    }
}
