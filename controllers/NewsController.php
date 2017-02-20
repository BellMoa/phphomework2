<?php
require_once __DIR__. '/../model/News.php';


class NewsController
{

    public function actionAll(){
        $items = News::getAll();
        include __DIR__ . '/../view/news/all.php';
    }

    public function actionOne(){
        echo 'actionOne';
        die();
        $id = $_GET['id'];
        $item = News::getOne();
        include __DIR__ .'/../view/news/one.php';
    }
}
