<?php

namespace Sanoo\Elasticsearch;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Elasticquent\ElasticsearchServiceProvider
 */
class ElasticsearchFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'elasticsearch.elasticsearch';
    }
}