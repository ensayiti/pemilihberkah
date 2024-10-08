<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RelawanResource\Pages;
use App\Filament\Resources\RelawanResource\RelationManagers;
use App\Models\NIK;
use App\Models\Relawan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;

class RelawanResource extends Resource
{
    protected static ?string $model = Relawan::class;

    protected static ?string $navigationIcon = 'heroicon-s-users';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationLabel = 'Data Relawan';

    protected static ?string $navigationGroup = 'Database';

    protected static ?string $modelLabel = "Data Relawan";

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
                    ->label('NIK')
                    ->afterStateUpdated(function ($state, callable $set) {
                        if (empty($state)) {
                            $set('name', '');
                            $set('jenis_kelamin', '');
                            $set('kabupaten', '');
                            $set('kecamatan', '');
                            $set('kelurahan', '');
                        } else {
                            $relawan = NIK::where('nik', $state)->first();
                            if ($relawan) {
                                $set('name', $relawan->name);
                                $set('jenis_kelamin', $relawan->jenis_kelamin);
                                $set('kabupaten', $relawan->kabupaten);
                                $set('kecamatan', $relawan->kecamatan);
                                $set('kelurahan', $relawan->kelurahan);
                            }
                        }
                    })
                    ->exists(table: NIK::class)
                    ->unique(column: 'nik')
                    ->live()
                    ->rules([
                        'digits:16',
                    ])
                    ->validationMessages([
                        'exists' => "NIK tidak ditemukan/terdaftar",
                        'unique' => "NIK sudah terdaftar"
                    ]),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label('Nama')
                    ->disabled()
                    ->dehydrated(true),
                Forms\Components\Select::make('jenis_kelamin')
                    ->required()
                    ->label('Jenis Kelamin')
                    ->disabled()
                    ->dehydrated(true)
                    ->options([
                        'L' => 'Laki-Laki',
                        'P' => 'Perempuan'
                    ]),
                Forms\Components\TextInput::make('kabupaten')
                    ->required()
                    ->label('Kabupaten')
                    ->disabled()
                    ->dehydrated(true),
                Forms\Components\TextInput::make('kecamatan')
                    ->required()
                    ->label('Kecamatan')
                    ->disabled()
                    ->dehydrated(true),
                Forms\Components\TextInput::make('kelurahan')
                    ->required()
                    ->label('Kelurahan/Desa')
                    ->disabled()
                    ->dehydrated(true),
                Forms\Components\TextInput::make('alamat')
                    ->required()
                    ->label('Alamat'),
                Forms\Components\TextInput::make('no_handphone')
                    ->required()
                    ->label('No. Whatsapp')
                    ->tel()
                    ->telRegex('/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.\/0-9]*$/'),

                Forms\Components\Select::make('posisi')
                    ->required()
                    ->label('Posisi')
                    ->options([
                        'Relawan' => 'Relawan',
                        'Pemilih' => 'Pemilih'
                    ]),
                Forms\Components\TextInput::make('pengajak')
                    ->required()
                    ->label('Siapa yang mengajak?'),
                Forms\Components\Select::make('status')
                    ->required()
                    ->label('Status')
                    ->options([
                        'Proses' => 'Proses',
                        'Terverifikasi' => 'Terverifikasi'
                    ])
                    ->default('Proses')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nik')
                    ->label('NIK')
                    ->weight('semibold')
                    ->size(Tables\Columns\TextColumn\TextColumnSize::ExtraSmall)
                    ->grow(false)
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->size(Tables\Columns\TextColumn\TextColumnSize::ExtraSmall)
                    ->grow(false)
                    ->weight('semibold')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kabupaten')
                    ->label('Kabupten/Kota')
                    ->size(Tables\Columns\TextColumn\TextColumnSize::ExtraSmall)
                    ->grow(false)
                    ->weight('semibold')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kecamatan')
                    ->label('Kecamatan')
                    ->size(Tables\Columns\TextColumn\TextColumnSize::ExtraSmall)
                    ->grow(false)
                    ->weight('semibold')
                    ->searchable(isIndividual: true, isGlobal: false),
                Tables\Columns\TextColumn::make('kelurahan')
                    ->label('Kelurahan/Desa')
                    ->size(Tables\Columns\TextColumn\TextColumnSize::ExtraSmall)
                    ->grow(false)
                    ->weight('semibold')
                    ->searchable(isIndividual: true, isGlobal: false),
                Tables\Columns\TextColumn::make('no_handphone')
                    ->label('No. Whatsapp')
                    ->size(Tables\Columns\TextColumn\TextColumnSize::ExtraSmall)
                    ->grow(false)
                    ->weight('semibold'),
                Tables\Columns\TextColumn::make('pengajak')
                    ->label('Pengajak')
                    ->size(Tables\Columns\TextColumn\TextColumnSize::ExtraSmall)
                    ->grow(false)
                    ->searchable(isIndividual: true, isGlobal: false),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'Proses' => 'warning',
                        'Terverifikasi' => 'success',
                        default => 'primary',
                    }),
            ])
            ->searchPlaceholder('Ketik NIK atau Nama')
            ->defaultPaginationPageOption(25)
            ->paginated([25, 50, 100, 200, 500])
            ->defaultSort(function (Builder $query) {
                return $query->orderByRaw("CASE WHEN status = 'Proses' THEN 0 ELSE 1 END")
                    ->orderBy('created_at', 'desc');
            })

            ->filters([
                Tables\Filters\SelectFilter::make('kabupaten')
                    ->options([
                        'balikpapan' => 'BALIKPAPAN',
                        'berau' => 'BERAU',
                        'bontang' => 'BONTANG',
                        'kutai barat' => 'KUTAI BARAT',
                        'kutai kertanegara' => 'KUTAI KERTANEGARA',
                        'kutai timur' => 'KUTAI TIMUR',
                        'mahakam hulu' => 'MAHAKAM ULU',
                        'paser' => 'PASER',
                        'penajam paser utara' => 'PENAJAM PASER UTARA',
                        'samarinda' => 'SAMARINDA',
                    ]),
            ])
            ->actions([
                Tables\Actions\Action::make('Verifikasi')
                    ->label('Verifikasi')
                    ->action(function ($record) {
                        if ($record->status == 'Proses') {
                            $record->update(['status' => 'Terverifikasi']);
                        }
                    })
                    ->button()
                    ->disabled(fn ($record) => $record->status === 'Terverifikasi')
                    ->requiresConfirmation()
                    ->modalHeading('Konfirmasi')
                    ->modalSubheading('Apakah Anda yakin ingin memverifikasi data ini?')
                    ->modalButton('Verifikasi'),
                Tables\Actions\ViewAction::make()
                    ->label('Detail'),
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
            ])
            ->bulkActions([
                ExportBulkAction::make()
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
            'index' => Pages\ListRelawans::route('/'),
            'create' => Pages\CreateRelawan::route('/create'),
            'edit' => Pages\EditRelawan::route('/{record}/edit'),
        ];
    }
}
