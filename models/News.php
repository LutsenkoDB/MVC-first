<?php
include_once ROOT.'/components/db_connect.php';

class News
{
    public static function getNewsItemById($id)
    {
        $result = $db->query("SELECT id, title, date, Short_content".
                "FROM Publication WHERE id LIKE $id" );
    }
    public static function getNewsList()
    {
        $result = $db->query("SELECT * FROM Publication " );
    }
    
}

