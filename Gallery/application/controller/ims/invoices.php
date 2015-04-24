<?php
/**
 * Description of invoices
 *
 * @author 
 */
class invoices extends Controller{
    public function __construct() {
        parent::__construct();
        if(!isset($_SESSION['role']) || $_SESSION['role'] != 1)
        {
            header('location: ' . URL . 'portal/login/');
        }
        $this->loadModel();
    }
   
    public function loadModel(){
        require APP . '/model/InvoiceModel.php';
        $this->model = new InvoiceModel($this->db);
    }
    
    public function index(){
        $invoices = $this->model->getAllInvoice();
        $content = 'view/ims/invoices/index.php';
        require APP . 'view/ims/_templates/layout.php';
    }
}
