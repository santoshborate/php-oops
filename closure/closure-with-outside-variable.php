<?php

// Create a user
$user = "Philip";

// Create a Closure
$greeting = function() use ($user) {
    echo "Hello $user";
};

// Greet the user
$greeting(); // Returns "Hello Philip"