<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php foreach ($items as $item):?>
    <?php echo $item->title.' '.$item->text.' '.$item->date;?>
<?php endforeach;?>
</body>
</html>