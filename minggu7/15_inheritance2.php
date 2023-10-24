<?php

class Students {
    public string $name, $id, $grade, $address;

    public function showInfo(): Students
    {
        echo "Name: $this->name <br>";
        echo "ID: $this->id <br>";
        echo "Grade: $this->grade <br>";
        echo "Address: $this->address <br>";
        return $this;
    }

    public function setName(string $name): Students
    {
        $this->name = $name;
        return $this;
    }

    public function setId(string $id): Students
    {
        $this->id = $id;
        return $this;
    }

    public function setGrade(string $grade): Students
    {
        $this->grade = $grade;
        return $this;
    }

    public function setAddress(string $address): Students
    {
        $this->address = $address;
        return $this;
    }
}

class ComputerScience extends Students {
    public function attendance(): void
    {
        echo "$this->name is attending the class <br>";
    }

    public static function make(): ComputerScience
    {
        return new static;
    }
}

ComputerScience::make()
    ->setName('Rapli')
    ->setId('12345')
    ->setGrade('A')
    ->setAddress('Indonesia')
    ->showInfo()
    ->attendance();