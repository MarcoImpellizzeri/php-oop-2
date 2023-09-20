<?php 
require_once __DIR__ . '/Prodotto.php';

class Cibo extends Prodotto {
    protected $name;
    protected $image_prod;
    protected $price;
    protected $species;

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

    /**
     * Get the value of species
     */
    public function getSpecies() {
        return $this->species;
    }

    /**
     * Set the value of species
     */
    public function setSpecies($species) {
        if (in_array($species, ['cane', 'gatto'])) {
            $this->species = $species;
            return true;
        }
        return false;
    }

    function _construct($_name, $_image_prod, $_price, $_species) {
        $this->name = $_name;
        $this->image_prod = $_image_prod;
        $this->price = $_price;
        $this->species = $_species;
    }
}


?>