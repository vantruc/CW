<?php

class arts extends Controller{
    
    public function __construct() {
        parent::__construct();
        if(!isset($_SESSION['role']))
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
        $content = 'view/cms/arts/index.php';
        require APP . 'view/cms/_templates/layout.php';
    }
    
    public function paintings()
    {
        $arts = $this->model->getArtForSale(1);
        $content = 'view/cms/arts/paintings.php';
        require APP . 'view/cms/_templates/layout.php';
    }
    
    public function details($Id)
    {
        if(isset($Id))
        {
            $art = $this->model->getArtById($Id);
            if(isset($art->Id))
            {
                $content = 'view/cms/arts/details.php';
                require APP . 'view/cms/_templates/layout.php';
            }
            else
            {
                header('location: ' . URL . 'cms/arts/paintings');
            }
        }
        else
        {
            header('location: ' . URL . 'cms/arts/paintings');
        }
    }
}

