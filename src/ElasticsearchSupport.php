<?php

namespace Sanoo\Elasticsearch;

use Illuminate\Foundation\Application;

class ElasticsearchSupport
{
    use ElasticsearchClientTrait;

    public static function isLaravel5()
    {
        return version_compare(Application::VERSION, '5', '>');
    }
}