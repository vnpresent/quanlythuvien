<?php
include_once('./models/Auth.php');
include_once('./models/Rent.php');
include_once('./models/DocumentDetail.php');
include_once('./models/RentDetail.php');
class rentController
{

    public function index()
    {
        if((Auth::isadmin() || Auth::isThuThu()))
        {
            $data=Rent::index();
            include_once('./views/rent/index.php');
        }
    }

    public function add()
    {
        if((Auth::isadmin() || Auth::isThuThu()))
        {
            include_once('./views/rent/add.php');
        }
    }

    public function insert()
    {
        if((Auth::isadmin() || Auth::isThuThu()) && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $MaCaBiet = $_POST['MaCaBiet'];
            $rent = new Rent();
            $rent->SoThe = $_POST['SoThe'];

            $result = $rent->save();
            if($result)
            {
                $id = $result['id'];
                $MaCaBiets = $_POST['MaCaBiet'];
                $KieuMuons = $_POST['KieuMuon'];
                $HanTras = $_POST['HanTra'];
                if(count($MaCaBiets) ==  count($KieuMuons) && count($KieuMuons) == count($HanTras))
                {
                    for($i=0; $i< count($MaCaBiets);$i++)
                    {
                        $rentdetail = new RentDetail();
                        $rentdetail->ID_MuonTra = $id;
                        $rentdetail->MaCaBiet = $MaCaBiets[$i];
                        $rentdetail->KieuMuon = $KieuMuons[$i];
                        $rentdetail->HanTra = $HanTras[$i];
                        $rentdetail->save();
                    }
                    header('location:index.php?controller=rent&action=add&result=true');
                }
                else
                {
                    header('location:index.php?controller=rent&action=add&result=false');
                }
            }
            else
            {
                header('location:index.php?controller=rent&action=add&result=false');
            }
            // if($rent->save())
            //     $result = 'true';
            // else
            //     $result = 'false';
        }
    }

    public function edit()
    {
        if((Auth::isadmin() || Auth::isThuThu()) && isset($_GET['id']))
        {
            $data = RentDetail::show($_GET['id']);
            include_once('./views/rent/edit.php');
        }
    }

    public function update()
    {
        if((Auth::isadmin() || Auth::isThuThu()) && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $rentdetail = new RentDetail();

            foreach($rentdetail->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $rentdetail->$prop = $_POST[$prop];
                    if(ctype_space($_POST[$prop]) || empty($_POST[$prop]))
                    {
                        $result = 'false';
                        header('location:index.php?controller=rent&action=edit&result='.$result.'&id='.$_POST['id']);
                        return;
                    }
                }
            }
            if($rentdetail->update())
                $result = 'true';
            else
                $result = 'false';
            header('location:index.php?controller=rent&action=edit&result='.$result.'&id='.$_POST['id']);
        }
    }

    public function searchmuon()
    {
        if((Auth::isadmin() || Auth::isThuThu()) && isset($_GET['MaCaBiet']))
        {
            header('Content-type: application/json');
            $data = DocumentDetail::searchmuon($_GET['MaCaBiet']);
            echo json_encode($data);
            exit();
        }
    }

    public function searchtra()
    {
        if((Auth::isadmin() || Auth::isThuThu()) && isset($_GET['MaCaBiet']) && isset($_GET['SoThe']))
        {
            header('Content-type: application/json');
            $data = DocumentDetail::searchtra($_GET['MaCaBiet'],$_GET['SoThe']);
            echo json_encode($data);
            exit();
        }
    }

    public function back()
    {
        if(Auth::isadmin() || Auth::isThuThu())
        {
            include_once('./views/rent/back.php');
        }
    }

    public function returnpost()
    {
        if(isset($_POST['SoThe']) && (Auth::isadmin() || Auth::isThuThu()))
        {
            $MaCaBiets = $_POST['MaCaBiet'];
            foreach($MaCaBiets as $MaCaBiet)
            {
                print($MaCaBiet);
                RentDetail::returnpost($_POST['SoThe'],$MaCaBiet);
            }         
            header('location:index.php?controller=rent&action=back&result=true');
        }
        else
        {
            header('location:index.php');
        }
    }

    public function rentinfo()
    {
        if((Auth::isadmin() || Auth::isThuThu()) && isset($_GET['ID_MuonTra']) )
        {
            $data = RentDetail::find($_GET['ID_MuonTra']);
            include_once('./views/rent/rentinfo.php');
        }
    }

    public function return()
    {
        if(isset($_GET['id']) && (Auth::isadmin() || Auth::isThuThu()))
        {
            $rentdetail = new RentDetail();
            $rentdetail->id = $_GET['id'];
            $rentdetail->return();
            header('location:index.php?controller=rent&action=rentinfo&'.'ID_MuonTra='.$_GET['ID_MuonTra']);
        }
        else
        {
            // header('location:index.php');
        }
    }

    public function delete()
    {
        if(isset($_GET['ID_MuonTra']) && (Auth::isadmin() || Auth::isThuThu()))
        {
            $rent = new Rent();
            $rent->ID_MuonTra = $_GET['ID_MuonTra'];
            $rent->delete();
            header('location:index.php?controller=rent');
        }
        else
        {
            header('location:index.php');
        }
    }
}
?>