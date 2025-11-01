<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Tables\Columns\ColorColumn;
use Filament\Forms\Components\ColorPicker;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ColorEntry;

class CategoryInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // TextColumn::make('id')
                //     ->label('ID'),
                // TextColumn::make('name'),
                // TextColumn::make('slug'),
                // TextColumn::make('description'),
                // ColorColumn::make('color'),


                Section::make('Category Details')
                ->schema([
                    TextEntry::make('id')->label('ID'),
                    TextEntry::make('name')->label('Name'),
                    TextEntry::make('slug')->label('Slug'),
                    TextEntry::make('description')->label('Description'),
                    ColorEntry::make('color')->label('Color'),
                ])
                ->columns(2), // هنا بيخليها عمودين منظمين زي الجدول
            ]);
    }
}
