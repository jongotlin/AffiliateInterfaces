<?php

namespace AffiliateInterface;

interface TransactionInterface
{
    /**
     * @return int
     */
    public function getOriginalId();

    /**
     * @return \DateTime
     */
    public function getCreatedAt();

    /**
     * @return string
     */
    public function getEpi();

    /**
     * @return int
     */
    public function getCommission();

    /**
     * @return int
     */
    public function getOrderValue();

    /**
     * @return ChannelInterface
     */
    public function getChannel();

    /**
     * @return ProgramInterface
     */
    public function getProgram();
}
