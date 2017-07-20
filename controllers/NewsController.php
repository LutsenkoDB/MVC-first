<?php

include_once ROOT.'/models/News.php';

class NewsController
{
    public function actionIndex()
    {
       echo 'News List'.'<br>';
        $newsList = array();
        $newsList = News::getNewsList();
        echo '<pre>';
        print_r($newsList);
        echo '<pre>';
        return true;
    }
    
    public function actionView($category,$id)
    {
        //echo 'Wiew single new';
        if($id)
        {
            $newsItem = News::getNewsItemById($id);
            
            echo '<pre>';
            print_r($newsItem);
            echo '<pre>';
        }
        return true;
    }
}

