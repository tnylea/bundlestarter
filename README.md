Laravel Bundle Starter Kit
========

Use this starter kit template to kickstart your Laravel Bundles.	

## How to use:

<ol>
	<li>
		<p>Rename the 'bundlestarter' folder in the bundles directory to the desired bundle name</p>
	</li>
	<li>
		<p>Add the line below to the array inside of the application/bundles.php file</p>
		<pre>'bundlestarter' => array('auto' => true, 'handles' => 'bundlestarter'),</pre>
		<p>Be sure to change the two occurrences of 'bundlestarter' to the name of your new bundle</p>
	</li>
	<li>
		<p>Finally, if you are going to use the controllers/bundlecontroller.php file, be sure to replace the 2 occurences of 'bundlestarter' to the name of your bundle</p>
	</li>
</ol>

<hr />

<h3>And, that's it!</h3>
<p>You can now start crafting your new bundle.</p>