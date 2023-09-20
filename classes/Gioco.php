<?php 
require_once __DIR__ . '/Prodotto.php';

class Gioco {
    protected $name;
    protected $image_prod;
    protected $price;
    
    /**
     * Get the value of price
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * Set the value of price
     */
    public function setPrice($price): self {
        $this->price = $price;
        return $this;
    }

    /**
     * Get the value of image_prod
     */
    public function getImageProd() {
        return $this->image_prod;
    }

    /**
     * Set the value of image_prod
     */
    public function setImageProd($image_prod): self {
        $this->image_prod = $image_prod;
        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self {
        $this->name = $name;
        return $this;
    }

    function _construct($_name, $_image_prod, $_price) {
        $this->name = $_name;
        $this->image_prod = $_image_prod;
        $this->price = $_price;
    }
}

?>