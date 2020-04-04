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
//app()->bind('example',function(){    // wrapped up something into service container
//    return new \App\Example;         // // 2 seperate instances of Example class
//});
//app()->singleton('example',function(){    // same instances of Example class,this code will run max one time after it will fetch the existing object whenever you request it
//    return new \App\Example;
//});

//app()->singleton('\App\Services\Twitter',function (){
//    return new \App\Services\Twitter('api-key');
//});

//app()->singleton('twitter',function (){
//    return new \App\Services\Twitter('api-key');  //ProjectController@show
//});

//Route::get('/', function () {
//    dd(app(\Illuminate\Filesystem\Filesystem::class));

//    dd(app('example'),app('example'));

//    dd(app('App\Example'));     // Even if we do not bind anything in Service Container.First laravel looks for this in service container and if not found then looks for a class named Example(It will Auto resolve this class and return an instance)
//});


Route::get('/','PagesController@home');

Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contact');

//Route::get('/projects','ProjectsController@index');
//Route::get('/projects/create','ProjectsController@create');
//Route::post('/projects','ProjectsController@store');

Route::resource('/projects','ProjectsController');

Route::patch('/tasks/{task}','ProjectTasksController@update');
Route::post('/projects/{project}/tasks','ProjectTasksController@store');

//Route::get('/', function () {
//
////    $tasks = [
////        'GO to the store',
////        'Go to the market',
////        'Go to work',
////    ];
//
//    $foo = 'foo';
//
////    return view('welcome',[    // USUALLY USED
////        'tasks'=>$tasks,
//////        'test_data' => 'test_data'
////        'test_data' => '<script>alert("High Alert!")</script>'  // {!! !!} to display alert
////    ]);
//
////    return view('welcome')->withTasks($tasks)->withFoo($foo);  //Magic Methods, both name will be same
//
////    return view('welcome')->withTasks( $tasks = [
////        'GO to the store',
////        'Go to the market',
////        'Go to work',
////    ]);
//
//    return view('welcome')->with( ['tasks' => [
//        'GO to the store',
//        'Go to the market',
//        'Go to work',
//    ]
//    ]);
//
//});

//Route::get('/about', function () {
//    return view('about');
//});
//Route::get('/contact', function () {
//    return view('contact');
//});
