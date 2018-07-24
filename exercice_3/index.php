<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $ok = true;
    
    if(empty($_POST['make']) || strlen($_POST['make']) < 2)
    {
        // display error
        echo 'Make need at least 2 characters.';
        
        $ok = false;
    }
    
    if(empty($_POST['model']) || strlen($_POST['model']) < 2)
    {
        // display error
        echo 'Model needs at least 2 characters.';
        
        $ok = false;
    }
    
    if(filter_var($_POST['year'], FILTER_VALIDATE_INT) || strlen(string($_POST['year'])) != 4)
    {
        // display error
        echo 'Please enter a valid 4-digit date (for example 1995).';
        
        $ok = false;
    }
    
    if(empty($_POST['color']) || !in_array($_POST['color'], ['blue', 'red', 'green', 'yellow', 'black', 'grey']))
    {
        // display error
        echo 'Please enter a valid color (blue, red, green, yellow, black, grey)';
        
        $ok = false;
    }
    
    
    if($ok)
    {
        echo 'everything is ok';
    }
    else
    {
        http_response_code(400);
        echo 'you have a problem huston';
    }
    
}
else
{
    // display error
    http_response_code(405);
    echo 'nok';
}