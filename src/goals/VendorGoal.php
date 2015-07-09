<?php

/*
 * HiDev - integrate your development
 *
 * @link      https://hidev.me/
 * @package   hidev
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2014-2015, HiQDev (https://hiqdev.com/)
 */

namespace hidev\goals;

use Yii;

/**
 * Vendor part of the config.
 */
class VendorGoal extends DefaultGoal
{
    public function getTitleAndHomepage()
    {
        return $this->title . ($this->homepage ? ' (' . $this->homepage . ')' : '');
    }

    public function getConfig()
    {
        return Yii::$app->config;
    }
}