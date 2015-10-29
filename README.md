[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/tijo15/flash-message/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/tijo15/flash-message/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/tijo15/flash-message/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/tijo15/flash-message/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/tijo15/flash-message/badges/build.png?b=master)](https://scrutinizer-ci.com/g/tijo15/flash-message/build-status/master)

Flash messages
=========

School project to create a module for the Anax MVC framework.

Flash Messages lets you add flash messages to the Anax mvc. 
There are 4 different messages which has a css design to them:
Approved, Information, Error and Warning. 

You can easily add your own messages but you have to specify the design for them in the flash.css file. 

**How to install**

1. To install, use composer and add this line: "require": {"tijo15/flash-message": "dev-master" }

2. To access the controller use this in your frontcontroller: 

// Include the essential settings.

require __DIR__.'/config.php'; 

// Create services and inject into the app. 

$di  = new \Anax\DI\CDIFactoryDefault();

// Adds the Flash controller

$di->setShared('flashMessages', function() use ($di){
    $flashMessages = new tijo15\FlashMessage\FlashController($di);
    return $flashMessages;
}); 

**How to use**

Add the route in your front controller:

// Test Route
$app->router->add('', function() use ($app) {

    $app->theme->setTitle("Testing flash"); 

    //Code to test each message, including a default message(Test). 
    $app->flashMessages->addMessage('Godkänt!', 'success');
    $app->flashMessages->addMessage('Information', 'info');
    $app->flashMessages->addMessage('Varning!', 'warning');
    $app->flashMessages->addMessage('Error', 'error');
    $app->flashMessages->addMessage('Test', 'Test');

    //Adds the view to display the messages
    $app->views->add('flash/flash', [ 
        'content' => $app->flashMessages->getFlashMessages(),
        ]); 
 
});


If you want to add a new message you need to add a background color to flash.css like this

.newmsg {
background-color:#f0cb11;
}

Make sure that the name in the css corresponds to the name in the addMessage function like this:
$app->flashMessages->addMessage('Test new msg', 'newmsg');