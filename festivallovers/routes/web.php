<?php

Route::get('/', function() {
    return view ('layout');
});

Route::get('/events', function() {
    return view ('events');
});

Route::get('/filtering-sm', function() {
    return view ('filtering-sm');
});

Route::get('/eventdetail', function() {
    return view ('eventdetail');
});

Route::get('/ticketavaible', function() {
    return view ('ticketavaible');
});

Route::get('/ticketbuy', function() {
    return view ('ticketbuy');
});

Route::get('/login', function() {
    return view ('login');
});

Route::get('/payment', function() {
    return view ('payment');
});

Route::get('/filtering', function() {
    return view ('filtering-sm');
});
