<?php
// Questo file è un template Gii: i placeholder <?= ... ?> verranno sostituiti dal generatore.
namespace <?= $namespace ?>\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use <?= $namespace ?>\<?= $className ?>;

/**
 * Class <?= $className ?>Search
 * @package <?= $namespace ?>\search
 */
class <?= $className ?>Search extends Model
{
    // Attributi di ricerca
    // ...

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // Regole di validazione secondo best practices
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        return Model::scenarios();
    }

    /**
     * Ricerca
     * @param array $params
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = <?= $className ?>::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        // Applica filtri
        // ...
        return $dataProvider;
    }
} 