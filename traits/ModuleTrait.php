<?php

namespace dektrium\user\traits;

use dektrium\user\Module;

/**
 * Trait ModuleTrait
 *
 * @property-read Module $module
 * @package dektrium\user\traits
 */
trait ModuleTrait
{
    /**
     * @return Module
     */
    public function getModule()
    {
        return \Yii::$app->getModule('user');
    }

    /**
     * @return string
     */
    public static function getDb()
    {
        //return \Yii::$app->getModule('user')->getDb();
        return \Yii::$app->getModule('user') ? \Yii::$app->getModule('user')->getDb() : \Yii::$app->db;
        //info: https://github.com/dektrium/yii2-user/commit/4b06f2b057b488091ae91f77e749890e189c7376
    }
    }
}
