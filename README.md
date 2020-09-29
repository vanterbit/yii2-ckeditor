CKEditor Расширение для Yii 2
===========================

CKEditor — свободный WYSIWYG-редактор, который может быть использован на веб-страницах.


## Установка

Удобнее всего установить это расширение через [composer](http://getcomposer.org/download/).

Либо запустить

```
php composer.phar require --prefer-dist vanterbit/yii2-ckeditor "*"
```

или добавить

```json
"vanterbit/yii2-ckeditor": "*"
```

в разделе `require` вашего composer.json файла.

## Использование

```php
use vanterbit\ckeditor\CKEditor;
use yii\helpers\Html;

CKEditor::widget([
    'editorOptions' => [
        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
        'inline' => false, //по умолчанию false
    ]
]);

//или c ActiveForm

echo $form->field($post, 'content')->widget(CKEditor::className(),[
    'editorOptions' => [
        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
        'inline' => false, //по умолчанию false
    ],
]);
```
$form->field($model, $field)->widget(CKEditor::class, [
    'editorOptions' => mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',
            ['extraPlugins' => 'youtube,wpmore'],
            [
                'preset' => 'full',
                'height' => 300,
                'language' => $lang,
                'filter' => 'image',
    ]),
])

## Полезные ссылки

CKEditor Api - http://docs.ckeditor.com/

CKEditor Примеры - http://nightly.ckeditor.com/

Файл Менеджер ElFinder - https://github.com/MihailDev/yii2-elfinder