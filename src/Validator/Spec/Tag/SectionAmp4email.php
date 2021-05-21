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

final class SectionAmp4email extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'section (AMP4EMAIL)';

    const SPEC = [
        SpecRule::TAG_NAME => Element::SECTION,
        SpecRule::SPEC_NAME => 'section (AMP4EMAIL)',
        SpecRule::DISALLOWED_ANCESTOR => [
            'AMP-ACCORDION',
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP4EMAIL,
        ],
    ];
}
