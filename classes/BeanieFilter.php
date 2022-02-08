<?php

class BeanieFilter
{
    protected string $size;
    protected string $marterial;
    protected int $min;
    protected int $max;
    public function __construct()
    {
        if (!empty($_POST['size'])) {
            $this->setSize($_POST['size']);
        }
        if (!empty($_POST['material'])) {
            $this->setMarterial($_POST['material']);
        }
        if (!empty($_POST['min'])) {
            $this->setMin($_POST['min']);
        }
        if (!empty($_POST['max'])) {
            $this->setMax($_POST['max']);
        }
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
     * Get the value of marterial
     */
    public function getMarterial()
    {
        return $this->marterial;
    }

    /**
     * Set the value of marterial
     *
     * @return  self
     */
    public function setMarterial($marterial)
    {
        $this->marterial = $marterial;

        return $this;
    }

    /**
     * Get the value of max
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Set the value of max
     *
     * @return  self
     */
    public function setMax($max)
    {
        $this->max = $max;

        return $this;
    }

    /**
     * Get the value of min
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Set the value of min
     *
     * @return  self
     */
    public function setMin($min)
    {
        $this->min = $min;

        return $this;
    }
}
