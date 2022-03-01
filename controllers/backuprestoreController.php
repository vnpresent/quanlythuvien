<?php
include_once('./models/Auth.php');
class backuprestoreController
{
    public function index()
    {
        if(Auth::isadmin())
        {
            include_once('./views/backuprestore/index.php');
        }
    }

    public function backup()
    {
        if(Auth::isadmin())
        {
            $NgayCN = date("d-m-Y");
            $backup_file = $NgayCN.'-vitri.sql';
            $sql = "SELECT * INTO OUTFILE '$backup_file' FROM vitri";
            $sql = "LOAD DATA INFILE '28-02-2022-vitri.sql' INTO TABLE vitri";
            query($sql);

        }
    }

    public function restore()
    {
        if(Auth::isadmin())
        {
            $sql = "LOAD DATA INFILE '28-02-2022-vitri.sql' INTO TABLE vitri";
            query($sql);

        }
    }
}
?>