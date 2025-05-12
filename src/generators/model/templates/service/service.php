<?php
// Questo file è un template Gii: i placeholder <?= ... ?> verranno sostituiti dal generatore.
namespace <?= $namespace ?>\services;

use <?= $namespace ?>\<?= $className ?>;

/**
 * Class <?= $className ?>Service
 * @package <?= $namespace ?>\services
 */
class <?= $className ?>Service
{
    /**
     * Esempio di creazione
     * @param array $data
     * @return <?= $className ?>|false
     */
    public function create(array $data)
    {
        $model = new <?= $className ?>();
        $model->load($data, '');
        if ($model->validate() && $model->save()) {
            return $model;
        }
        return false;
    }

    // Altri metodi CRUD...
} 