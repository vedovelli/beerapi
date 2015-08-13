<?php

Route::get('/', function () {
    return 'API pronta para receber chamadas';
});

Route::get('cervejarias', ['middleware' => 'cors', function()
{
    return \Response::json(\App\Brewery::with('beers', 'geocode')->paginate(10), 200);
}]);

Route::get('cervejas', ['middleware' => 'cors', function()
{
    return \Response::json(\App\Beer::with('brewery')->paginate(10), 200);
}]);
