<?php

class ArticlesController
{
    //просмотр списка статей
    public function actionList()
    {
        echo 'Articles List';
        return true;
    }
    
    //просмотр одной статьи
    public function actionView()
    {
        echo 'Article view';
        return true;
    }
}
