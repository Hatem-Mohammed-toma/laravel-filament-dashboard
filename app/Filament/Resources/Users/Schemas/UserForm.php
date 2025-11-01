<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->unique(ignoreRecord: true) // دي اللي هتخليها تتجاهل المستخدم الحالي
                    ->required(),
                // DateTimePicker::make('email_verified_at'),
                TextInput::make('password')
                    ->password()
                    ->minLength(8)
  ->required(fn (string $context): bool => $context === 'create')
    // ->visible(fn (string $context): bool => $context === 'create'),

//     ->required(...) → يخلي الباسورد مطلوب فقط في حالة الـ create.

// ->visible(...) → يخفي الحقل تمامًا في حالة الـ edit.
   ]);
    }
}
