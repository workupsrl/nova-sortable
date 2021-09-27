<?php

namespace Workup\NovaSortable\Traits;

trait HasSortableManyToManyRows
{
    use HasSortableRows;

    public $disableSortOnIndex = true;
}
