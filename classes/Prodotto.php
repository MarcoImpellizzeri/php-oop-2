<?php 
class Prodotto {
    protected $categories;
    protected $type_prod;

    /**
     * Get the value of type_prod
     */
    public function getTypeProd() {
        return $this->type_prod;
    }

    /**
     * Set the value of type_prod
     */
    public function setTypeProd($type_prod): self {
        $this->type_prod = $type_prod;
        return $this;
    }

    /**
     * Get the value of categories
     */
    public function getCategories() {
        return $this->categories;
    }

    /**
     * Set the value of categories
     */
    public function setCategories($categories): self {
        $this->categories = $categories;
        return $this;
    }
}

?>