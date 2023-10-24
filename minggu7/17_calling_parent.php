<?php

class flower {
    public string $color = "red";
    public string $name = "rose";

    public function intro() : string {
        return "The flower {$this->name} and the color is {$this->color}.";
    }
}

class rose extends flower {
    public function message() : string {
        return "Am I a flower or a rose? ";
    }

    public function callParentIntro() : string {
        return parent::intro();
    }
}

$rose = new rose();
echo $rose->message();
echo $rose->callParentIntro();