<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rules;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class RegisteredUserController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'firstName' => ['required', 'string', 'max:255'],
            'lastName'  => ['required','string', 'max:255'],
            'address1'  => ['required','string', 'max:255'],
            'city'  => ['required','string', 'max:255'],
            'state'  => ['required','string', 'max:255'],
            'postalCode'  => ['required','string'],
            'dateOfBirth'  => ['required','string'],
            'ssn'  => ['required','string'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'city' => $request->city,
            'state' => $request->state,
            'address1' =>$request->address1,
            'postalCode' => $request->postalCode,
            'dateOfBirth' => $request->dateOfBirth,
            'ssn' => $request->ssn,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);
        return response()->json([
            'message' => 'User created successfully',
        ]);
    }
}
