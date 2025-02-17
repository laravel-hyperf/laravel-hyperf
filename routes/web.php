<?php

declare(strict_types=1);

use LaravelHyperf\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
