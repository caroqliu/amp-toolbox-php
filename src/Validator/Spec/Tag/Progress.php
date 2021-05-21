<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class Progress extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'PROGRESS';

    const SPEC = [
        SpecRule::TAG_NAME => Element::PROGRESS,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::MAX,
            ],
            [
                SpecRule::NAME => Attribute::VALUE,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
            Format::AMP4EMAIL,
        ],
    ];
}
