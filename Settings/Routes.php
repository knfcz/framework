<?php
//Adding all your routes here
/*
Route::addRoute('GET', 'my/route/@id', 'MyController')
    ->using('@id', '[1-9]+');
    ->addGET('hello')
    ->addGET('world');
*/
R::addRoute('GET', 'index', 'Default::abs');