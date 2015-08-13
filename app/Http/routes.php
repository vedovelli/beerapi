<?php

Route::get('/', function () {
    return 'API pronta para receber chamadas';
});

Route::get('cervejarias', ['middleware' => 'cors', function()
{
    return \Response::json(\App\Brewery::with('beers', 'geocode')->get(), 200);
}]);

Route::get('breweries', ['middleware' => 'cors', function()
{
    return \Response::json(\App\Brewery::with('beers', 'geocode')->get(), 200);
}]);

Route::get('cervejas', ['middleware' => 'cors', function()
{
    return \Response::json(\App\Beer::with('brewery')->paginate(10), 200);
}]);

Route::get('beers', ['middleware' => 'cors', function()
{
    return \Response::json(\App\Beer::with('brewery')->paginate(10), 200);
}]);
