Laravel Bundle Starter Kit
========

Use this starter kit template to kickstart your Laravel Bundles.	

## How to use:

Simply add the 'bundlestarter' folder to your bundles directory and then inside of your application/bundles.php add the following line to the bundles array:

```php
'bundlestarter' => array('auto' => true, 'handles' => 'bundlestarter'),
```

Change the folder name to your bundle name as well as the two occurrences of 'bundlestarter' in the bundles.php and you are good to go!

Then navigate to your application url followed by '/new_bundle_name' to view your new bundle!