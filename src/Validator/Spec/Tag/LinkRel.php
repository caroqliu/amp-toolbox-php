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

final class LinkRel extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'link rel=';

    const SPEC = [
        SpecRule::TAG_NAME => Element::LINK,
        SpecRule::SPEC_NAME => 'link rel=',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::HREF,
            ],
            [
                SpecRule::NAME => Attribute::REL,
                SpecRule::MANDATORY => true,
                SpecRule::DISALLOWED_VALUE_REGEX => '(^|\s)(canonical|components|import|manifest|modulepreload|preload|serviceworker|stylesheet|subresource)(\s|$)',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            AttributeList\CommonLinkAttrs::ID,
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
        SpecRule::DISALLOWED_ANCESTOR => [
            'TEMPLATE',
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
    ];
}
