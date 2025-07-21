<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JadwalKegiatanKesehatanResource\Pages;
use App\Filament\Resources\JadwalKegiatanKesehatanResource\RelationManagers;
use App\Models\JadwalKegiatanKesehatan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JadwalKegiatanKesehatanResource extends Resource
{
    protected static ?string $model = JadwalKegiatanKesehatan::class;
    protected static ?string $navigationGroup = 'Data Master';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Jadwal';

    protected static ?string $modelLabel = 'Jadwal';

    protected static ?string $pluralModelLabel = 'Jadwal Kegiatan Kesehatan';
    protected static ?int $navigationSort = 1;

    protected static bool $shouldRegisterNavigation = true;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul_kegiatan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('jenis_kegiatan')
                    ->options([
                        'posyandu' => 'Posyandu',
                        'lansia' => 'Lansia',
                        'imunisasi' => 'Imunisasi',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('lokasi')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tanggal')
                    ->required(),
                Forms\Components\TimePicker::make('jam_mulai')
                    ->required(),
                Forms\Components\TimePicker::make('jam_selesai')
                    ->required(),
                Forms\Components\Textarea::make('keterangan')
                    ->nullable(),
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul_kegiatan')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jenis_kegiatan')
                    ->sortable(),
                Tables\Columns\TextColumn::make('lokasi')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jam_mulai')
                    ->sortable(),
                Tables\Columns\TextColumn::make('jam_selesai')
                    ->sortable(),
                Tables\Columns\TextColumn::make('keterangan')
                    ->limit(30),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJadwalKegiatanKesehatans::route('/'),
            'create' => Pages\CreateJadwalKegiatanKesehatan::route('/create'),
            'edit' => Pages\EditJadwalKegiatanKesehatan::route('/{record}/edit'),
        ];
    }
}
