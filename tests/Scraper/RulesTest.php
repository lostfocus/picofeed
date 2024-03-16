<?php

namespace PicoFeed\Scraper;


class RulesTest extends \PHPUnit\Framework\TestCase
{
    public function testThatRulesAreValid()
    {
        foreach (glob(__DIR__.'/../../lib/PicoFeed/Rules/.*.php') as $filename) {
            if(method_exists($this, 'assertInternalType')) {
                $this->assertInternalType('array', include($filename), 'Rule invalid: '.$filename);
            } else {
                $this->assertIsArray(include($filename), 'Rule invalid: '.$filename);
            }
        }

        foreach (glob(__DIR__.'/../../lib/PicoFeed/Rules/*.php') as $filename) {
            if(method_exists($this, 'assertInternalType')) {
                $this->assertInternalType('array', include($filename), 'Rule invalid: '.$filename);
            } else {
                $this->assertIsArray(include($filename), 'Rule invalid: '.$filename);
            }
        }
    }
}
