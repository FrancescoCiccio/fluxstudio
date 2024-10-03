<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Filament\Forms;

class HeroBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('hero')
            ->schema([
                //
                Forms\Components\TextInput::make('id')
                    ->required()
                    ->maxLength(20),

                Forms\Components\RichEditor::make('description')
                    ->required(),

                Forms\Components\FileUpload::make('icon')
                    ->disk('public')
                    ->directory('pages/icons'),

                Forms\Components\FileUpload::make('parallax')
                    ->disk('public')
                    ->directory('pages/parallaxs'),

                Forms\Components\FileUpload::make('heroimage')
                    ->disk('public')
                    ->directory('pages/heroimages'),

            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
