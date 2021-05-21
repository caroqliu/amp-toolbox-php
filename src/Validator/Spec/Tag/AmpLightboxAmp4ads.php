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

final class AmpLightboxAmp4ads extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'amp-lightbox [AMP4ADS]';

    const SPEC = [
        SpecRule::TAG_NAME => Extension::LIGHTBOX,
        SpecRule::SPEC_NAME => 'amp-lightbox [AMP4ADS]',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::ANIMATE_IN,
                SpecRule::VALUE_CASEI => [
                    'fade-in',
                    'fly-in-bottom',
                    'fly-in-top',
                ],
            ],
            [
                SpecRule::NAME => Attribute::CLOSE_BUTTON,
                SpecRule::MANDATORY => true,
            ],
            [
                SpecRule::NAME => Attribute::CONTROLS,
            ],
            [
                SpecRule::NAME => Attribute::FROM,
            ],
        ],
        SpecRule::ATTR_LISTS => [
            AttributeList\ExtendedAmpGlobal::ID,
        ],
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::NODISPLAY,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP4ADS,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::LIGHTBOX,
        ],
    ];
}
