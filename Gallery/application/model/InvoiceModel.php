<?php

/**
 * Description of InvoiceModel
 *
 * @author 
 */
class InvoiceModel {
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }
    
    public function getAllInvoice()
    {
        $sql = "SELECT invoice.*, user.FullName FROM invoice INNER JOIN user ON invoice.UserId = user.Id"
                . " ORDER BY Id DESC";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    
    public function getLastedInvoice()
    {
        $sql = "SELECT * FROM invoice ORDER BY Id DESC LIMIT 1";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetch();
    }
    
    public function addInvoice($userId, $quantity, $subtotal, $shipping, $total, $createddate)
    {
        $sql = "INSERT INTO invoice (UserId, Quantity, Subtotal, Shipping, Total, CreatedDate)"
                . " VALUES (:UserId, :Quantity, :Subtotal, :Shipping, :Total, :CreatedDate)";
        $query = $this->db->prepare($sql);
        $parameters = array(':UserId' => $userId, ':Quantity' => $quantity, ':Subtotal' => $subtotal, ':Shipping' => $shipping, ':Total' => $total, ':CreatedDate' => $createddate);
        $query->execute($parameters);
    }
    
    public function addInvoiceDetail($invoiceId, $artId)
    {
        $sql = "INSERT INTO invoice_details (InvoiceId, ArtId)"
                . " VALUES (:InvoiceId, :ArtId)";
        $query = $this->db->prepare($sql);
        $parameters = array(':InvoiceId' => $invoiceId, ':ArtId' => $artId);
        $query->execute($parameters);
    }
}
