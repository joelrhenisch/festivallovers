<?php

Route::get('/', function() {
    return view ('layout');
});

Route::get('/events', function() {
    return view ('events');
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
