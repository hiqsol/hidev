<?php

/*
 * Automation tool mixed with code generator for easier continuous development
 *
 * @link      https://github.com/hiqdev/hidev
 * @package   hidev
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\controllers;

use yii\base\InvalidConfigException;

/**
 * Controller for Git.
 */
class GitController extends VcsController
{
    protected $_before = ['.gitignore'];

    /**
     * @var string current tag
     */
    protected $tag;

    public function actionRelease($version = null)
    {
        $version = $this->takeGoal('version')->getVersion($version);
        $message = "version bump to $version";
        $this->actionCommit($message);
        /// $this->actionTag($version);
        return $this->actionPush();
    }

    public function actionCommit($message)
    {
        return $this->passthru('git', ['commit', '-am', $message]);
    }

    public function actionPush()
    {
        return $this->passthru('git', 'push');
    }

    public function getUserName()
    {
        return trim(`git config --get user.name`);
    }

    public function getUserEmail()
    {
        return trim(`git config --get user.email`);
    }

    public function getYear()
    {
        $date = `git log --reverse --pretty=%ai | head -n 1`;
        $year = $date ? date('Y', strtotime($date)) : '';

        return $year;
    }
}
