<?php

namespace AffiliateInterface;

interface ProgramInterface
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
