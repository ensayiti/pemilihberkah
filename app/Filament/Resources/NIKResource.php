<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NIKResource\Pages;
use App\Filament\Resources\NIKResource\RelationManagers;
use App\Models\NIK;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NIKResource extends Resource
{
    protected static ?string $model = NIK::class;

    protected static ?string $navigationIcon = 'heroicon-s-chat-bubble-oval-left-ellipsis';

    protected static ?int $navigationSort = 3;

    protected static ?string $navigationLabel = 'Database NIK';

    protected static ?string $navigationGroup = 'Database';

    protected static ?string $modelLabel = "Database NIK";

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nik')
                    ->required()
                    ->label('NIK'),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label('Nama'),
                Forms\Components\TextInput::make('jenis_kelamin')
                    ->required()
                    ->label('Jenis Kelamin'),
                Forms\Components\TextInput::make('kabupaten')
                    ->required()
                    ->label('Kabupaten'),
                Forms\Components\TextInput::make('kecamatan')
                    ->required()
                    ->label('Kecamatan'),
                Forms\Components\TextInput::make('kelurahan')
                    ->required()
                    ->label('Kelurahan/Desa'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nik')
                    ->label('NIK')
                    ->weight('semibold')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->weight('semibold')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis_kelamin')
                    ->label('Jenis Kelamin'),
                Tables\Columns\TextColumn::make('kabupaten')
                    ->label('Kabupaten'),
                Tables\Columns\TextColumn::make('kecamatan')
                    ->label('Kecamatan'),
                Tables\Columns\TextColumn::make('kelurahan')
                    ->label('Kelurahan/Desa')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListNIKS::route('/'),
            'create' => Pages\CreateNIK::route('/create'),
            'edit' => Pages\EditNIK::route('/{record}/edit'),
        ];
    }
}
