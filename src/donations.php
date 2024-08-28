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

}
