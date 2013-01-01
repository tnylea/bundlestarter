<?php

/*
|--------------------------------------------------------------------------
| Default route for our bundle
|--------------------------------------------------------------------------
*/

$bundle_name = $bundle;

Route::get('(:bundle)', $bundle_name . '::bundlecontroller@index');