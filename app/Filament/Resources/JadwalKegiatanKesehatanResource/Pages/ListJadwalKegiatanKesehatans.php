<?php

namespace App\Filament\Resources\JadwalKegiatanKesehatanResource\Pages;

use App\Filament\Resources\JadwalKegiatanKesehatanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJadwalKegiatanKesehatans extends ListRecords
{
    protected static string $resource = JadwalKegiatanKesehatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
