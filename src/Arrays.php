<?php

namespace Util;

class Arrays
{
    /**
     * Remove the duplicates from an array.
     *
     * @param array $array
     * @param bool  $keepKeys
     * @return array
     */
    public static function unique($array, $keepKeys = false)
    {
        if ($keepKeys) {
            $array = array_unique($array);
        } else {
            $array = array_keys(array_flip($array));
        }
        return $array;
    }

    public static function keyExist($key, $array, $returnValue = false)
    {
        $isExists = array_key_exists((string)$key, (array)$array);
        if ($returnValue) {
            if ($isExists) {
                return $array[$key];
            }
            return null;
        }
        return $isExists;
    }

    public static function valueExist($value, array $array, $returnKey = false)
    {
        $inArray = in_array($value, $array, true);
        if ($returnKey) {
            if ($inArray) {
                return array_search($value, $array, true);
            }
            return null;
        }
        return $inArray;
    }

    /**
     * Returns the first element in an array.
     *
     * @param  array $array
     * @return mixed
     */
    public static function firstElement(array $array)
    {
        return reset($array);
    }

    /**
     * Returns the last element in an array.
     *
     * @param  array $array
     * @return mixed
     */
    public static function lastElement(array $array)
    {
        return end($array);
    }

    /**
     * Returns the first key in an array.
     *
     * @param  array $array
     * @return int|string
     */
    public static function firstKey(array $array)
    {
        reset($array);
        return key($array);
    }
    
    /**
     * Returns the last key in an array.
     *
     * @param  array $array
     * @return int|string
     */
    public static function lastKey(array $array)
    {
        end($array);
        return key($array);
    }


}