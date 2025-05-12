<?php
// Questo file è un template Gii: i placeholder <?= ... ?> verranno sostituiti dal generatore.
/**
 * Modello base generato automaticamente.
 * Contiene solo la struttura della tabella.
 * Non aggiungere logica custom qui.
 */

namespace <?= $namespace ?>\basic;

use yii\db\ActiveRecord;

/**
 * Class <?= $className ?>Base
 * @package <?= $namespace ?>\basic
 *
 * @property int $id
 * ... altre colonne ...
 */
class <?= $className ?>Base extends ActiveRecord
{
    public static function tableName()
    {
        return '<?= $tableName ?>';
    }
} 