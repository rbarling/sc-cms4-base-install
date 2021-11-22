<?php

use SilverStripe\Security\PasswordValidator;
use SilverStripe\Security\Member;

use SilverStripe\Core\Injector\Injector;

// remove PasswordValidator for SilverStripe 5.0
$validator = PasswordValidator::create();
// Settings are registered via Injector configuration - see passwords.yml in framework
Member::set_password_validator($validator);

$client = Injector::inst()->get(RaygunClient::class);
$client->SetVersion('123456');
