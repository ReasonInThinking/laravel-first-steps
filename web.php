<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    $wishes = ['Learning Laravel', 'Buy a new PC', 'Improve mental fitness'];
    return view('my_wishes', ['data' => $wishes]);
});
