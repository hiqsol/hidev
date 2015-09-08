<?php

/*
 * HiDev - integrate your development
 *
 * @link      https://hidev.me/
 * @package   hidev
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2014-2015, HiQDev (https://hiqdev.com/)
 */

namespace hidev\base;

use Yii;

/**
 * Our View.
 */
class View extends \yii\web\View
{
    /**
     * {@inheritdoc}
     */
    public $defaultExtension = 'twig';

    public function init()
    {
        parent::init();
        $this->theme->pathMap['@app/views'] = array_merge(
            (array) $this->theme->pathMap['@app/views'],
            (array) Yii::$app->pluginManager->views
        );
    }

    public function getConfig()
    {
        return Yii::$app->config;
    }

    /**
     * Returns rendering context.
     *
     * TODO think of moving to other object from Config Goal
     */
    public function getContext()
    {
        return Yii::$app;
    }

    public function existsTemplate($template)
    {
        return file_exists($this->findViewFile($template, $this->getContext()));
    }

    public function render($template, $data)
    {
        return parent::render($template, $data, $this->getContext());
    }
}
