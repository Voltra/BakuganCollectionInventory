@props(['value', 'select'])

@php
    /**
     * @var \UnitEnum $value
     * @var \App\Forms\Components\EnumSelect $select
     */
@endphp

@php($text = $value instanceof \Filament\Support\Contracts\HasLabel ? $value->getLabel() : $value)
@php($icon = $value instanceof \Filament\Support\Contracts\HasIcon ? $value->getIcon() : null)
@php($color = $select->usesColor() && is_a($value, \Filament\Support\Contracts\HasColor::class) ? $value->getColor() : null)

<x-filament::badge :color="$color">
    <span class="col-[--col-span-default] flex items-center justify-center gap-2">
        @if(!empty($icon))
            <span class="size-4">
                {{ svg($icon) }}
            </span>
        @endif

        <span class="font-bold">
            {{ $text }}
        </span>
    </span>
</x-filament::badge>
