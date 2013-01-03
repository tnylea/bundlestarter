<?php

/*
|--------------------------------------------------------------------------
| Default route for our bundle
|--------------------------------------------------------------------------
*/

$bundle_name = $bundle;

Route::get('(:bundle)', $bundle_name . '::bundlecontroller@index');


/*
|--------------------------------------------------------------------------
| Example route for our bundle
|--------------------------------------------------------------------------
*/

//	Route::get('(:bundle)/something_else', 'bundle_name::controller_name@action');
//	Route::get('(:bundle)/something_else', function(){
//		return Veiw::make('bundle_name::view_name');
//	});
