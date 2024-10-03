<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Filament\Forms;

class SimpleParagraph extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('simple-paragraph')
            ->schema([
                //
                Forms\Components\TextInput::make('id')
                    ->required(),

                Forms\Components\TextInput::make('title')
                    ->required(),

                Forms\Components\TextInput::make('subtitle'),

                Forms\Components\RichEditor::make('text')

            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
