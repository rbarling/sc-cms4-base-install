<?php

use SilverStripe\Control\Director;
use SilverStripe\Control\HTTPRequest;
use SilverStripe\Core\Config\Config;
use SilverStripe\Dev\BuildTask;
use SilverStripe\Raygun\RaygunHandler;

class TriggerTestExtensionTask extends BuildTask
{
    protected $title = 'Trigger Test Exception';

    protected $description = 'Throws an exception. Useful for checking raygun integration is working as expected.';

    /**
     * Throw a test exception that is directed through raygun.
     *
     * @param HTTPRequest $request
     */
    public function run($request)
    {
//        $env = Director::get_environment_type();
//        Config::modify()->set(RaygunHandler::class, 'enabled', true);
        throw new \Exception("Test exception thrown from '$env' environment.");
    }
}
