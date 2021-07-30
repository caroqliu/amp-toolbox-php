<?php

namespace AmpProject\Validator\Spec;

use AmpProject\Tests\TestCase;

class ExtensionSpecTest extends TestCase
{
    use ExtensionSpec;

    const LATEST_VERSION = '1.0';

    const EXTENSION_SPEC = [
        SpecRule::NAME           => 'amp-dummy-extension',
        SpecRule::VERSION        => [
            '0.1',
            '2.0',
            '1.0',
            '0.2',
            'latest',
        ],
        SpecRule::REQUIRES_USAGE => 'NONE',
        SpecRule::EXTENSION_TYPE => 'CUSTOM_TEMPLATE',
    ];

    /**
     * @covers \AmpProject\Validator\Spec\ExtensionSpec::getExtensionName()
     */
    public function testGetExtensionName()
    {
        $this->assertEquals('amp-dummy-extension', $this->getExtensionName());
    }

    /**
     * @covers \AmpProject\Validator\Spec\ExtensionSpec::getLatestVersion()
     */
    public function testGetLatestVersion()
    {
        $this->assertEquals('1.0', $this->getLatestVersion());
    }

    /**
     * @covers \AmpProject\Validator\Spec\ExtensionSpec::getExtensionType()
     */
    public function testGetExtensionType()
    {
        $this->assertEquals('custom-template', $this->getExtensionType());
    }
}
