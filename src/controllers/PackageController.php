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

use hidev\helpers\Helper;

/**
 * Package part of the config.
 *
 * @property string name
 * @property string year
 * @property string source
 */
class PackageController extends CommonController
{
    use \hiqdev\yii2\collection\ObjectTrait;

    public function getType()
    {
        return $this->getItem('type') ?: 'project';
    }

    public function getYears()
    {
        $years = $this->getItem('years');
        if (!empty($years)) {
            return $years;
        }
        $cur = (integer) date('Y');
        $old = (integer) $this->year;

        return ($old && $old < $cur ? $this->year . '-' : '') . $cur;
    }

    public function getYear()
    {
        return $this->getItem('year') ?: $this->takeVcs()->getYear();
    }

    public function getLicense()
    {
        return $this->getItem('license') ?: $this->takeVendor()->license ?: 'No license';
    }

    public function getIssues()
    {
        return $this->getItem('issues') ?: ($this->source . '/issues');
    }

    public function getWiki()
    {
        return $this->getItem('wiki') ?: ($this->source . '/wiki');
    }

    public function getKeywords()
    {
        return Helper::csplit($this->getItem('keywords'));
    }

    public function getFullName()
    {
        return $this->getItem('fullName') ?: ($this->takeVendor()->name . '/' . $this->name);
    }

    public function getSource()
    {
        return $this->getItem('source') ?: ('https://github.com/' . $this->takeGoal('github')->full_name);
    }

    public function getVersion()
    {
        return $this->takeGoal('version')->version;
    }

    public function getNamespace()
    {
        return $this->getItem('namespace') ?: $this->getPackageManager()->namespace ?: self::defaultNamespace($this->takeVendor()->name, $this->name);
    }

    public static function defaultNamespace($vendor, $package)
    {
        return preg_replace('/[^a-zA-Z0-9\\\\]+/', '', $vendor . strtr("-$package", '-', '\\'));
    }

    public function getSrc()
    {
        $src = $this->rawItem('src');

        return isset($src) ? $src : 'src';
    }

    public function getHomepage()
    {
        return $this->getItem('homepage') ?: ($this->isDomain() ? 'http://' . $this->name . '/' : $this->getSource());
    }

    public function getForum()
    {
        return $this->getItem('forum') ?: $this->takeVendor()->forum;
    }

    public function getLabel()
    {
        return $this->getItem('label') ?: $this->getHeadline() ?: Helper::id2camel($this->name);
    }

    public function isDomain()
    {
        return preg_match('/^[a-z0-9-]+(\.[a-z0-9]+)+$/', $this->name);
    }

    public function getTitle()
    {
        return $this->getItem('title') ?: ($this->isDomain() ? $this->name : Helper::titleize($this->name));
    }

    public function getHeadline()
    {
        return $this->getItem('headline');
    }

    public function getDescription()
    {
        return $this->getItem('description');
    }

    public function getRepositoryUrl($file)
    {
        return 'https://github.com/' . $this->getFullName() . '/blob/master/' . $file;
    }
    public function getAuthors()
    {
        return $this->getItem('authors') ?: $this->takeVendor()->authors;
    }

    /**
     * Composer for the moment.
     * To be changed to get actual Package Manager.
     */
    public function getPackageManager()
    {
        return $this->takeGoal('composer');
    }

    public function hasRequireAny($package)
    {
        return $this->hasRequire($package) || $this->hasRequireDev($package);
    }

    public function hasRequire($package)
    {
        $pman = $this->getPackageManager();

        return $pman && array_key_exists($package, $pman->getConfiguration()->getRequire());
    }

    public function hasRequireDev($package)
    {
        $pman = $this->getPackageManager();

        return $pman && array_key_exists($package, $pman->getConfiguration()->getRequireDev());
    }
}
