<?php

namespace Chumper\Datatable;

use Chumper\Datatable\Engines\CollectionEngine;
use Chumper\Datatable\Engines\QueryEngine;
use Illuminate\Support\Facades\Input;


/**
 * Class Datatable
 * @package Chumper\Datatable
 */
class Datatable {

    /**
     * @var array
     */
    private $columnNames = [];

    /**
     * @param $query
     * @return \Chumper\Datatable\Engines\QueryEngine
     */
    public function query($query)
    {
        return new QueryEngine($query);
    }

    /**
     * @param \Illuminate\Support\Collection $collection
     * @return \Chumper\Datatable\Engines\CollectionEngine
     */
    public function collection($collection)
    {
        return new CollectionEngine($collection);
    }

    /**
     * @return \Chumper\Datatable\Table
     */
    public function table()
    {
        return new Table;
    }

    /**
     * @return bool True if the plugin should handle this request, false otherwise
     */
    public function shouldHandle()
    {
        $echo = Input::get('sEcho',null);

        return !is_null($echo) && is_numeric($echo);
    }
}
