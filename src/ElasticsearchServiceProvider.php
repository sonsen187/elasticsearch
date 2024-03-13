<?php

namespace Sanoo\Elasticsearch;

use Illuminate\Support\ServiceProvider;

class ElasticsearchServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if (ElasticsearchSupport::isLaravel5()) {
            $this->publishes([
                __DIR__ . '/config/elasticsearch.php' => config_path('elasticsearch.php'),
            ]);
        }
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Support class
        $this->app->singleton('elasticsearch.support', function () {
            return new ElasticsearchSupport;
        });

        // Elasticsearch client instance
        $this->app->singleton('elasticsearch.elasticsearch', function ($app) {
            return $app->make('elasticsearch.support')->getElasticSearchClient();
        });
    }
}