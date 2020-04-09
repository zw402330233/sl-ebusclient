<?php

namespace Sl\Ebusclient;

use Illuminate\Config\Repository;

class Ebusclient
{
    /**
     * @var Repository
     */
    protected $config;

    /**
     * Packagetest constructor.
     * @param Repository $config
     */
    public function __construct(Repository $config)
    {
        $this->config = $config;
    }

    public function test_rtn(){
        $config_arr = $this->config->get('trustmerchant');
        echo '<pre>';
        print_r($config_arr);
    }
}
