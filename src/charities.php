<?php
class Charities
{
    public $id;
    public $charity_name;
    public $rep_email;
    public function __construct($id, $charity_name, $rep_email)
    {
        $this->id = $id;
        $this->charity_name = $charity_name;
        $this->rep_email = $rep_email;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getCharityName()
    {
        return $this->charity_name;
    }
    public function getRepEmail()
    {
        return $this->rep_email;
    }

    public function updateCharity()
    {
        $this->charity_name = readline("Enter new charity name: ");
        $this->rep_email = readline("Enter new charity representative email: ");
    }

    public function addCharity()
    {
        $this->charity_name = readline("Enter charity name: ");
        $this->rep_email = readline("Enter charity representative email: ");

    }
}
