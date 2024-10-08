<main class='py-10 md:py-0'>
{{--    <div class="flex justify-center m-4 py-2">--}}
{{--        <img src="{{ asset('images/relawanberkah.jpeg') }}" class="w-1/3 object-contain " alt="Social Media Banner">--}}
{{--    </div>--}}
    <div class="flex justify-center items-center mx-auto">
        <form wire:submit="create">
            {{--            <div class="flex p-2 mb-2 text-sm text-black rounded-lg" role="alert">--}}
            {{--                <div class="text-lg">--}}
            {{--                    <span class="font-bold">Form Relawan</span>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            {{ $this->form }}

            <div class="flex items-center my-4">
                <h1 class="text-md font-semibold underline">Harap isi data dengan benar untuk lolos verifikasi.</h1>
            </div>

            <button type="submit" class="flex items-center justify-center mx-auto w-full mt-4 mb-4 text-sm font-semibold p-2 border-2 border-black rounded-xl">
                Kirim
            </button>
        </form>

        <x-filament-actions::modals />
    </div>
</main>
