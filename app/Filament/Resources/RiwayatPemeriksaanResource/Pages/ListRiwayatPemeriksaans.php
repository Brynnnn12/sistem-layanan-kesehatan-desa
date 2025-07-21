<?php

namespace App\Filament\Resources\RiwayatPemeriksaanResource\Pages;

use App\Filament\Resources\RiwayatPemeriksaanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRiwayatPemeriksaans extends ListRecords
{
    protected static string $resource = RiwayatPemeriksaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
