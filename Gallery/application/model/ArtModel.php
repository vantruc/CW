<?php

/**
 * Description of ArtModel
 *
 * @author 
 */
class ArtModel {
    
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }
    
    public function getArtById($Id)
    {
        $sql = "SELECT art.*, user.FullName as FullName FROM art INNER JOIN user ON art.Artist= user.Id WHERE art.Id = :Id LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':Id' => $Id);
        $query->execute($parameters);
        return $query->fetch();
    }
    
    public function getArtForSale($Type)
    {
        $sql = "SELECT art.*, user.FullName as FullName FROM art INNER JOIN user ON art.Artist= user.Id WHERE art.Type = :Type AND art.Sold = 0";
      
        $query = $this->db->prepare($sql);
        $parameters = array(':Type' => $Type);
        $query->execute($parameters);
        return $query->fetchAll();
    }
    
    public function getAllArts()
    {
        $sql = "SELECT art.*, user.FullName as FullName, typeofart.Name as TypeArt FROM "
                . "art INNER JOIN user ON art.Artist= user.Id INNER JOIN typeofart ON typeofart.Id = art.Type"
                . " ORDER BY Id DESC";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    
    public function getAllType()
    {
        $sql = "SELECT Id, Name FROM typeofart";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    
    public function getAllArtist()
    {
        $sql = "SELECT Id, FullName FROM user WHERE GroupId=3";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    
    public function addArt($type, $artist, $title, $size, $color, $material, $year, $price, $description, $createddate, $image1, $image2, $image3)
    {
        $sql = "INSERT INTO art (Type, Title, Size, Color, Material, Artist, Year, Price, Description, Image1, Image2, Image3, CreatedDate)"
                . " VALUES (:type, :title, :size, :color, :material, :artist, :year, :price, :description, :image1, :image2, :image3, :createddate)";
        $query = $this->db->prepare($sql);
        $parameters = array(':type' => $type, ':title' => $title, ':size' => $size, ':color' => $color, ':material' => $material, ':artist' => $artist, ':year' => $year
                , ':price' => $price, ':description' => $description, ':image1' => $image1, ':image2' => $image2, ':image3' => $image3, ':createddate' => $createddate);
        $query->execute($parameters);
    }
    
    public function updateArt($id, $type, $artist, $title, $size, $color, $material, $year, $price, $description)
    {
        $sql = "UPDATE art SET Type=:type, Title=:title, Size=:size, Color=:color, Material=:material, Artist=:artist, "
                . "Year=:year, Price=:price, Description=:description "
                . "WHERE Id=:id";
        $query = $this->db->prepare($sql);
        $parameters = array(':type' => $type, ':title' => $title, ':size' => $size, ':color' => $color, ':material' => $material, ':artist' => $artist, ':year' => $year
                , ':price' => $price, ':description' => $description, ':id' => $id);
        $query->execute($parameters);
    }
    
    public function deleteArt($Id)
    {
        $sql = "DELETE FROM art WHERE Id=:Id";
        $query = $this->db->prepare($sql);
        $parameters = array(':Id' => $Id);
        $query->execute($parameters);
    }
}
