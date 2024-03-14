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
        $auth = $this->getElasticConfig('config.auth');

        return ClientBuilder::create()
            ->setHosts($hosts)
            ->setBasicAuthentication($auth)
            ->build();
    }
}