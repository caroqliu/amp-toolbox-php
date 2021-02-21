<?php

namespace AmpProject\Optimizer\Configuration;

use AmpProject\Amp;
use AmpProject\Format;
use AmpProject\Optimizer\Exception\InvalidConfigurationValue;

/**
 * Configuration for the AutoExtensions transformer.
 *
 * @property string $format                  Specifies the AMP format. Defaults to `AMP`.
 * @property bool   $autoExtensionImport     Set to `false` to disable the auto extension import. Defaults to `true`.
 * @property bool   $experimentBindAttribute Enables experimental conversion of bind attributes. Defaults to `false`.
 *
 * @package ampproject/amp-toolbox
 */
final class AutoExtensionsConfiguration extends BaseTransformerConfiguration
{

    /**
     * Configuration key that specifies the AMP format.
     *
     * @var string
     */
    const FORMAT = 'format';

    /**
     * Configuration key that can disable the automatic importing of extension.
     *
     * @var bool.
     */
    const AUTO_EXTENSION_IMPORT = 'autoExtensionImport';

    /**
     * Configuration key that enables experimental conversion of bind attributes.
     *
     * @var bool
     */
    const EXPERIMENT_BIND_ATTRIBUTE = 'experimentBindAttribute';

    /**
     * Get the associative array of allowed keys and their respective default values.
     *
     * The array index is the key and the array value is the key's default value.
     *
     * @return array Associative array of allowed keys and their respective default values.
     */
    protected function getAllowedKeys()
    {
        return [
            self::FORMAT                    => Format::AMP,
            self::AUTO_EXTENSION_IMPORT     => true,
            self::EXPERIMENT_BIND_ATTRIBUTE => false,
        ];
    }

    /**
     * Validate an individual configuration entry.
     *
     * @param string $key   Key of the configuration entry to validate.
     * @param mixed  $value Value of the configuration entry to validate.
     * @return mixed Validated value.
     */
    protected function validate($key, $value)
    {
        switch ($key) {
            case self::FORMAT:
                if (! is_string($value)) {
                    throw InvalidConfigurationValue::forInvalidSubValueType(
                        self::class,
                        self::FORMAT,
                        'string',
                        gettype($value)
                    );
                }

                if (! in_array($value, Amp::FORMATS, true)) {
                    throw InvalidConfigurationValue::forUnknownSubValue(
                        self::class,
                        self::FORMAT,
                        Amp::FORMATS,
                        $value
                    );
                }
                break;

            case self::AUTO_EXTENSION_IMPORT:
                if (! is_bool($value)) {
                    throw InvalidConfigurationValue::forInvalidSubValueType(
                        self::class,
                        self::AUTO_EXTENSION_IMPORT,
                        'boolean',
                        gettype($value)
                    );
                }
                break;

            case self::EXPERIMENT_BIND_ATTRIBUTE:
                if (! is_bool($value)) {
                    throw InvalidConfigurationValue::forInvalidSubValueType(
                        self::class,
                        self::EXPERIMENT_BIND_ATTRIBUTE,
                        'boolean',
                        gettype($value)
                    );
                }
                break;
        }

        return $value;
    }
}
