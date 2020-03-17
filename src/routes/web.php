<?php
Route::group(['namespace' => 'laravelstudio\calculator'], function () {
    Route::get('/calculator', 'CalculatorController@calculator');
});