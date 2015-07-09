<?php

/*
 * HiDev - integrate your development
 *
 * @link      https://hidev.me/
 * @package   hidev
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2014-2015, HiQDev (https://hiqdev.com/)
 */

namespace hidev\handlers;

use Symfony\Component\Yaml\Yaml;
use yii\helpers\ArrayHelper;

/**
 * Handler for YAML files.
 */
class YamlHandler extends TypeHandler
{
    /**
     * @inheritdoc
     */
    public function renderType($data)
    {
        /// XXX TODO fix getItems crutch
        return Yaml::dump(ArrayHelper::toArray($data->getItems()), 4);
    }

    /**
     * @inheritdoc
     */
    public function parse($yaml)
    {
        return Yaml::parse($yaml);
    }
}