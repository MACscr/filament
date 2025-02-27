<?php

namespace Filament\Resources\RelationManagers;

use Illuminate\Database\Eloquent\Builder;

class HasManyThroughRelationManager extends HasManyRelationManager
{
    // https://github.com/laravel/framework/issues/4962
    protected function getTableQuery(): Builder
    {
        $query = parent::getTableQuery();

        return $query->select($query->getModel()->getTable().'.*');
    }
}
