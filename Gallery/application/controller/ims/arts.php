<?php

/**
 * Description of arts
 *
 * @author 
 */
class arts extends Controller{
    
    public function __construct() {
        parent::__construct();
        if(!isset($_SESSION['role']) || $_SESSION['role'] != 1)
        {
            header('location: ' . URL . 'portal/login/');
        }
        $this->loadModel();
    }
   
    public function loadModel()
    {
        require APP . '/model/ArtModel.php';
        $this->model = new ArtModel($this->db);
    }
    
    public function index()
    {
            $arts = $this->model->getAllArts();
            $content = 'view/ims/arts/index.php';
            require APP . 'view/ims/_templates/layout.php';
    }
    
    public function create()
    {
        if (isset($_POST["save"])) 
        {
            $type = $_POST['type'];
            $artist = $_POST['artist'];
            $title = $_POST['title'];
            $size = $_POST['size'];
            $color = $_POST['color'];
            $material = $_POST['material'];
            $year = $_POST['year'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $createddate = (new DateTime())->format('Y-m-d H:i:s');
            $image1 = $_FILES['image1']['name'];
            $image2 = $_FILES['image2']['name'];
            $image3 = $_FILES['image3']['name'];
            
            if($image1 != null)
            {
                $target_file = $_SERVER['DOCUMENT_ROOT']. "/Gallery/" . URL_PUBLIC_FOLDER . "/ims/img/gallery/". basename($_FILES["image1"]["name"]);
                echo $target_file;
                if (!file_exists($target_file)) 
                {
                    if(!move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file))
                    {
                        echo "error";
                        exit();
                    }
                }
            }
            if($image2 != null)
            {
                $target_file = $_SERVER['DOCUMENT_ROOT']. "/Gallery/" . URL_PUBLIC_FOLDER . "/ims/img/gallery/". basename($_FILES["image2"]["name"]);
                if (!file_exists($target_file)) 
                {
                    move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file);
                }
            }
            if($image3 != null)
            {
                $target_file = $_SERVER['DOCUMENT_ROOT']. "/Gallery/" . URL_PUBLIC_FOLDER . "/ims/img/gallery/". basename($_FILES["image3"]["name"]);
                if (!file_exists($target_file)) 
                {
                    move_uploaded_file($_FILES["image3"]["tmp_name"], $target_file);
                }
            }
            $this->model->addArt($type, $artist, $title, $size, $color, $material, $year, $price, $description, $createddate, $image1, $image2, $image3);
            header('location: ' . URL . 'ims/arts/');
        }
        $content = 'view/IMS/arts/create.php';
        $types = $this->model->getAllType();
        $artists = $this->model->getAllArtist();
        require APP . 'view/IMS/_templates/layout.php';
    }
    
    public function delete($Id)
    {
        if (isset($Id)) {
            $this->model->deleteArt($Id);
        }
        header('location: ' . URL . 'ims/arts/index');
    }
    
    public function edit($Id)
    {
        if (isset($_POST["save"])) 
        {
            $id =$_POST['id'];
            $type = $_POST['type'];
            $artist = $_POST['artist'];
            $title = $_POST['title'];
            $size = $_POST['size'];
            $color = $_POST['color'];
            $material = $_POST['material'];
            $year = $_POST['year'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $this->model->updateArt($id, $type, $artist, $title, $size, $color, $material, $year, $price, $description);
            header('location: ' . URL . 'ims/arts/');
        }
        if(isset($Id))
        {
            $content = 'view/IMS/arts/edit.php';
            $types = $this->model->getAllType();
            $artists = $this->model->getAllArtist();
            $art = $this->model->getArtById($Id);
            require APP . 'view/IMS/_templates/layout.php';
        }
        else
        {
            header('location: ' . URL . 'ims/arts/');
        }
    }
}
