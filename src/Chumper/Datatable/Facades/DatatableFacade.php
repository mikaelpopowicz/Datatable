<?php

namespace Chumper\Datatable\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Chumper\Datatable\Engines\QueryEngine query($query)
 * @method static \Chumper\Datatable\Engines\CollectionEngine collection(\Illuminate\Support\Collection $collection)
 * @method static \Chumper\Datatable\Table table()
 * @method static bool shouldHandle()
 *
 * @see \Chumper\Datatable\Datatable
 */
class DatatableFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'datatable';
    }
}
