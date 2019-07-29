 <?php



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('frontend.homepage');
// });
Route::get('/', 'Frontend\HomeController@index');

Route::get('/categorybycountry/{id}','Frontend\HomeController@categoryByCountry')->name('categorybycountry');

Route::get('/countryByUniversity/{id}','Frontend\HomeController@countryByUniversity')->name('countrybyuniversity');

Route::get('/universityByDepartment/{id}','Frontend\HomeController@universityByDepartment')->name('universitybydepartment');

Route::get('/confirmCourse/uni/{uni}/dep/{dep}','Frontend\HomeController@confirmCourse')->name('confirmCourse');




// Agency category show Frontend
//admin auth fa-assistive-listening-systems

Route::prefix('admin')->group(function(){

  Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('adashboard');
  Route::post('/logout','Auth\AdminLoginController@logout')->name('admin.logout');

});








Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/about', function () {
    return view('frontend.about');
});


// Route::get('/admin', function () {
//     return view('admin.dashboard');
// });
Route::get('/agencycategory','Admin\AgencyController@index')->name('agencycategory');



Auth::routes();

// Route::get('/', 'HomeController@index');

Route::group(['prefix'=>'admin'],function(){
  Route::resource('/category','Admin\CategoryController');
  Route::resource('/country','Admin\CountryController');
  Route::resource('/university','Admin\UniversityController');
  Route::resource('/department','Admin\DepartmentController');
  Route::resource('/course','Admin\CourseController');


});
 // Category Active
Route::get('/unactive_category/{id}','Admin\CategoryController@unactive_category');
Route::get('/active_category/{id}','Admin\CategoryController@active_category');

// Country Active
Route::get('/unactive_country/{id}','Admin\CountryController@unactive_country');
Route::get('/active_country/{id}','Admin\CountryController@active_country');

// University Active
Route::get('/unactive_university/{id}','Admin\UniversityController@unactive_university');
Route::get('/active_university/{id}','Admin\UniversityController@active_university');

// Department Active
Route::get('/unactive_department/{id}','Admin\DepartmentController@unactive_department');
Route::get('/active_department/{id}','Admin\DepartmentController@active_department');


Route::get('/course', function () {
    return view('frontend.coursedetails');
});

// Agency part here

Route::get('/user', function () {
    return view('agency.dashboard');
});
Route::get('/user','Agency\AgencyprofileContriller@index');


Route::group(['prefix'=>'user'],function(){
  Route::resource('/agencyprofile','Agency\AgencyprofileContriller');

});

Route::get('/unactive_agencycategory/{id}','Admin\AgencyController@unactive_agencycategory');
Route::get('/active_agencycategory/{id}','Admin\AgencyController@active_agencycategory');
