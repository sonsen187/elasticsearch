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
        $config = $this->getElasticConfig();

        return ClientBuilder::fromConfig($config);
    }
}