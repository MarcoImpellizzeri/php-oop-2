<?php 

trait WithPosition {
    protected $position;

    /**
     * Get the value of position
     */
    public function getPosition() {
        return $this->position;
    }

    /**
     * Set the value of position
     */
    public function setPosition($position): self {
        $this->position = $position;
        return $this;
    }
}

?>