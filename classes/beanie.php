<?php
class Beanie
{
    protected float $price;
    protected string $size;
    protected string $material;
    protected string $name;
    protected string $desc;
    protected string $src;
    const AVAILABLE_SIZES = ['S', 'M', 'L', 'XL'];
    const AVAILABLE_MATERIALS = ['Cachemire', 'Coton', 'Laine', 'Soie'];

    public function getAvailableSizes()
    {
        return self::AVAILABLE_SIZES;
    }
    public function getAvailableMAterials()
    {
        return self::AVAILABLE_MATERIALS;
    }
    /**
     * Get the value of size
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set the value of size
     *
     * @return  self
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price / 100;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price * 100;

        return $this;
    }

    /**
     * Get the value of material
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set the value of material
     *
     * @return  self
     */
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of desc
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Set the value of desc
     *
     * @return  self
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;

        return $this;
    }

    /**
     * Get the value of src
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * Set the value of src
     *
     * @return  self
     */
    public function setSrc($src)
    {
        $this->src = $src;

        return $this;
    }
}
