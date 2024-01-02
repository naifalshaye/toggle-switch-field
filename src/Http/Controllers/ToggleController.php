<?php
namespace Naif\ToggleSwitchField\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Nova;

class ToggleController
{
    public function update(NovaRequest $request)
    {

        $resourceClass = Nova::resourceForKey($request->resource_name);
        if (!$resourceClass) {
           return false;
        }

        $table = $this->getTableName($request->resource_name);

        foreach ($request->resource['fields'] as $field) {
            if (isset($field['component']) && $field['component'] === 'toggle-switch-field') {
                $column = $field['attribute'] ?? null;
                break;
            }
        }

        $update = DB::table($table)->where('id', $request->resource_id)->update([$column => $request->new_value]);

    }

    public function getTableName($resourceName)
    {
        $resourceClass = Nova::resourceForKey($resourceName);

        if (!$resourceClass) {
            return response()->json(['error' => 'Resource not found'], 404);
        }

        $model = app($resourceClass::$model);
        $tableName = $model->getTable();

        return $tableName;
    }
}
