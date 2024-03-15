<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\CommunitiyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyManagerController;
use App\Http\Controllers\UserHOAController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Admin\BoardMemberController;
use App\Http\Controllers\Admin\HOAController;
use App\Http\Controllers\Admin\MailController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\StateController;

use App\Models\HOA;
use App\Models\UserHOA;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $hoaCount = HOA::count();
    $userhoacount = UserHOA::count();
    
    return view("dashboard", ['hoaCount' => $hoaCount,'userhoacount' => $userhoacount]);
    
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/communities', [CommunitiyController::class, 'index'])->name('communities');
    Route::post('/add-community', [CommunitiyController::class, 'store'])->name('add-community');
    Route::get('/community-list', [CommunitiyController::class, 'communityList'])->name('community-list');
    Route::get('/edit-community/{id}', [CommunitiyController::class, 'edit'])->name('edit-community');
    Route::put('/update/{id}', [CommunitiyController::class, 'update'])->name('update');
    Route::put('/delete/{id}',[CommunitiyController::class,'destroy'])->name('delete');

    Route::get('/board-member/{id}', [BoardMemberController::class, 'showBoardMemberForm'])->name('board-member');
    Route::post('/add-board-member/{id}', [BoardMemberController::class, 'store'])->name('add-board-member');
    Route::get('/board-member-list', [BoardMemberController::class, 'show'])->name('board-member-list');
    Route::get('/edit-board-member/{id}', [BoardMemberController::class, 'edit'])->name('edit-board-member');
    Route::put('/update-board-member/{id}', [BoardMemberController::class, 'update'])->name('update-board-member');
    Route::put('/delete-board-member/{id}',[BoardMemberController::class,'destroy'])->name('delete-board-member');

    Route::get('/hoa', [HOAController::class, 'index'])->name('hoa');
    Route::post('/add-hoa', [HOAController::class, 'store'])->name('add-hoa');
    Route::get('/hoa-list', [HOAController::class, 'show'])->name('hoa-list');
    Route::get('/edit-hoa/{id}', [HOAController::class, 'edit'])->name('edit-hoa');
    Route::put('/update-hoa/{id}', [HOAController::class, 'update'])->name('update-hoa');
    Route::put('/delete-hoa/{id}',[HOAController::class,'destroy'])->name('delete-hoa');
    Route::get('/view-hoa/{id}', [HOAController::class, 'view'])->name('view-hoa');
    Route::get('/hoa/search', [HOAController::class,'search'])->name('search-hoa-data');
    Route::put('/delete-all-hoa', [HOAController::class, 'deleteMultiple'])->name('delete-all-hoa');

    Route::get('/mail/{id}', [MailController::class, 'index'])->name('mail');
    Route::post('/send-email', [MailController::class, 'sendEmail'])->name('send-email');
    Route::get('/hoa-mail/{id}', [MailController::class, 'hoamail'])->name('hoa-mail');
    Route::post('/send-hoa-mail', [MailController::class, 'sendHoamail'])->name('send-hoa-mail');

    Route::get('/setting', [SettingController::class, 'index'])->name('setting');
    Route::post('/save-smtp', [SettingController::class, 'save'])->name('save-smtp');
    Route::put('/profile-setting', [SettingController::class, 'update'])->name('profile-setting');
    Route::any('/password', [SettingController::class, 'updatepassword'])->name('password');
    
    Route::post('/heading1-setting', [SettingController::class, 'updateHeading1'])->name('heading1');
    Route::post('/heading2-setting', [SettingController::class, 'updateHeading2'])->name('heading2');
    Route::any('/url-setting', [SettingController::class, 'updateURLHeading'])->name('url');
    
});

require __DIR__ . '/auth.php';

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/communityList/{county}',[HomeController::class,'communities'])->name('community');
Route::get('/board-members/{id}',[HomeController::class,'boardmember'])->name('boardMembers');
Route::any('/hoaList/{id}',[HomeController::class,'hoa'])->name('hoaList');

Route::post('/search-community',[SearchController::class,'search'])->name('search');
Route::post('/search-hoa',[SearchController::class,'searchHoa'])->name('search-hoa');
Route::post('/search-hoa-suggestions',[SearchController::class,'getHoaSuggestions'])->name('search-hoa-suggestions');



Route::post('/user-add-hoa',[UserHOAController::class,'store'])->name('user-add');
Route::get('/user-hoa-list',[UserHOAController::class,'show'])->name('user-hoa-list');
Route::put('/delete-user-hoa/{id}',[UserHOAController::class,'destroy'])->name('delete-user-hoa');
Route::any('/copy-data/{id}',[UserHOAController::class,'copyData'])->name('copy-data');
Route::get('/view-user-hoa/{id}', [UserHOAController::class, 'view'])->name('view-user-hoa');
Route::get('/user-hoa/search', [UserHOAController::class,'search'])->name('search-hoa-name');
Route::put('/delete-all-user-hoa', [UserHOAController::class, 'deleteMultiple'])->name('delete-all-user-hoa');


Route::get('/response',[InquiryController::class,'response'])->name('response');
Route::post('/enquiry',[InquiryController::class,'store'])->name('enquiry');
Route::get('/enquiry-list',[InquiryController::class,'show'])->name('enquiry-list');
Route::get('/edit-enquiry/{id}',[InquiryController::class,'edit'])->name('edit-enquiry');
Route::put('/update-enquiry/{id}',[InquiryController::class,'update'])->name('update-enquiry');
Route::put('/delete-enquiry/{id}',[InquiryController::class,'destroy'])->name('delete-enquiry');
Route::get('/enquiry-view/{id}',[InquiryController::class,'view'])->name('enquiry-view');
Route::get('/enquiry/search', [InquiryController::class,'search'])->name('search-enquiry');
Route::put('/delete-all-enquiry', [InquiryController::class, 'deleteMultiple'])->name('delete-all-enquiry');


Route::get('/question-list',[PropertyManagerController::class,'index'])->name('question-list');
Route::post('/question',[PropertyManagerController::class,'store'])->name('question');
Route::put('/delete-question-list/{id}',[PropertyManagerController::class,'destroy'])->name('delete-question-list');

Route::get('/state',[StateController::class,'index'])->name('state');

Route::get('/become-board-member', function () {
    return view('homeComponents/boardmember');
})->name('become-board-member');

Route::get('/hoa-pros-and-cons', function () {
    return view('homeComponents/prosandcons');
})->name('hoa-pros-and-cons');

Route::get('/hoa-vs-non-hoa', function () {
    return view('homeComponents/hoavsnonhoa');
})->name('hoa-vs-non-hoa');

Route::get('/fl-real-estate', function () {
    return view('homeComponents/flrealestate');
})->name('fl-real-estate');

Route::get('/contact', [ContactusController::class, 'index'])->name('contact');
Route::post('/contact-us', [ContactusController::class, 'store']);

Route::get('/privacy-policy', function () {
    return view('homeComponents/privacypolicy');
})->name('privacy-policy');

Route::get('/terms-conditions', function () {
    return view('homeComponents/terms');
})->name('terms-conditions');

Route::get('/website-disclaimer', function () {
    return view('homeComponents/website');
})->name('website-disclaimer');

