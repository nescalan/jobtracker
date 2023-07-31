<?php

class AffilatedCompany
{
    # Properties
    protected $companyName;
    protected $phone;
    protected $email;
    protected $address;

    # Method
    public function __construct(
        string $pCompanyName = '',
        string $pPhone = '',
        string $pEmail = '',
        string $pAddress = ''
    ) {
        $this->companyName = isset($pCompanyName) ? $pCompanyName : '';
        $this->phone = isset($pPhone) ? $pPhone : '';
        $this->email = isset($pEmail) ? $pEmail : '';
        $this->address = isset($pAddress) ? $pAddress : '';
    }

    # Getters and Setters
    /**
     * Get the value of companyName
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set the value of companyName
     *
     * @return  self
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get the value of phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }
}

?>