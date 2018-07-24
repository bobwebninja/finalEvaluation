<?php


class Cat
{
    /**
     * FirstName
     *
     * Store the current object firstName value
     *
     * @var string
     */
    private $firstName;

    /**
     * Age
     *
     * Store the current object age value
     *
     * @var int
     */
    private $age;
    
    /**
     * Color
     *
     * Store the current object color value
     *
     * @var string
     */
    private $color;

    /**
     * Sex
     *
     * Store the current object sex value
     *
     * @var string
     */
    private $sex;

       /**
     * Race
     *
     * Store the current object race value
     *
     * @var string
     */
    private $race;



    /**
     * Get store the current object firstName value
     *
     * @return  string
     */ 
    public function getFirstName() : string
    {
        return $this->firstName;
    }

    /**
     * Set store the current object firstName value
     *
     * @param  string  $firstName  Store the current object firstName value
     *
     * @return  self
     */ 
    public function setFirstName(string $firstName)
    {
        if (strlen($firstName)<3 || strlen($firstName)>20) {
            throw new \RuntimeException('Firstname has to be 3 to 20 characters');
        }
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get store the current object age value
     *
     * @return  int
     */ 
    public function getAge() : int
    {
        return $this->age;
    }

    /**
     * Set store the current object age value
     *
     * @param  int  $age  Store the current object age value
     *
     * @return  self
     */ 
    public function setAge(int $age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get store the current object color value
     *
     * @return  string
     */ 
    public function getColor() : string
    {
        return $this->color;
    }

    /**
     * Set store the current object color value
     *
     * @param  string  $color  Store the current object color value
     *
     * @return  self
     */ 
    public function setColor(string $color)
    {
        if (strlen($color)<3 || strlen($color)>10) {
            throw new \RuntimeException('Color has to be 3 to 10 characters');
        }
        $this->color = $color;

        return $this;
    }

    /**
     * Get store the current object sex value
     *
     * @return  string
     */ 
    public function getSex() : string
    {
        return $this->sex;
    }

    /**
     * Set store the current object sex value
     *
     * @param  string  $sex  Store the current object sex value
     *
     * @return  self
     */ 
    public function setSex(string $sex)
    {
        if (!in_array($sex, ['male', 'female'])) {
            throw new \RuntimeException('Gender is not allowed, has to be "male" or "female"');
        }
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get store the current object race value
     *
     * @return  string
     */ 
    public function getRace() : string
    {
        return $this->race;
    }

    /**
     * Set store the current object race value
     *
     * @param  string  $race  Store the current object race value
     *
     * @return  self
     */ 
    public function setRace(string $race)
    {
        if (strlen($race)<3 || strlen($race)>20) {
            throw new \RuntimeException('Race has to be 3 to 20 characters');
        }
        $this->race = $race;

        return $this;
    }

    /**
     * From array
     * 
     * Create a new Cat instance from an array of value
     * 
     * @param array $definition The array of value
     * 
     * @return Cat
     */

    
    
    public static function fromArray(array $definition)
    {
        $cat = new Cat();
        $cat->setFirstName($definition['firstname'] ?? '')
            ->setAge($definition['age'] ?? '')
            ->setColor($definition['color'] ?? '')
            ->setSex($definition['sex'] ?? [])
            ->setRace($definition['race'] ?? []);
        
        return $cat;
    }

    public function getInfo($a)
    {
        echo'<table class="table">';
        echo"<thead><tr>";
        echo"<th>Firstname</th>";
        echo"<th>Age</th>";
        echo"<th>Color</th>";
        echo"<th>Sex</th>";
        echo"<th>Race</th>";

        echo"</tr></thead><tbody><tr>";
        echo"<td>$a[firstname]</td>";
        echo"<td>$a[age]</td>";
        echo"<td>$a[color]</td>";
        echo"<td>$a[sex]</td>";
        echo"<td>$a[race]</td>";
        echo"</tr></tbody></table>";   
    }
}