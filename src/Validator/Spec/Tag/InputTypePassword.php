<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class InputTypePassword extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'INPUT [type=password]';

    const SPEC = [
        SpecRule::TAG_NAME => Element::INPUT,
        SpecRule::SPEC_NAME => 'INPUT [type=password]',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::TYPE,
                SpecRule::MANDATORY => true,
                SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                SpecRule::VALUE_CASEI => [
                    'password',
                ],
            ],
            [
                SpecRule::NAME => '[type]',
                SpecRule::DISABLED_BY => [
                    Attribute::AMP4EMAIL,
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            AttributeList\InputCommonAttr::ID,
            AttributeList\NameAttr::ID,
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-form/',
        SpecRule::MANDATORY_ANCESTOR => 'FORM [method=POST]',
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
    ];
}
