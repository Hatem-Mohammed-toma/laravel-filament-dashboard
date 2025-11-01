<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Group;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
//         return $schema
//             ->components([
//                 Section::make()
//                 ->description("blaaa blaa")
//                 ->collapsible()
//                 ->schema([
//                         TextInput::make('title')
//                         ->required(),
//                         TextInput::make('slug')
//                         ->required(),
//                          RichEditor::make('content')
//                     ->label('Content')
//                     ->required(),

//                     ])->columns(1),

//         Section::make('Content')
//             ->description('Write your post content here.')
//             ->schema([
//                Group::make()
//             ->schema([
//                 Select::make('category_id')
//                     ->label('Category')
//                     ->relationship('category', 'name')
//                     ->required(),
//                 TagsInput::make('tags')
//                     ->label('Tags')
//                     ->suggestions([
//                         'tailwindcss',
//                         'alpinejs',
//                         'laravel',
//                         'livewire',

//                     ]),
//                     FileUpload::make('thumbnail')
//                     ->label('Thumbnail')
//                     ->directory('thumbnails') // يرفع الصور في storage/app/public/thumbnails
//                     ->image() // يحدد انها صورة
//                     // ->maxSize(2048) // أقصى حجم 2MB
//                     ->nullable(),
//                 Toggle::make('published')
//                     ->required(),
//                        ]) ->columns(1),
//             ])
//  ->columns(1), // السيكشن نفسه تحت اللي فوقه

//                 ]);
  return $schema
            ->components([
                // Section 1
                Section::make("Basic Information")
                    ->description("fill in the basic information for your post")
                    ->collapsible()
                    ->schema([
                       Group::make() // نبدأ الجروب هنا
            ->schema([
                TextInput::make('title')
                    ->label('Title')
                    ->required(),
                TextInput::make('slug')
                    ->label('Slug')
                    ->required(),
            ]),
                        RichEditor::make('content')
                            ->label('Content')
                            ->required(),
                    ]),
                    // ->columns(1), // كله تحت بعض

                // Section 2
                Section::make('Content')
                    ->description('Write your post content here.')
                    ->schema([
                        Select::make('category_id')
                            ->label('Category')
                            ->relationship('category', 'name')
                            ->required(),

                        TagsInput::make('tags')
                            ->label('Tags')
                            ->suggestions([
                                'tailwindcss',
                                'alpinejs',
                                'laravel',
                                'livewire',
                            ]),

                        FileUpload::make('thumbnail')
                            ->label('Thumbnail')
                            ->directory('thumbnails')
                            ->image()
                            ->nullable(),

                        Toggle::make('published')
                            ->required(),
                        ]),
                    // ->columns(1), // كمان كله تحت بعض
            ]);
    }
}
