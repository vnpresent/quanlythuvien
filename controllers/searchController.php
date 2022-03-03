<?php
include_once('./models/Auth.php');
class searchController
{

    public function index()
    {
        if(isset($_GET['keyword']) && isset($_GET['type']))
        {
            $type = $_GET['type'];
            if($type == "Document")
            {
                include_once('./models/Document.php');
                $data = Document::search($_GET['keyword']);
            }
            else if($type == "CreateCard")
            {
                include_once('./models/CreateCard.php');
                $data = CreateCard::search($_GET['keyword']);
            }
            else if($type == "Rent")
            {
                include_once('./models/Rent.php');
                $data = Rent::search($_GET['keyword']);

            }
        }
        include_once('./views/search/index.php');
    }
}
?>