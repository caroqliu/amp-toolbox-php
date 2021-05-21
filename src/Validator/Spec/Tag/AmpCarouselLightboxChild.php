<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Format;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpCarouselLightboxChild extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'AMP-CAROUSEL lightbox [child]';

    const SPEC = [
        SpecRule::TAG_NAME => '$REFERENCE_POINT',
        SpecRule::SPEC_NAME => 'AMP-CAROUSEL lightbox [child]',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::LIGHTBOX_THUMBNAIL_ID,
                SpecRule::VALUE_REGEX_CASEI => '^[a-z][a-z\d_-]*',
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
    ];
}
