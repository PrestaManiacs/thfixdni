<?php
/**
 * 2006-2021 THECON SRL
 *
 * NOTICE OF LICENSE
 *
 * DISCLAIMER
 *
 * YOU ARE NOT ALLOWED TO REDISTRIBUTE OR RESELL THIS FILE OR ANY OTHER FILE
 * USED BY THIS MODULE.
 *
 * @author    THECON SRL <contact@thecon.ro>
 * @copyright 2006-2021 THECON SRL
 * @license   Commercial
 */

class Validate extends ValidateCore
{
    public static function isDniLite($dni)
    {
        if (Configuration::get('THFIXDNI_LIVE_MODE')) {
            $dni = trim($dni);
            return empty($dni) || (bool) preg_match('/^[A-Z0-9\/]{1,16}$/i', $dni);
        } else {
            return parent::isDniLite($dni);
        }
    }
}
