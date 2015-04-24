<?php

/**
 * Description of users
 *
 * @author Hieu
 */
class users extends Controller{
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
        require APP . '/model/UserModel.php';
        $this->model = new UserModel($this->db);
    }
    
    public function index()
    {
            $users = $this->model->getAllUser();
            $content = 'view/ims/users/index.php';
            require APP . 'view/ims/_templates/layout.php';
    }
    
    public function create()
    {
        if (isset($_POST["save"])) 
        {
            $group = $_POST['group'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $confirmpassword = $_POST['confirmpassword'];
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            
            $user = $this->model->getUserByUsername($username);
            if(strlen($username) == 0)
            {
                $usernameError = "*User name is required.";
            }
            else if(isset($user->Id)){
                $usernameError = "*Username is existing.";
            }
            if(strlen($password) == 0)
            {
                $passwordError = "*Password is required.";
            }
            else if($password != $confirmpassword){
                $passwordConfirmError = "*Confirm password is invalid.";
            }
            else
            {
                $createddate = (new DateTime())->format('Y-m-d H:i:s');
                $this->model->addUser($group, $username, $password, $fullname, $email, $phone, $address, $createddate);
                header('location: ' . URL . 'ims/users/');
            }
        }
        $content = 'view/ims/users/create.php';
        $groups = $this->model->getAllGroup();
        require APP . 'view/ims/_templates/layout.php';
    }
    
    public function edit($Id)
    {
        if (isset($_POST["save"])) 
        {
            $id = $_POST['id'];
            $group = $_POST['group'];
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            
            $this->model->updateUser($id, $group, $fullname, $email, $phone, $address);
            header('location: ' . URL . 'ims/users/');
        }
        if(isset($Id))
        {
            $content = 'view/ims/users/edit.php';
            $groups = $this->model->getAllGroup();
            $user = $this->model->getUserById($Id);
            require APP . 'view/ims/_templates/layout.php';
        }
        else
        {
            header('location: ' . URL . 'ims/users/');
        }
        
    }
    
    public function delete($Id)
    {
        if (isset($Id)) {
            $this->model->deleteUser($Id);
        }
        header('location: ' . URL . 'ims/users/index');
    }
}
