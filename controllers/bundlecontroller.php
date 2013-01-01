<?php

/*
|--------------------------------------------------------------------------
| Default controller for our bundle
|--------------------------------------------------------------------------
*/

class BundleStarter_BundleController_Controller extends Controller
{

	public function action_index(){

		return View::make('bundlestarter::index');

	}

}