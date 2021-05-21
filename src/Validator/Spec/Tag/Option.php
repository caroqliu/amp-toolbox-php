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

final class Option extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'OPTION';

    const SPEC = [
        SpecRule::TAG_NAME => Element::OPTION,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::DISABLED,
            ],
            [
                SpecRule::NAME => Attribute::LABEL,
            ],
            [
                SpecRule::NAME => Attribute::SELECTED,
            ],
            [
                SpecRule::NAME => Attribute::VALUE,
            ],
            [
                SpecRule::NAME => '[disabled]',
            ],
            [
                SpecRule::NAME => '[label]',
            ],
            [
                SpecRule::NAME => '[selected]',
            ],
            [
                SpecRule::NAME => '[value]',
            ],
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-form/',
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
            Format::AMP4EMAIL,
        ],
    ];
}
