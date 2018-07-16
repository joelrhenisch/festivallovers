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
