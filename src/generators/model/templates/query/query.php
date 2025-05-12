<?php
// Questo file è un template Gii: i placeholder <?= ... ?> verranno sostituiti dal generatore.
namespace <?= $namespace ?>\query;

use yii\db\ActiveQuery;

/**
 * Class <?= $className ?>Query
 * @package <?= $namespace ?>\query
 */
class <?= $className ?>Query extends ActiveQuery
{
    /**
     * Esempio di filtro per stato attivo
     * @param string|null $prefix
     * @return $this
     */
    public function active($prefix = null)
    {
        $table = $prefix ? $prefix . '.' : '';
        return $this->andWhere([$table . 'status' => 1]);
    }

    // Altri metodi di filtro...
} 