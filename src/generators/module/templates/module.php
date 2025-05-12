<?php
// Questo file è un template Gii: i placeholder <?= ... ?> verranno sostituiti dal generatore.
namespace <?= $namespace ?>;

use yii\base\Module as BaseModule;

class Module extends BaseModule
{
    public $controllerNamespace = '<?= $namespace ?>\\controllers';
    public $modelNamespace      = '<?= $namespace ?>\\models';

    private const MODULE_PATH      = '<?= $modulePath ?>';
    private const MODULE_ID        = '<?= $moduleId ?>';

    public function init()
    {
        parent::init();
        $this->setAliases(['@' . self::MODULE_ID => '@app/' . self::MODULE_PATH]);
    }

    public function beforeAction($action)
    {
        return parent::beforeAction($action);
    }
} 