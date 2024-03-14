<?php

namespace Sanoo\Elasticsearch;

use Illuminate\Database\Eloquent\Collection;

class ElasticsearchCollection extends Collection
{
    use ElasticsearchCollectionTrait;
}