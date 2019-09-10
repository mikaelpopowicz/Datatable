<?php

use Chumper\Datatable\Columns\TextColumn;
use PHPUnit\Framework\TestCase;

class TextColumnTest extends TestCase
{
    public function testWorking()
    {
        $column = new TextColumn('foo', 'FooBar');
        $this->assertEquals('FooBar', $column->run(array()));
    }
}
