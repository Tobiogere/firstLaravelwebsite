<?php

use Illuminate\Support\Facades\Route;

//Get route example
Route::get('/', function () {
    return view('home');
});

//POST route example
Route::post("/formsubmitted", function () {
    return "Form submitted!";
})->name('formsubmitted');


// Route::get('/portfolio', function () {
//     return view('portfolio');
// });

//parameter using routes
// Route::get('/portfolio/{firstname}', function ($firstname) {
//     return $firstname;
// });


// //named routes
// Route::get('/test', function () {
//     return "This is a test!";
// })->name("testpage");


//Grouped routes
// Route::prefix("portfolio")->group(function () {

//     Route::get('/company', function () {
//         return view('company');
//     });

//     Route::get('/organization', function () {
//         return view('organization');
//     });
// });
