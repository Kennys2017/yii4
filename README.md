Диаграмма базы данных
![image](https://user-images.githubusercontent.com/102148024/212638039-ddcd56a4-812d-40fb-93e3-48c3f986abdf.png)
Задание №2. Выполнение CRUD операций
Команды для установки:
В консоле пишем код для установки yii:
10190195@B317PC05 c:\ospanel
$ cd domains

10190195@B317PC05 c:\OSPanel\domains
$ cd yii

10190195@B317PC05 c:\OSPanel\domains\yii
$ composer create-project --prefer-dist --stability=dev yiisoft/yii2-app-basic basic 

После установки самого yii пропишем код для подключения базы данных:
<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=no_ozone',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
После этого генерируем модели и контроллеры.
Добавляем на главную страницу, в меню навигации ссылку:
 'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            ['label' => 'Product', 'url' => ['/site/product']],
            ['label' => 'Busket', 'url' => ['/site/busket']],
            Yii::$app->user->isGuest
                ? ['label' => 'Login', 'url' => ['/site/login']]
                : '<li class="nav-item">'
                    . Html::beginForm(['/site/logout'])
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'nav-link btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>'
        ]
    ]);
    И в конце переведём модели (пример на моделях adress и company):
     public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'city' => 'Город',
            'street' => 'Улица',
            'house' => 'Дом',
            'flat_number' => 'Номер квартиры',
            'comment' => 'Комментарий',
        ];
    }
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'INN' => 'ИНН',
            'photo' => 'Фото',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата обновления',
            'id_meneger' => 'Id Meneger',
            'link' => 'Ссылка',
        ];
    }
    
