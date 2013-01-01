<?php

$bundle_name = $bundle;;

Autoloader::namespaces(array(
    $bundle_name => Bundle::path($bundle_name).'models',
));