<?php
// Questo file è un template Gii: i placeholder <?= ... ?> verranno sostituiti dal generatore.
namespace <?= $namespace ?>\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use <?= $namespace ?>\services\<?= $className ?>Service;
use <?= $namespace ?>\search\<?= $className ?>Search;

/**
 * Class <?= $className ?>Controller
 * @package <?= $namespace ?>\controllers
 */
class <?= $className ?>Controller extends Controller
{
    /** @var <?= $className ?>Service */
    protected $service;

    public function __construct($id, $module, <?= $className ?>Service $service, $config = [])
    {
        $this->service = $service;
        parent::__construct($id, $module, $config);
    }

    /**
     * Elenco
     */
    public function actionIndex()
    {
        $searchModel = new <?= $className ?>Search();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', compact('searchModel', 'dataProvider'));
    }

    // Altre action (create, update, delete) secondo best practices...
} 