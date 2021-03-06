<?php

namespace AbCreative\LaravelMaker\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use AbCreative\LaravelMaker\ProcessResourceDefinitions;
use AbCreative\LaravelMaker\Builders\ModelBuilder;
use AbCreative\LaravelMaker\Builders\ControllerBuilder;
use AbCreative\LaravelMaker\Builders\RequestBuilder;
use AbCreative\LaravelMaker\Builders\MigrationBuilder;
use AbCreative\LaravelMaker\Builders\ViewBuilder;
use AbCreative\LaravelMaker\Builders\RouteBuilder;


class BuildCleanCommand extends BaseCommand 
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'build:clean {file : The name of the definition file in /databases/models/ e.g. posts.yaml} {--force=true} {--clean=true}';

    /**
     * The filesystem instance.
     *
     * @var \Illuminate\Filesystem\Filesystem
     */
    public $filesystem;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete all the files generated by the package';

    /**
     * The resource_types to run...
     * 
     * @var array
     */
    protected $resource_types = [
        
        'Migration',
        'Controller',
        'Template',
        'Model',
        'Request',
        'View',
        'Route'
        
    ];
    

}