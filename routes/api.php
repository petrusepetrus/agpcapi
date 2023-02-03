<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\EnquiryCommentController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\EnquiryStatusController;
use App\Http\Controllers\EnquiryTypeController;
use App\Http\Controllers\PhoneTypeController;
use App\Http\Controllers\PhoneUserController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->group(function(){
    Route::get('/auth', AuthController::class);
    Route::get('/users/{id}', function (Request $id) {
        return User::findOrFail($id);
    });

    Route::get('/user-exists/{email}',[UserController::class,'checkUserExists']);
    Route::get('/user-roles/{id}',[UserController::class,'getUserRoles']);
    Route::get('/user-permissions/{id}',[UserController::class,'getUserPermissions']);

    Route::get('/user/{id}',[UserController::class,'show']);
    Route::post('/user/{id}',[UserController::class,'update']);

    Route::get('/available-phone-types/user/{id}', [PhoneUserController::class, 'getAvailablePhoneTypes']);
    Route::post('/store-phone/user/{id}',[PhoneUserController::class,'store']);
    Route::post('/update-phone/user/{id}/phone/{phoneid}',[PhoneUserController::class,'update']);
    Route::delete('/delete-phone/user/{id}/phone/{phoneid}',[PhoneUserController::class,'destroy']);

    Route::get('/enquiries', [EnquiryController::class, 'searchEnquiries']);
    Route::get('/enquiry/{id}',[EnquiryController::class,'show']);
    Route::delete('/delete-enquiry/{id}',[EnquiryController::class,'destroy']);

    Route::get('/enquiry-statuses', [EnquiryStatusController::class, 'index']);

    Route::post('/create-enquiry-comment/enquiry/{id}',[EnquiryController::class,'addEnquiryComment']);
    Route::post('/update-enquiry-comment/enquiry/{id}',[EnquiryCommentController::class,'update']);
    Route::delete('/delete-enquiry-comment/{id}',[EnquiryCommentController::class,'destroy']);
    Route::get('/get-enquiry-comments/enquiry/{id}',[EnquiryController::class,'getEnquiryComments']);

    Route::post('/update-enquiry-status/{id}/status/{status}', [EnquiryController::class, 'updateEnquiryStatus']);
});

Route::get('/countries', [CountryController::class, 'getCountries']);
Route::get('/phone-types', [PhoneTypeController::class, 'index']);
Route::get('/enquiry-types', [EnquiryTypeController::class, 'index']);
Route::post('/store-enquiry',[EnquiryController::class,'store']);

Route::fallback(function () {
    return response()->json([
        'message' => 'Page Not Found. If error persists, contact your nominated representative.'], 404);
});

