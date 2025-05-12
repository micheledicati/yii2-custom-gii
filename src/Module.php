<?php
namespace micheledicati\mdgii;

use yii\base\Module as BaseModule;

class Module extends BaseModule
{
    public $controllerNamespace = 'micheledicati\mdgii\controllers';
    public $modelNamespace      = 'micheledicati\mdgii\models';

    private const MODULE_PATH      = 'src';
    private const MODULE_ID        = 'mdgii';

    public function init()
    {
        parent::init();
        $this->setAliases(['@' . self::MODULE_ID => __DIR__]);
    }

    public function beforeAction($action)
    {
        return parent::beforeAction($action);
    }
} 