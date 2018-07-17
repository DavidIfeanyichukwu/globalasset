<?php

Route::group(['as' => 'voyager.'], function () {

   event(new Routing());



   $namespacePrefix = '\\'.config('voyager.controllers.namespace').'\\';



   Route::get('login', ['uses' => $namespacePrefix.'VoyagerAuthController@login',     'as' => 'login']);

   Route::post('login', ['uses' => $namespacePrefix.'VoyagerAuthController@postLogin', 'as' => 'postlogin']);



   Route::group(['middleware' => 'admin.user'], function () use ($namespacePrefix) {

       event(new RoutingAdmin());



Route::get('htmltopdfview',array('as'=>'htmltopdfview','uses'=>'ProductController@htmltopdfview'))



       

   });

});

];
