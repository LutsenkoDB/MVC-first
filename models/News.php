<?php
include ROOT.'/components/db_connect.php';

class News
{
    public static function getNewsItemById($id)
    {
        $sql= "SELECT id, title, date, Short_content".
              "FROM Publication WHERE id = '$id'" ;
        $newsId= $db-> prepare($sql); 
        $newsId->execute($id);
        $result= $newsId->fetch(PDO::FETCH_ASSOC);
        var_dump($result);
        
    }
    public static function getNewsList()
    {
        $sqlt= "SELECT * FROM Publication LIMIT 10";
        $newsList= $db-> prepare($sqlt); 
        $newsList->execute();
        $result= $newsList->fetch(PDO::FETCH_ASSOC);
         var_dump($result);
    }
    
}

