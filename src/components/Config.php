<?php

/*
 * Automation tool mixed with code generator for easier continuous development
 *
 * @link      https://github.com/hiqdev/hidev
 * @package   hidev
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\components;

use hidev\base\File;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * The Config. Keeps config and Goals.
 */
class Config extends \hiqdev\yii2\collection\Object
{
    protected $_included = [];

    public function hasGoal($id)
    {
        return $this->hasItem($id);
    }

    public function getItemConfig($id = null, array $config = [])
    {
        if (isset($config['class']) && $this->hasItem($config['class'])) {
            $config = array_merge($config, $this->_items[$config['class']]);
        }
        return ArrayHelper::merge([
            'class' => 'hidev\controllers\CommonController',
        ], $config);
    }

    public function createItem($id, $config = [])
    {
        return Yii::createObject($this->getItemConfig($id, $config), [$id, Yii::$app]);
    }

    public function getItem($id)
    {
        $item = &$this->_items[$id];
        if (is_array($item)) {
            if (count($item) === 1 && key($item) === 'alias') {
                $item = $this->getItem($item['alias']);
            } else {
                $item = $this->createItem($id, $item);
            }
        }

        return $item;
    }

    /**
     * Include config file, unique only.
     * @param string|array $path
     * @return bool true if the path was unique and loaded
     */
    public function includeConfig($path, $force = false)
    {
        $file = File::create($path);
        $path = $file->getPath();
        if (!isset($this->_included[$path]) || $force) {
            $this->_included[$path] = $path;
            $this->mergeItems($file->load());
            return true;
        }

        return false;
    }

    public function getGoal($id)
    {
        return Yii::$app->createControllerById($id);
    }

    public function getVcs()
    {
        /// TODO determine VCS
        return $this->getGoal('git');
    }
}
