<?php

class Page
{
    protected string $path;

    public function __construct(string $name)
    {

        $this->path = "pages/" . $name . ".php";
    }

    /**
     * Get the value of path
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set the value of path
     *
     * @return  self
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }
}
