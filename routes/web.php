<?php
// select from table Notes
Route::get('/', 'NoteController@show');

// insert to table Notes
Route::post('/insert', 'NoteController@create');

// delete note
Route::post('/delete', 'NoteController@delete');


// update note
Route::post('/update', 'NoteController@update');