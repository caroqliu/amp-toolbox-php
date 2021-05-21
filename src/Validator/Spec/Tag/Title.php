<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class Title extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'title';

    const SPEC = [
        SpecRule::TAG_NAME => Element::TITLE,
        SpecRule::SPEC_NAME => 'title',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => '[text]',
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
    ];
}
