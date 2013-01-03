<?php

/*
|--------------------------------------------------------------------------
| Default controller for our bundle
|--------------------------------------------------------------------------
*/

//
// IMPORTANT! Make sure to replace 'bundlestarter' to the name of your bundle below
//

class bundlestarter_BundleController_Controller extends Base_Controller
{

	public function action_index(){

		//
		// To access variables from the config/options.php you can use the following:
		// $var_name = Config::get('bundle_name::options.option1');
		//

		$bundle_model = new Bundlemodel();
		return View::make('bundlestarter::index')->with('data', $bundle_model);

	}

}