<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Layout;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpSidebarAmp4email extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'amp-sidebar (AMP4EMAIL)';

    const SPEC = [
        SpecRule::TAG_NAME => Extension::SIDEBAR,
        SpecRule::SPEC_NAME => 'amp-sidebar (AMP4EMAIL)',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::SIDE,
                SpecRule::VALUE => [
                    'left',
                    'right',
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            AttributeList\ExtendedAmpGlobal::ID,
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-sidebar/',
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::NODISPLAY,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP4EMAIL,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::SIDEBAR,
        ],
    ];
}
