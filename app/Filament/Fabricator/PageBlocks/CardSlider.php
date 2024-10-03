<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Filament\Forms;

class CardSlider extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('card-slider')
            ->schema([


                Forms\Components\Tabs::make('tab')
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('Settings')
                            ->schema([
                                Forms\Components\TextInput::make('id')
                                    ->required(),

                                Forms\Components\TextInput::make('title')
                                    ->required(),

                                Forms\Components\Toggle::make('pagination')
                                    ->default(false),
                            ]),

                        Forms\Components\Tabs\Tab::make('Elements')
                            ->schema([
                                Forms\Components\Repeater::make('cards')
                                    ->schema([
                                        Forms\Components\TextInput::make('title'),
                                        Forms\Components\TextInput::make('description'),
                                        Forms\Components\Textarea::make('icon')
                                            ->helperText('Inserisci l svg completo')
                                    ])
                            ]),
                    ]),



            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
