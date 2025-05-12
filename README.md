# md-gii

Modulo Gii custom per Yii2 che applica le best practices aziendali.

## Installazione (repo privata)

Aggiungi al tuo `composer.json`:

```
"repositories": [
  {
    "type": "git",
    "url": "git@github.com:micheledicati/md-gii.git"
  }
],
"require": {
  "micheledicati/md-gii": "dev-main"
}
```

Poi esegui:
```
composer update
```

## Configurazione

Nel file di configurazione dell'applicazione (es. `config/web.php`):

```php
'modules' => [
    'gii' => [
        'class' => 'micheledicati\mdgii\Module',
    ],
],
```

## Funzionalità
- Generazione modelli base/estesi, query, service, search, controller, partials secondo best practices.
- Template personalizzabili.

## Struttura
Vedi cartella `src/generators` per i template e la logica custom. 