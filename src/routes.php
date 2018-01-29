<?php

Route::get('currency', 'Teknomuslim\CurrencyFormatter\Controllers\CurrencyFormatterController@greeting');
Route::get('currency/format/{currency}/{number}', 'Teknomuslim\CurrencyFormatter\Controllers\CurrencyFormatterController@format');
