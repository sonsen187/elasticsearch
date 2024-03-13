<?php

namespace Sanoo\Elasticsearch;

trait ElasticsearchClientTrait
{
    use ElasticsearchConfigTrait;

    /**
     * Get ElasticSearch Client
     *
     * @return \Elasticsearch\Client
     */
    public function getElasticSearchClient()
    {
        $config = $this->getElasticConfig();

        // elasticsearch v2.0 using builder
        if (class_exists('\Elasticsearch\ClientBuilder')) {
            return \Elasticsearch\ClientBuilder::fromConfig($config);
        }
    }
}