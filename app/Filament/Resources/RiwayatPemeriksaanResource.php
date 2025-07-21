<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RiwayatPemeriksaanResource\Pages;
use App\Filament\Resources\RiwayatPemeriksaanResource\RelationManagers;
use App\Models\RiwayatPemeriksaan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RiwayatPemeriksaanResource extends Resource
{
    protected static ?string $model = RiwayatPemeriksaan::class;
    protected static ?string $navigationGroup = 'Data Master';
    protected static ?string $navigationLabel = 'Riwayat';

    protected static ?string $modelLabel = 'Riwayat';

    protected static ?string $pluralModelLabel = 'Riwayat Pemeriksaan';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static bool $shouldRegisterNavigation = true;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('pasien_id')
                    ->label('Pasien')
                    ->relationship('pasien', 'nama')
                    ->searchable()
                    ->required(),
                DatePicker::make('tanggal_pemeriksaan')
                    ->required()
                    ->default(now()),
                TextInput::make('berat_badan')
                    ->numeric()
                    ->nullable()
                    ->maxValue(100)
                    ->minValue(0)
                    ->suffix('kg'),
                TextInput::make('tinggi_badan')
                    ->numeric()
                    ->nullable()
                    ->maxValue(200)
                    ->minValue(0)
                    ->suffix('cm'),
                Textarea::make('keluhan')
                    ->nullable(),
                Textarea::make('catatan')
                    ->nullable(),
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('pasien.nama')
                    ->label('Pasien')
                    ->searchable(),
                TextColumn::make('tanggal_pemeriksaan')
                    ->date()
                    ->sortable(),
                TextColumn::make('berat_badan')
                    ->sortable()
                    ->suffix(' kg'),
                TextColumn::make('tinggi_badan')
                    ->sortable()
                    ->suffix(' cm'),
                TextColumn::make('keluhan')
                    ->limit(30),
                TextColumn::make('catatan')
                    ->limit(30),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
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
            'index' => Pages\ListRiwayatPemeriksaans::route('/'),
            'create' => Pages\CreateRiwayatPemeriksaan::route('/create'),
            'edit' => Pages\EditRiwayatPemeriksaan::route('/{record}/edit'),
        ];
    }
}
