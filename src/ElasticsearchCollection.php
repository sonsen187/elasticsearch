<?php

namespace Sanoo\Elasticsearch;

use Elasticquent\ElasticsearchCollectionTrait;
use Illuminate\Database\Eloquent\Collection;

class ElasticsearchCollection extends Collection
{

    use ElasticsearchCollectionTrait;

}