<?php

/**
 * Created by PhpStorm.
 * User: nicol
 * Date: 18/01/2017
 * Time: 10:21
 */
class StoreFront
{
    public $mSiteUrl;
    public function __construct()
    {
        $this->mSiteUrl=Link::Build('');
    }
}