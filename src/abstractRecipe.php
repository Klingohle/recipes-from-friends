<?php
abstract class AbstractRecipe
{
    use classifiable;

    protected $title = '';
    protected $ingredients = '';
    protected $description = '';
    protected $drink = '';
    protected $tips = '';
    protected $author = '';

    public function __construct(array $daten = [])
    {
        $this->setDaten($daten);
    }

    public function setDaten(array $daten)
    {
        if ($daten) {
            foreach($daten as $k => $v){
                $setterName = 'set' . ucfirst($k);
                if (method_exists($this, $setterName)){
                    $this->$setterName($v);
                }
            }
        }
    }


    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        return $this->title = $title;
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }

    public function setIngredients($ingredients)
    {
        return $this->ingredients = $ingredients;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        return $this->description = $description;
    }

    public function getDrink()
    {
        return $this->drink;
    }

    public function setDrink($drink)
    {
        return $this->drink = $drink;
    }

    public function getTips()
    {
        return $this->tips;
    }

    public function setTips($tips)
    {
        return $this->tips = $tips;
    }

    public function getAuthor()
    {
        return $this->author;
    }
    
    public function setAuthor($author)
    {
        return $this->author = $author;
    }
}
