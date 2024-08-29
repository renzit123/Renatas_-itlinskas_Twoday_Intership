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
if ($this->charity_name == "" || $this->rep_email == "") {
    echo "Please enter valid input\n";
    $this->updateCharity();
}
if (!filter_var($this->rep_email, FILTER_VALIDATE_EMAIL)) {
    echo "Please enter a valid email\n";
    $this->updateCharity();
}
    }

    public function addCharity()
    {
        $this->charity_name = readline("Enter charity name: ");
        $this->rep_email = readline("Enter charity representative email: ");
if ($this->charity_name == "" || $this->rep_email == "") {
    echo "Please enter valid input\n";
    $this->addCharity();
}

if (!filter_var($this->rep_email, FILTER_VALIDATE_EMAIL)) {
    echo "Please enter a valid email\n";
    $this->addCharity();
}
    }
}
