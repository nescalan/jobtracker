<?php

class Activity
{
    # Propierties
    private $receivedStatus;
    private $diagnosis;
    private $customerApproval;
    private $inRepair;
    private $waitingForParts;
    private $inTests;
    private $forDelivery;
    private $delivered;
    private $externalOrder;


    # Method construct
    public function __construct(
        int $pReceivedStatus = 0,
        int $pDiagnosis = 0,
        int $pCustomerApproval = 0,
        int $pInRepair = 0,
        int $pWaitingForParts = 0,
        int $pInTests = 0,
        int $pForDelivery = 0,
        int $pDelivered = 0,
        int $pExternalOrder = 0
    ) {
        $this->receivedStatus = $pReceivedStatus;
        $this->diagnosis = $pDiagnosis;
        $this->customerApproval = $pCustomerApproval;
        $this->inRepair = $pInRepair;
        $this->waitingForParts = $pWaitingForParts;
        $this->inTests = $pInTests;
        $this->forDelivery = $pForDelivery;
        $this->delivered = $pDelivered;
        $this->externalOrder = $pExternalOrder;
    }

    # Getters and Setters ************************************
    /**
     * Get the value of receivedStatus
     */
    public function getReceivedStatus()
    {
        return $this->receivedStatus;
    }

    /**
     * Set the value of receivedStatus
     *
     * @return  self
     */
    public function setReceivedStatus($receivedStatus)
    {
        $this->receivedStatus = $receivedStatus;

        return $this;
    }

    /**
     * Get the value of diagnosis
     */
    public function getDiagnosis()
    {
        return $this->diagnosis;
    }

    /**
     * Set the value of diagnosis
     *
     * @return  self
     */
    public function setDiagnosis($diagnosis)
    {
        $this->diagnosis = $diagnosis;

        return $this;
    }

    /**
     * Get the value of customerApproval
     */
    public function getCustomerApproval()
    {
        return $this->customerApproval;
    }

    /**
     * Set the value of customerApproval
     *
     * @return  self
     */
    public function setCustomerApproval($customerApproval)
    {
        $this->customerApproval = $customerApproval;

        return $this;
    }

    /**
     * Get the value of inRepair
     */
    public function getInRepair()
    {
        return $this->inRepair;
    }

    /**
     * Set the value of inRepair
     *
     * @return  self
     */
    public function setInRepair($inRepair)
    {
        $this->inRepair = $inRepair;

        return $this;
    }

    /**
     * Get the value of waitingForParts
     */
    public function getWaitingForParts()
    {
        return $this->waitingForParts;
    }

    /**
     * Set the value of waitingForParts
     *
     * @return  self
     */
    public function setWaitingForParts($waitingForParts)
    {
        $this->waitingForParts = $waitingForParts;

        return $this;
    }

    /**
     * Get the value of inTests
     */
    public function getInTests()
    {
        return $this->inTests;
    }

    /**
     * Set the value of inTests
     *
     * @return  self
     */
    public function setInTests($inTests)
    {
        $this->inTests = $inTests;

        return $this;
    }

    /**
     * Get the value of forDelivery
     */
    public function getForDelivery()
    {
        return $this->forDelivery;
    }

    /**
     * Set the value of forDelivery
     *
     * @return  self
     */
    public function setForDelivery($forDelivery)
    {
        $this->forDelivery = $forDelivery;

        return $this;
    }

    /**
     * Get the value of delivered
     */
    public function getDelivered()
    {
        return $this->delivered;
    }

    /**
     * Set the value of delivered
     *
     * @return  self
     */
    public function setDelivered($delivered)
    {
        $this->delivered = $delivered;

        return $this;
    }

    /**
     * Get the value of externalOrder
     */
    public function getExternalOrder()
    {
        return $this->externalOrder;
    }

    /**
     * Set the value of externalOrder
     *
     * @return  self
     */
    public function setExternalOrder($externalOrder)
    {
        $this->externalOrder = $externalOrder;

        return $this;
    }
}
?>