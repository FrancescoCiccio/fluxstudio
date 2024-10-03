<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Filament\Forms;

class Faqs extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('faqs')
            ->schema([
                //
                Forms\Components\TextInput::make('title')
                    ->required(),

                Forms\Components\Repeater::make('faqs')
                    ->schema(
                        [
                            Forms\Components\TextInput::make('question'),
                            Forms\Components\Textarea::make('answer')
                        ]
                    ),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
