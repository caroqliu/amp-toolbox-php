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

final class Input extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'INPUT';

    const SPEC = [
        SpecRule::TAG_NAME => Element::INPUT,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::NO_VERIFY,
                SpecRule::VALUE => [
                    '',
                ],
                SpecRule::DISABLED_BY => [
                    Attribute::AMP4EMAIL,
                ],
            ],
            [
                SpecRule::NAME => Attribute::TYPE,
                SpecRule::DISALLOWED_VALUE_REGEX => '(^|\s)(file|image|password|)(\s|$)',
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
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
            Format::AMP4EMAIL,
        ],
    ];
}
