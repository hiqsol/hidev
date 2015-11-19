<?php

/*
 * Task runner, code generator and build tool for easier continuos integration
 *
 * @link      https://hidev.me/
 * @package   hidev
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2014-2015, HiQDev (http://hiqdev.com/)
 */

namespace hidev\helpers;

use yii\helpers\Inflector;

/**
 * Hidev Helper.
 */
class Helper
{
    public static function bad2sep($str, $separator = '-')
    {
        return preg_replace('/[^a-zA-Z0-9-]/', $separator, $str);
    }

    public static function id2camel($id, $separator = '-')
    {
        return Inflector::id2camel(self::bad2sep($id, $separator), $separator);
        //return Inflector::id2camel(strtolower(self::bad2sep($id,$separator)), $separator);
    }

    public static function camel2id($name, $separator = '-', $strict = false)
    {
        return str_replace('--', '-', Inflector::camel2id(str_replace(' ', '', ucwords($name)), $separator, $strict));
    }

    public static function file2template($file, $separator = '-')
    {
        return trim($file, '.');
    }

    public static function csplit($input, $delimiter = ',')
    {
        if (is_array($input)) {
            return $input;
        }
        $res = explode($delimiter, $input);

        return array_values(array_filter(array_map('trim', $res)));
    }

    public static function asplit($input)
    {
        if (is_array($input)) {
            return $input;
        }
        $res = preg_split('/[\s,]+/', $input);

        return array_values(array_filter(array_map('trim', $res)));
    }

    public static function ksplit($input, $delimiter = ',')
    {
        if (is_array($input)) {
            return $input;
        }
        $res = self::csplit($input, $delimiter);

        return array_combine($res, $res);
    }

    public static function getPublicVars($subj)
    {
        return is_object($subj) ? get_object_vars($subj) : get_class_vars($subj);
    }

    public static function titleize($str, $ucAll = true)
    {
        return Inflector::titleize(strtr($str, '-', ' '), $ucAll);
    }

    /**
     * Recursively removes duplicate values from non-associative arrays
     */
    public static function uniqueConfig($array)
    {
        $suitable = true;
        foreach ($array as $k => &$v) {
            if (is_array($v)) {
                $v = self::uniqueConfig($v);
                $suitable = false;
            } elseif (!is_int($k)) {
                $suitable = false;
            }
        }
        return $suitable ? array_unique($array) : $array;
    }
}
