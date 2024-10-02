@use(Filament\Facades\Filament)

<div class="flex items-center space-x-4">
    <img
        src="{{ asset('img/logo.png') }}"
        alt="{{ Filament::getBrandName() }}"
        style="height: {{ Filament::getBrandLogoHeight() }}"
    />

    <span class="font-bold">
        {{ Filament::getBrandName() }}
    </span>
</div>
