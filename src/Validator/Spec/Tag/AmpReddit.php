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

final class AmpReddit extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'AMP-REDDIT';

    const SPEC = [
        SpecRule::TAG_NAME => Extension::REDDIT,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::DATA_EMBEDLIVE,
                SpecRule::VALUE_CASEI => [
                    'false',
                    'true',
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_EMBEDPARENT,
                SpecRule::VALUE_CASEI => [
                    'false',
                    'true',
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_EMBEDTYPE,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_CASEI => [
                    'comment',
                    'post',
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_SRC,
                SpecRule::MANDATORY => true,
            ],
        ],
        SpecRule::ATTR_LISTS => [
            AttributeList\ExtendedAmpGlobal::ID,
        ],
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::FILL,
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
                Layout::FLEX_ITEM,
                Layout::NODISPLAY,
                Layout::RESPONSIVE,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::REDDIT,
        ],
    ];
}
