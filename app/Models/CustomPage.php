<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Z3d0X\FilamentFabricator\Models\Page;

class CustomPage extends Page
{
    use HasFactory;

    // Aggiungi qui gli accessor per heroBlocks e mainBlocks

    public function getHeroBlocksAttribute()
    {
        return collect($this->blocks)->filter(function ($block) {
            return $block['type'] === 'hero';
        })->values();
    }

    public function getMainBlocksAttribute()
    {
        return collect($this->blocks)->reject(function ($block) {
            return $block['type'] === 'hero';
        })->values();
    }
}
