<?php

namespace AffiliateInterface;

interface ChannelInterface
{
    /**
     * @return int
     */
    public function getOriginalId();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getUrl();
}
