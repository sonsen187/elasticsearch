<?php

namespace Sanoo\Elasticsearch;

use Elastic\Elasticsearch\ClientBuilder;

trait ElasticsearchClientTrait
{
    use ElasticsearchConfigTrait;

    /**
     * @return mixed
     */
    public function getElasticSearchClient()
    {
        $hosts = $this->getElasticConfig('config.hosts');
        $user = $this->getElasticConfig('config.auth.user');
        $pass = $this->getElasticConfig('config.auth.pass');

        return ClientBuilder::create()
            ->setHosts($hosts)
            ->setBasicAuthentication($user, $pass)
            ->build();
    }
}