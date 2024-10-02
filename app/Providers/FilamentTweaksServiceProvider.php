<?php

declare(strict_types=1);

namespace App\Providers;

use Awcodes\Curator\Components\Forms\CuratorPicker;
use BezhanSalleh\FilamentLanguageSwitch\LanguageSwitch;
use Filament\Forms\Components\Field;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Get;
use Illuminate\Support\ServiceProvider;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class FilamentTweaksServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        Field::macro(
            'requiredIfNot',
            fn(string $otherFieldPath): Field => /**
             * @var Field $this
             */
            $this->required(fn(Get $get) => !filled($get($otherFieldPath)))
                ->live(onBlur: true),
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        LanguageSwitch::configureUsing(function (LanguageSwitch $switch) {
            $switch->locales([
                'en',
                'fr'
            ])
                ->flags([
                    'en' => asset('vendor/blade-flags/country-us.svg'),
                    'fr' => asset('vendor/blade-flags/country-fr.svg'),
                ])
                ->circular();
        });

        TinyEditor::configureUsing(
            function (TinyEditor $editor) {
                $editor->profile('simple')
                    ->minHeight(300 /*px*/);
            },
        );

        Section::configureUsing(
            function (Section $section) {
                $section->collapsed(shouldMakeComponentCollapsible: false)
                    ->compact();
            },
        );

        Repeater::configureUsing(
            function (Repeater $repeater) {
                $repeater
//                    ->itemLabel(fn (Get $get) => $get('admin_title') ?? $get('title') ?? '')
                    ->itemLabel(fn($state) => $state['admin_title'] ?? $state['title'] ?? '')
                    ->collapsible()
                    ->collapsed()
                    //->reorderableWithButtons()
                    ->reorderableWithDragAndDrop();
            },
        );

        Select::configureUsing(
            function (Select $select) {
                $select
                    ->default(fn($options) => $options[0] ?? null)
                    ->native(false)
                    ->selectablePlaceholder(false);
            },
        );

        /*RichEditor::configureUsing(
            function (RichEditor $richEditor) {
                $richEditor->toolbarButtons(
                    [
                        'bold',
                        'italic',
                        'bulletList',
                        'link',
                    ]
                );
            }
        );*/

        Textarea::configureUsing(function (Textarea $textarea) {
            $textarea
                ->rows(8);
        });

        CuratorPicker::configureUsing(
            function (CuratorPicker $curatorPicker) {
                $curatorPicker
                    ->buttonLabel('Upload')
                    ->color('primary')
                    ->outlined(false)
                    ->size('md')
                    ->acceptedFileTypes(['image/jpeg', 'image/png']);
            },
        );
    }
}
