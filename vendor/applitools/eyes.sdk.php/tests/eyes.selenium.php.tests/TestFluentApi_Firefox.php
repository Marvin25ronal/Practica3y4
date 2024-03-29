<?php

namespace Tests\Applitools\Selenium;

require_once('TestFluentApi.php');

use Applitools\RectangleSize;
use Facebook\WebDriver\Remote\DesiredCapabilities;

class TestFluentApi_Firefox extends TestFluentApi
{
    /** @beforeClass */
    public static function setUpClass()
    {
        self::$forceFullPageScreenshot = false;
        self::$testSuitName = "Eyes Selenium SDK - Fluent API";
        parent::setUpClass();
    }

    public function setUp()
    {
        $this->viewportSize = new RectangleSize(800, 599);

        $this->desiredCapabilities = DesiredCapabilities::firefox();

        if (strcasecmp("TRUE", $_SERVER["APPLITOOLS_RUN_HEADLESS"]) == 0) {
            $this->desiredCapabilities->setCapability(
                'moz:firefoxOptions',
                ['args' => ['-headless']]
            );
        }
    }
}