<?php

namespace PicoFeed\Scraper;


class RulesTest extends \PHPUnit\Framework\TestCase
{
    public function testThatRulesAreValid()
    {
        foreach (glob(__DIR__.'/../../lib/PicoFeed/Rules/.*.php') as $filename) {
            $this->assertIsArray(include($filename), 'Rule invalid: '.$filename);
        }

        foreach (glob(__DIR__.'/../../lib/PicoFeed/Rules/*.php') as $filename) {
            $this->assertIsArray(include($filename), 'Rule invalid: '.$filename);
        }
    }
}
