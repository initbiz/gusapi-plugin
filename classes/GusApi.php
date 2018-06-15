<?php namespace Initbiz\GusApi\Classes;

use GusApi\GusApi as Api;
use GusApi\Client\BuilderInterface;
use Initbiz\GusApi\Models\Settings;

class GusApi extends Api
{
    /**
     * GusApi constructor.
     *
     * @param string                $env
     * @param BuilderInterface|null $builder
     */
    public function __construct(string $env, ?BuilderInterface $builder = null)
    {
        if (!isset($env)) {
            $env = env('APP_ENV', 'production');
            //This fancy thing had to be done because GusApi requires 'prod', while OctoberCMS 'production'
            if ($env == 'production') {
                $env = 'prod';
            } else {
                $env = 'dev';
            }
        }

        $key = Settings::get('gus_api_key', 'abcde12345abcde12345');

        parent::__construct($key, $env, $builder);

        $this->login();
    }
}
