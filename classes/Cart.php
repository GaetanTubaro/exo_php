<?php

class Cart
{
    protected array $content = [];

    public function __construct()
    {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
        $this->content = $_SESSION['cart'];
    }

    public function add($id)
    {
        if (!isset($this->content[$id])) {
            $this->content[$id] = 0;
        }
        $this->content[$id]++;
        $this->save();
    }

    public function remove($id)
    {
        if ($this->content[$id] <= 1) {
            unset($this->content[$id]);
        } else {
            $this->content[$id]--;
        }
        $this->save();
    }

    protected function save()
    {
        $_SESSION['cart'] = $this->content;
    }
}
