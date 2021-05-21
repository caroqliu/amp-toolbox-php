<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class InputMaskCustomMask extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'input [mask] (custom mask)';

    const SPEC = [
        SpecRule::TAG_NAME => Element::INPUT,
        SpecRule::SPEC_NAME => 'input [mask] (custom mask)',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::MASK,
                SpecRule::MANDATORY => true,
                SpecRule::DISALLOWED_VALUE_REGEX => '(payment-card|date-dd-mm-yyyy|date-mm-dd-yyyy|date-mm-yy|date-yyyy-mm-dd)',
                SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',
            ],
            [
                SpecRule::NAME => Attribute::MASK_TRIM_ZEROS,
                SpecRule::VALUE_REGEX => '\d+',
            ],
            [
                SpecRule::NAME => '[type]',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            AttributeList\AmpInputmaskCommonAttr::ID,
            AttributeList\InputCommonAttr::ID,
            AttributeList\NameAttr::ID,
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-inputmask/',
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::INPUTMASK,
        ],
    ];
}
