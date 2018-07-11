<?php

Route::get('/', function() {
    return view ('layout');
});

Route::get('/events', function() {
    return view ('events');
});
