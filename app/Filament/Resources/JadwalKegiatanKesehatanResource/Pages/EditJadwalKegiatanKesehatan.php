<?php

namespace App\Filament\Resources\JadwalKegiatanKesehatanResource\Pages;

use App\Filament\Resources\JadwalKegiatanKesehatanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJadwalKegiatanKesehatan extends EditRecord
{
    protected static string $resource = JadwalKegiatanKesehatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
