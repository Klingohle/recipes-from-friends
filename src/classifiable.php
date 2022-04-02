<?php
trait Classifiable
{
    protected $category = '';

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }
}