<?php

/**
 * Description of UserModel
 *
 * @author Hieu
 */
class UserModel
{
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }
    
    public function getUserById($Id)
    {
        $sql = "SELECT * FROM user WHERE user.Id = :Id LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':Id' => $Id);
        $query->execute($parameters);
        return $query->fetch();
    }
    
    public function getAllUser()
    {
        $sql = "SELECT user.*, group.Name FROM user INNER JOIN `group` ON user.GroupId = group.Id"
                . " ORDER BY Id DESC";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    
    public function getAllGroup()
    {
        $sql = "SELECT * FROM `group`"
                . " ORDER BY Id DESC";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    
    public function getUserByUsername($username)
    {
        $sql = "SELECT * FROM user WHERE Username = :username LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':username' => $username);
        $query->execute($parameters);
        return $query->fetch();
    }
    
    public function addUser($group, $username, $password, $fullname, $email, $phone, $address, $createddate)
    {
        $sql = "INSERT INTO user (GroupId, Username, Password, FullName, Email, Phone, Address, CreatedDate)"
                . " VALUES (:GroupId, :Username, :Password, :FullName, :Email, :Phone, :Address, :CreatedDate)";
        $query = $this->db->prepare($sql);
        $parameters = array(':GroupId' => $group, ':Username' => $username, ':Password' => $password, ':FullName' => $fullname, 
            ':Email' => $email, ':Phone' => $phone, ':Address' => $address, ':CreatedDate' => $createddate);
        $query->execute($parameters);
    }
    
    public function updateUser($id, $group, $fullname, $email, $phone, $address)
    {
        $sql = "UPDATE user SET GroupId=:GroupId, FullName=:FullName, Email=:Email, Phone=:Phone, Address=:Address"
                 . " WHERE Id=:Id";
        $query = $this->db->prepare($sql);
        $parameters = array(':GroupId' => $group, ':FullName' => $fullname, ':Email' => $email, 
            ':Phone' => $phone, ':Address' => $address, ':Id' => $id);
        $query->execute($parameters);
    }
    
    public function deleteUser($Id)
    {
        $sql = "DELETE FROM user WHERE Id=:Id";
        $query = $this->db->prepare($sql);
        $parameters = array(':Id' => $Id);
        $query->execute($parameters);
    }
    
    public function login($username, $password)
    {
        $sql = "SELECT * FROM user WHERE Username = :username AND Password = :password LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':username' => $username, ':password' => $password);
        $query->execute($parameters);
        return $query->fetch();
    }
}
