<?php

namespace base;

use hidev\tests\functional\Tester;

class ReadmeGoalTest extends \Codeception\TestCase\Test
{
    /**
     * @var \FunctionalTester
     */
    protected $tester;

    protected function _before()
    {
        $this->tester = new Tester($this);
    }

    protected function _after()
    {
        $this->tester = null;
    }

    /**
     * Test minimal
     */
    public function testMinimal()
    {
        $this->tester->hidev('init the-vendor/new-test-package --norequire');
        $this->tester->appendFile('.hidev/config.yml','
vendor:
    name:    the-vendor
        ');
        $this->tester->hidev('README.md');
        $this->tester->assertFileHas('README.md',[
            "New Test Package\n----------------",
            '## Installation',
            'The preferred way to install this project is through [composer](http://getcomposer.org/download/).',
            'php composer.phar create-project "the-vendor/new-test-package:*" directory2install',
            '## Licence',
            '[No license](http://choosealicense.com/licenses/no-license)',
            'Copyright © 2015, The Vendor',
        ]);

    }

    /**
     * Test options: init the-vendor/new-package
     */
    public function testMore()
    {
    }


}