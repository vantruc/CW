<?php
/**
 * Description of cart
 *
 * @author 
 */
class cart extends Controller
{
    public function __construct() 
    {
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
        $cartArray = [];
        $subtotal = 0;
        if (isset($_SESSION["cart"])) 
        {
            $cart = unserialize($_SESSION["cart"]);
            foreach ($cart as $id => $qty)
            {
                $art = $this->model->getArtById($id);
                $subtotal += $art->Price;
                $cartArray[] = $art;
            }
            
        }
        $shipping = $subtotal * 0.02;
        $content = 'view/cms/cart/index.php';
        require APP . 'view/cms/_templates/layout.php';
    }
    
    public function add($id)
    {
        if (isset($id)) 
        {
            if (isset($_SESSION["cart"])) 
            {
                $cart = unserialize($_SESSION["cart"]);
            }
            if (strlen($id) > 0) 
            {
                $cart[$id] = 1;
            }
        }
        if (isset($cart)) {
            $_SESSION["cart"] = serialize($cart);
            header('location: ' . URL . 'cms/cart/');
        }
    }
    
    public function remove($id)
    {
        if (isset($id)) 
        {
            if (isset($_SESSION["cart"])) 
            {
                $cart = unserialize($_SESSION["cart"]);
            }
            if (strlen($id) > 0) 
            {
                if (isset($id, $cart)) 
                {
                    unset($cart[$id]);
                } 
            }
            $_SESSION["cart"] = serialize($cart);
        }
        header('location: ' . URL . 'cms/cart/');
    }
    
    public function checkout()
    {
        require APP . '/model/InvoiceModel.php';
        $invoiceMode = new invoiceModel($this->db);
        
        $cartArray = [];
        $subtotal = 0;
        $quantity = 0;
        if (isset($_SESSION["cart"])) 
        {
            $cart = unserialize($_SESSION["cart"]);
            foreach ($cart as $id => $qty)
            {
                $art = $this->model->getArtById($id);
                $subtotal += $art->Price;
                $quantity ++;
                $cartArray[] =  $art;
            } 
            
            $shipping = $subtotal * 0.02;
            $createddate = (new DateTime())->format('Y-m-d H:i:s');
            $invoiceMode->addInvoice($_SESSION['userId'], $quantity, $subtotal, $shipping, $subtotal + $shipping, $createddate);
            $invoiceId = $invoiceMode->getLastedInvoice()->Id;
            
            foreach ($cart as $id => $qty)
            {
                $invoiceMode->addInvoiceDetail($invoiceId, $id);
            } 
            $_SESSION["cart"] = null;
        }
        $content = 'view/cms/cart/checkout.php';
        require APP . 'view/cms/_templates/layout.php';
    }
}
