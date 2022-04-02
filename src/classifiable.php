<?php
trait Classifiable
{
    protected $category = '';
    protected $created;

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function getCreated()
    {
        return $this->created;
    } 

    public function setCreated($created)
    {
        $this->created = $ccreated;
    }
}
