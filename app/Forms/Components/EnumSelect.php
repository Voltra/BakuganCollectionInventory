<?php

declare(strict_types=1);

namespace App\Forms\Components;

use Filament\Forms\Components\Select;
use Illuminate\Contracts\Support\Arrayable;

class EnumSelect extends Select
{
//    protected string $view = 'forms.components.enum-select';
    protected string $itemView = 'forms.components.item.enum-select';

    protected bool $useColor = false;

    /**
     * @var class-string<\UnitEnum>|null
     */
    protected ?string $enumClass = null;

    #[\Override]
    protected function setUp(): void
    {
        parent::setUp();

        $this->allowHtml();

        $this->getOptionLabelsUsing(function (EnumSelect $component, array $values) {
            $options = $component->getOptions();

            $labels = [];

            foreach ($values as $value) {
                foreach ($options as $groupedOptions) {
                    if (! is_array($groupedOptions)) {
                        continue;
                    }

                    if (! array_key_exists($value, $groupedOptions)) {
                        continue;
                    }

                    $labels[$value] = $groupedOptions[$value];

                    continue 2;
                }

                $labels[$value] = $component->renderOptionLabel($options[$value] ?? $value);
            }

            return $labels;
        });

        $this->getOptionLabelUsing(fn ($value) => $this->renderOptionLabel($value));

        $this->extraAlpineAttributes([
            'class' => 'enumSelect',
        ]);
    }

    public function renderOptionLabel($value): string
    {
        $value = asEnumCase($value, $this->getEnumClass());

        return view($this->itemView, [
            'value' => $value,
            'select' => $this,
        ])->render();
    }

    public function useColor(bool $condition = true): static
    {
        $this->useColor = $condition;

        return $this;
    }

    public function usesColor(): bool
    {
        return $this->useColor;
    }

    /**
     * @param class-string<\UnitEnum> $enumClass
     * @return $this
     */
    public function enumClass(string $enumClass): static
    {
        $this->enumClass = $enumClass;

        return $this;
    }

    /**
     * @return class-string<\UnitEnum>
     */
    public function getEnumClass(): string
    {
        return $this->enumClass;
    }

    #[\Override]
    public function options(array|\Closure|string|Arrayable|null $options): static
    {
        if (is_string($options) && enum_exists($options)) {
            $this->enumClass($options);
        }

        return parent::options($options);
    }

    #[\Override]
    public function getOptions(): array
    {
        $ret = [];

        foreach (parent::getOptions() as $value => $label) {
            $ret[$value] = $this->renderOptionLabel($value);
        }

        return $ret;
    }
}
