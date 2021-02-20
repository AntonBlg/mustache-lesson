
<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';
$mustache = new Mustache_Engine([
        'loader' => new Mustache_Loader_FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . '/../mustache/')
    ]
);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <?=$mustache->render('cards-list', [
        [
            'title' => 'Карточка 1',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique ipsum laborum assumenda? Perspiciatis illum est a eos quis eius excepturi?',
            'date' => '14 января 2021'
        ],
        [
            'title' => 'Карточка 2',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa dolores repudiandae cupiditate iste recusandae doloribus necessitatibus, eum, eligendi deserunt unde asperiores. Cupiditate fugit assumenda tenetur?',
            'date' => '18 января 2021'
        ],
        [
            'title' => 'Карточка 3',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus quis ullam voluptas mollitia molestias porro, totam nobis expedita? Qui dolorem recusandae perferendis? Autem rerum amet in corporis a saepe tenetur nemo at distinctio et quaerat atque, necessitatibus vitae provident perspiciatis.',
            'date' => '27 января 2021'
        ],
        [
            'title' => 'Карточка 4',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum architecto odit, ducimus id incidunt autem!',
            'date' => '12 февраля 2021'
        ],
    ]);?>
</body>
</html>
