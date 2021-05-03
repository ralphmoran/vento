<?php

# Autoloader

include "./traits/Chainable.php";
include "./classes/DynamicAccess.php";


use Classes\DynamicAccess;

(new DynamicAccess())->getMethods();