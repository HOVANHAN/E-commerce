<?php
class Product
{
    private $id;
    private $name;
    private $description;
    private $price;
    private $image;
    private $idloaisp;
    private $status;

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function getCategory()
    {
        return $this->idloaisp;
    }
    public function getStatus()
    {
        return $this->status;
    }

    public function __construct($id, $name, $description, $price, $image, $idloaisp, $status)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->idloaisp = $idloaisp;
        $this->status = $status;
    }

    public function __toString()
    {
        return "Product($this->id, $this->name, $this->description, $this->price, $this->image, $this->idloaisp, $this->status)";
    }
}
