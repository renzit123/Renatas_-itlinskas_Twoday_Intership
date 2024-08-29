<?php

class Donations
{
    private $id;
    private $donor_name;
    private $amount;
    private $charity_id;
    private $date;

    public function __construct($id, $donor_name, $amount, $charity_id, $date)
    {
        $this->id = $id;
        $this->donor_name = $donor_name;
        $this->amount = $amount;
        $this->charity_id = $charity_id;
        $this->date = $date;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getDonorName()
    {
        return $this->donor_name;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function getCharityId()
    {
        return $this->charity_id;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function addDonation()
    {
        $this->donor_name = readline("Enter donor name: ");
        $this->amount = readline("Enter donation amount: ");
        $this->date = readline("Enter donation date(format is yyyy-mm-dd: ");
        if ($this->donor_name == "" || $this->amount == "" || $this->date == "") {
            echo "Please enter valid input\n";
            $this->addDonation();
        }

        if (!is_numeric($this->amount)) {
            echo "Please enter a valid amount\n";
            $this->addDonation();
        }
        if (!preg_match("/\d{4}-\d{2}-\d{2}/", $this->date)) {
            echo "Please enter a valid date\n";
            $this->addDonation();
        }

    }
}
