<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\MobileController;
use App\Mail\VerificationEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::post('register', [AuthController::class, 'register']);
// Route::post('login',    [AuthController::class, 'login']);

// Route::middleware('auth:api')->group(function () {
//     Route::get('me',     [AuthController::class, 'me']);
//     Route::post('logout', [AuthController::class, 'logout']);
//     Route::post('refresh', [AuthController::class, 'refresh']);
//     Route::post('/klasifikasi', [MobileController::class, 'klasifikasi']);
// });
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    $user = $request->user();
    return response()->json([
        'id' => $user->id,
        'name' => $user->name,
        'email' => $user->email,
        'verified' => $user->isVerified(),
    ]);
});

Route::post('/sanctum/token', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        'device_name' => 'nullable',
    ]);

    $email = trim($request->input('email'));
    $password = trim($request->input('password'));
    $device_name = trim($request->input('device_name', 'default'));

    $user = User::where('email', $email)->first();

    if (! $user || ! Hash::check($password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    return response()->json([
        'token' => $user->createToken($device_name)->plainTextToken
    ]);
});

Route::post('/sanctum/register', function (Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|string|min:6|confirmed',
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'verification_token' => Str::random(64),
    ]);

    Mail::to($user->email)->send(new VerificationEmail($user));

    return response()->json([
        'message' => 'User created successfully',
        'user' => $user
    ], 200);
});

Route::post('/resend', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user) {
        return response()->json([
            'message' => 'User not found'
        ], 404);
    }

    Mail::to($user->email)->send(new VerificationEmail($user));

    return response()->json([
        'message' => 'Verification email sent successfully'
    ], 200);
});

Route::middleware('auth:sanctum')->get('/user/revoke', function (Request $request) {
    $user = $request->user();
    $user->tokens()->delete();
    return 'Tokens deleted';
});

Route::post('/klasifikasi', [MobileController::class, 'klasifikasi']);
Route::post('/riwayat', [MobileController::class, 'riwayat']);
