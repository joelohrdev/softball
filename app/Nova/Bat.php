<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Bat extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Bat::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->hide(),
            BelongsTo::make('Player'),
            Date::make('Date'),
            Text::make('Opponent'),
            Number::make('Plate Appearances')->default(0),
            Number::make('At Bats')->default(0),
            Number::make('Hits')->default(0),
            Number::make('Singles')->default(0),
            Number::make('Doubles')->default(0),
            Number::make('Triples')->default(0),
            Number::make('Home Runs')->default(0),
            Number::make('Runs Batted In')->default(0),
            Number::make('Runs')->default(0),
            Number::make('Hit By Pitch')->default(0),
            Number::make('Reached On Error')->default(0),
            Number::make('Hit into Fielders Choice')->default(0),
            Number::make('Batter Advances on Catchers Interference')->default(0),
            Number::make('Walks')->default(0),
            Number::make('Strikeouts')->default(0),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
