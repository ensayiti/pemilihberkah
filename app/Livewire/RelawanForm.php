<?php

namespace App\Livewire;

use App\Models\NIK;
use App\Models\RelawanManual;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Livewire\Component;
use Illuminate\Contracts\View\View;

class RelawanForm extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];
    public $is_nik_registered = null;

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nik')
                    ->required()
                    ->label('NIK')
                    ->afterStateUpdated(function ($state, Forms\Set $set) {
                        if (empty($state)) {
                            $this->resetFields($set);
                            $this->is_nik_registered = null;
                        } else {
                            $nik = NIK::where('nik', $state)->first();
                            if ($nik) {
                                $this->fillFields($set, $nik);
                                $this->is_nik_registered = true;
                            } else {
                                $this->resetFields($set);
                                $this->is_nik_registered = false;
                                $this->redirectToDaftarForm($state);
                            }
                        }
                    })
                    ->live(debounce: 2000)
                    ->rules(['digits:16'])
                    ->validationMessages([
                        'digits' => 'NIK harus terdiri dari 16 digit angka.',
                    ]),

                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label('Nama')
                    ->disabled()
                    ->dehydrated(),

                Forms\Components\TextInput::make('jenis_kelamin')
                    ->required()
                    ->label('Jenis Kelamin')
                    ->hidden()
                    ->dehydrated(),

                Forms\Components\TextInput::make('kabupaten')
                    ->required()
                    ->label('Kabupaten')
                    ->disabled()
                    ->dehydrated(),

                Forms\Components\TextInput::make('kecamatan')
                    ->required()
                    ->label('Kecamatan')
                    ->disabled()
                    ->dehydrated(),

                Forms\Components\TextInput::make('kelurahan')
                    ->required()
                    ->label('Kelurahan/Desa')
                    ->disabled()
                    ->dehydrated(),

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
                    ])
                    ->hidden()
                    ->dehydrated(true),
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
                    ->disabled()
                    ->dehydrated(true)
            ])
            ->statePath('data')
            ->model(RelawanManual::class);
    }

    public function create(): void
    {
        $data = $this->form->getState();

        if ($this->is_nik_registered !== true) {
            Notification::make()
                ->danger()
                ->title('NIK tidak terdaftar')
                ->body('Silakan daftar terlebih dahulu.')
                ->send();
            return;
        }

        $record = RelawanManual::create($data);

        $this->form->model($record)->saveRelationships();

        Notification::make()
            ->success()
            ->title('Selamat! Anda telah terdaftar!')
            ->seconds(5)
            ->send();

        $this->form->fill();
        $this->is_nik_registered = null;
    }

    public function render(): View
    {
        return view('livewire.relawan-form');
    }

    private function resetFields($set)
    {
        $set('name', '');
        $set('jenis_kelamin', '');
        $set('kabupaten', '');
        $set('kecamatan', '');
        $set('kelurahan', '');
    }

    private function fillFields($set, $nik)
    {
        $set('name', $nik->name);
        $set('jenis_kelamin', $nik->jenis_kelamin);
        $set('kabupaten', $nik->kabupaten);
        $set('kecamatan', $nik->kecamatan);
        $set('kelurahan', $nik->kelurahan);
    }

    private function redirectToDaftarForm($nik)
    {
        // Menampilkan notifikasi sebelum redirect
        Notification::make()
            ->warning()
            ->title('NIK Belum Terdaftar')
            ->body('Anda dialihkan ke halaman pendaftaran.')
            ->persistent()
            ->send();

        // Menggunakan session flash untuk menyimpan NIK sementara
        session()->flash('temp_nik', $nik);

        // Redirect ke form pendaftaran dengan delay
        $this->redirect('/form-daftar', navigate: true);
    }
}
