
<?php

/**
 * Copyright (c) 2018-2021 Adshares sp. z o.o.
 *
 * This file is part of ADS PHP Client
 *
 * ADS PHP Client is free software: you can redistribute and/or modify it
 * under the terms of the GNU General Public License as published
 * by the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * ADS PHP Client is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty
 * of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with ADS PHP Client. If not, see <https://www.gnu.org/licenses/>
 */

namespace Adshares\Ads\Entity;

use DateTime;
use Exception;
use ReflectionClass;

/**
 * Base class for response entities.
 *
 * @package Adshares\Ads\Entity
 */
abstract class AbstractEntity implements EntityInterface
{
    final public function __construct()
    {
    }

    /**
     * Changes string with underscores to camelCase string. First letter is low.
     *
     * @param string $text text to change case
     * @return string text in camelCase
     */
    private static function toCamelCase(string $text): string
    {
        if (strpos($text, '_') !== false) {
            $text = str_replace(' ', '', ucwords(str_replace('_', ' ', $text)));
        }
        $text[0] = strtolower($text[0]);

        return $text;
    }

    /**
     * @param string $type
     * @param mixed $value
     * @return mixed
     */
    protected static function convertType(string $type, $value)
    {
        switch ($type) {
            case 'bool':
            case 'boolean':
                $value = (bool)$value;
                break;
            case 'int':
            case 'integer':
                $value = (int)$value;
                break;
            case 'float':
            case 'double':
                $value = (float)$value;
                break;
            case 'string':
                break;
            case '\DateTimeInterface':
            case 'DateTimeInterface':
                if (is_numeric($value)) { // unix timestamp
                    $date = new DateTime();
                    $date->setTimestamp((int)$value);
                    $value = $date;
                } else {
                    try {
                        $value = new DateTime($value);
                    } catch (Exception $exception) {
                        $value = null;
                    }
                }
                break;
            default:
                $value = self::defaultConvertType($type, $value);
                break;
        }

        return $value;
    }

    /**
     * @param string $type
     * @param mixed $value
     * @return mixed
     */
    protected static function defaultConvertType(string $type, $value)
    {
        if (preg_match('/(\S+)\[]/', $type, $matches)) {