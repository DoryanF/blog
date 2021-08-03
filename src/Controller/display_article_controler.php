<?php 
include '../Dao/article_dao.php';

try{
    $result = get_all_article();
    include '../View/display_article.php';
}catch(PDOException $e){
   echo $e -> getMessage();
}

