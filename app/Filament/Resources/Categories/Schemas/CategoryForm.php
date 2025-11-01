<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ColorPicker;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                  TextInput::make('name')
                    ->required()
                    ,
               TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),
               TextInput::make('description'),
              ColorPicker::make('color')
                    ->label('Color'),
            ]);
    }
}
