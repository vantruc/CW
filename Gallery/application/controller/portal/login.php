<?php

/**
 * Description of portal
 *
 * @author Hieu
 */
class login extends Controller{
    public function __construct() {
        parent::__construct();
        $this->loadModel();
    }
   
    public function loadModel()
    {
        require APP . '/model/UserModel.php';
        $this->model = new UserModel($this->db);
    }
    
    public function index()
    {
        $_SESSION['username'] = null;
        $_SESSION['role'] = null;
        $_SESSION['userId'] = null;
        $_SESSION['cart'] = null;
        $error = false;
        if (isset($_POST["login"])) 
        {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $user = $this->model->login($username, $password);
            if(isset($user->Id))
            {
                $_SESSION['username'] = $user->FullName;
                $_SESSION['role'] = $user->GroupId;
                $_SESSION['userId'] = $user->Id;
                if($_SESSION['role'] == 1)
                {
                    header('location: ' . URL . 'ims/arts/index');
                }
                else
                {
                    header('location: ' . URL . 'cms/arts/paintings');
                }
            }
            $error = true;
        }
        require APP . 'view/portal/login.php';
    }
}
