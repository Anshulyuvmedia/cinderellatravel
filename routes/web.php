<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\AdminStores;
use App\Http\Controllers\AdminViews;


Route::get('/admin', function () {
    return view('auth.login');
})
;

Route::post('/logoutuser', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logoutuser');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('AdminPanel.dashboard');
    })->name('dashboard');
});


// Frontend routes
Route::controller(WebsiteController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/aboutus', 'aboutus')->name('aboutus');
    Route::get('/careers', 'careers')->name('careers');
    Route::get('/contactus', 'contactus')->name('contactus');
    Route::get('/blogs', 'blogs')->name('blogs');
    Route::get('/blogdetail/{id}', 'blogdetail')->name('blogdetail');
    Route::get('/demo', 'demo')->name('demo');
    Route::get('/worldmap', 'worldmap')->name('worldmap');

    // destination routes
    Route::get('/destinations/europe', 'europe')->name('europe');
    Route::get('/destinations/asia', 'asia')->name('asia');
    Route::get('/destinations/dubai', 'dubai')->name('dubai');
    Route::get('/destinations/usa', 'usa')->name('usa');
    Route::get('/destinations/canada', 'canada')->name('canada');
    Route::get('/destinations/africa', 'africa')->name('africa');

    // services routes
    Route::get('/services/airticketing', 'airticketing')->name('airticketing');
    Route::get('/services/travelvisa', 'travelvisa')->name('travelvisa');
    Route::get('/services/travelinsurance', 'travelinsurance')->name('travelinsurance');
    Route::get('/services/hotelbooking', 'hotelbooking')->name('hotelbooking');
    Route::get('/services/holidaypackges', 'holidaypackges')->name('holidaypackges');
});

//Admin Panel Routes
Route::controller(AdminViews::class)->group(function () {
    Route::get('/admin/login', 'adminlogin')->name('adminlogin');
    Route::get('/admin/master', 'master')->name('master');
    Route::get('/admin/submaster', 'submaster')->name('submaster');
    Route::get('/admin/registerdeliveryboy', 'registerdeliveryboy')->name('registerdeliveryboy');
    Route::get('/admin/blogs', 'blogs')->name('blogsadmin');
    Route::get('/admin/addnewblog', 'addnewblog')->name('addnewblog');
    Route::get('/admin/userslist', 'userslist')->name('userslist');
    Route::get('/admin/myorders/{id}', 'myorders')->name('myorders');
    Route::get('/admin/allorders', 'allorders')->name('allorders');
    Route::get('/admin/vieworderinvoice/{orderid}/{userid}', 'adminorderinvoice')->name('adminorderinvoice');
    Route::get('/admin/getordersbystatus/{selectedStatus}', 'getordersbystatus')->name('getordersbystatus');
    Route::get('/admin/userprofile/{id}', 'userprofile')->name('admin.userprofile');
    Route::get('/admin/adminprofile', 'adminprofile')->name('admin.adminprofile');
    Route::get('/admin/editBlog/{id}', 'editBlog')->name('admin.editBlog');
});

Route::controller(AdminStores::class)->group(function () {
    Route::post('/admin/storemaster', 'storemaster')->name('storemaster');
    Route::post('/admin/storesubmaster', 'storesubmaster')->name('storesubmaster');
    Route::get('/admin/getsubmasterajax/{selectedCat}', 'getsubmasterajax')->name('getsubmasterajax');
    Route::post('/admin/updatesubmaster', 'updatesubmaster')->name('updatesubmaster');
    Route::get('/admin/deletemaster/{id}', 'deletemaster')->name('deletemaster');
    Route::post('/admin/updatemaster', 'updatemaster')->name('updatemaster');
    Route::post('/admin/updatesubmaster', 'updatesubmaster')->name('updatesubmaster');
    Route::get('/admin/filterservice/{selectedtype}', 'filterservice')->name('filterservice');
    Route::post('/admin/insertform', 'insertform')->name('insertform');
    Route::get('/admin/getattributes/{servicetype}/{servicename}', 'getattributes')->name('getattributes');
    Route::get('/admin/deleteattribute/{id}', 'deleteattribute')->name('deleteattribute');
    Route::post('/admin/updateattributes', 'updateattributes')->name('updateattributes');
    Route::post('/admin/insertpricingform', 'insertpricingform')->name('insertpricingform');
    Route::get('/admin/deleteuser/{id}', 'deleteuser')->name('deleteuser');
    Route::post('/admin/registerboy', 'registerboy')->name('registerboy');
    Route::get('/admin/deletedelivery/{id}', 'deletedelivery')->name('deletedelivery');
    Route::post('/admin/updatedelivery', 'updatedelivery')->name('updatedelivery');
    Route::post('/admin/updateactivationstatus', 'updateactivationstatus')->name('updateactivationstatus');
    Route::post('/admin/updateorderstatus', 'updateorderstatus')->name('updateorderstatus');
    Route::post('/admin/filterordersbydates', 'filterordersbydates')->name('filterordersbydates');
    Route::post('/admin/filterusersbydate', 'filterusersbydate')->name('filterusersbydate');
    Route::post('/admin/filteruserbymobile', 'filteruserbymobile')->name('filteruserbymobile');
    Route::post('/admin/updateCompulsory', 'updateCompulsory')->name('updateCompulsory');
    Route::post('/admin/update-user-roles', 'updateuserroles')->name('updateuserroles');
    Route::post('/admin/newAdduserAdmin', 'newAdduserAdmin')->name('newAdduserAdmin');
    Route::get('/admin/deleteUser/{id}', 'deleteUser')->name('deleteUser');
    Route::post('/change-passoword', 'changepassword')->name('admin.changepassword');
    Route::post('/storeblog', 'storeblog')->name('admin.storeblog');
    Route::post('/updateblog', 'updateblog')->name('admin.updateblog');
    Route::get('/deleteblog/{id}', 'deleteblog')->name('deleteblog');

});
