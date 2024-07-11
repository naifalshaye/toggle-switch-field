<?php
namespace Naif\ToggleSwitchField\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Laravel\Nova\Fields\Field;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Nova;

class ToggleController
{
    public function update(NovaRequest $request)
    {
        $resourceClass = Nova::resourceForKey($request->resource_name);
        $resource = $resourceClass::newModel()->findOrFail($request->resource_id);
        $attribute = $request->input('attribute');
        $value = $request->input('new_value');

        if (in_array($attribute, $resource->getFillable())) {
            $resource->{$attribute} = $value;
            $resource->timestamps = false;
            $resource->save();

        } else {
            return response()->json(['error' => 'Invalid attribute. Make sure column is a fillable field.'], 400);
        }
    }
}
