<?php #User.class.php

class User
{
    protected $fullName;
    protected $company;
    protected $email;
    protected $password;
    protected $password2;


    public function __construct(
        string $pName = '',
        string $pCompany = '',
        string $pEmail = '',
        string $pPwd = '',
        string $pPwd2 = ''
    ) {
        $this->fullName = isset($pName) ? $pName : '';
        $this->company = isset($pCompany) ? $pCompany : '';
        $this->email = isset($pEmail) ? $pEmail : '';
        $this->password = isset($pPwd) ? $pPwd : '';
        $this->password2 = isset($pPwd2) ? $pPwd2 : '';
    }


    # Getters and Setters

    /**
     * Get the value of fullName
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set the value of fullName
     *
     * @return  self
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get the value of company
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set the value of company
     *
     * @return  self
     */
    public function setCompany($company)
    {
        $this->company = $company;

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
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of password2
     */
    public function getPassword2()
    {
        return $this->password2;
    }

    /**
     * Set the value of password2
     *
     * @return  self
     */
    public function setPassword2($password2)
    {
        $this->password2 = $password2;

        return $this;
    }
}

?>