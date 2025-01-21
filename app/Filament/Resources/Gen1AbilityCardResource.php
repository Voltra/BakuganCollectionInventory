<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Enums\Gen1\Cards\AbilityCardType;
use App\Enums\Gen1\Cards\CardCondition;
use App\Enums\Gen1\Cards\CardRarity;
use App\Enums\Gen1\Toys\BakuganAttribute;
use App\Filament\Pages\Concerns\Gen1Page;
use App\Filament\Resources\Gen1AbilityCardResource\Pages;
use App\Models\Gen1AbilityCard;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Awcodes\Curator\Components\Tables\CuratorColumn;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class Gen1AbilityCardResource extends Resource
{
    use Gen1Page;

    protected static ?string $model = Gen1AbilityCard::class;

    protected static ?string $navigationIcon = 'gameicon-card-ace-diamonds';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make(__l('gen1/abilityCards.sections.meta'))
                    ->schema([
                        Forms\Components\Group::make([
                            Forms\Components\Group::make([
                                CuratorPicker::make('front_media_id')
                                    ->label(__l('gen1/abilityCards.fields.front_media_id'))
                                    ->required()
                                    ->relationship('frontImage', 'id'),
                                CuratorPicker::make('back_media_id')
                                    ->label(__l('gen1/abilityCards.fields.back_media_id'))
                                    ->nullable()
                                    ->relationship('backImage', 'id'),
                            ])->columns(1),
                            Forms\Components\Group::make([
                                Forms\Components\Select::make('condition')
                                    ->label(__l('gen1/abilityCards.fields.condition'))
                                    ->required()
                                    ->placeholder(__l('gen1/abilityCards.placeholders.condition'))
                                    ->options(CardCondition::class),
                                Forms\Components\Textarea::make('observations')
                                    ->label(__l('gen1/abilityCards.fields.observations'))
                                    ->placeholder(__l('gen1/abilityCards.placeholders.observations'))
                                    ->required(),
                            ])->columns(1),
                        ])->columns(2),
                    ])->collapsed(false),
                Forms\Components\Group::make([
                    Forms\Components\Select::make('type')
                        ->label(__l('gen1/abilityCards.fields.type'))
                        ->placeholder(__l('gen1/abilityCards.placeholders.type'))
                        ->columnSpan(1)
                        ->required()
                        ->options(AbilityCardType::class),
                    Forms\Components\TextInput::make('power_level')
                        ->label(__l('gen1/abilityCards.fields.power_level'))
                        ->placeholder(__l('gen1/abilityCards.placeholders.power_level'))
                        ->columnSpan(1)
                        ->numeric(),
                    Forms\Components\Select::make('rarity')
                        ->label(__l('gen1/abilityCards.fields.rarity'))
                        ->columnSpan(1)
                        ->required()
                        ->options(CardRarity::class)
                        ->default(CardRarity::COMMON),
                ])->columns(3)
                    ->columnSpanFull(),
                Forms\Components\Group::make([
                    Forms\Components\TextInput::make('english_name')
                        ->label(__l('gen1/abilityCards.fields.english_name'))
                        ->placeholder(__l('gen1/abilityCards.placeholders.english_name'))
                        ->columnSpan(1)
                        ->required(),
                    Forms\Components\TextInput::make('french_name')
                        ->label(__l('gen1/abilityCards.fields.french_name'))
                        ->placeholder(__l('gen1/abilityCards.placeholders.french_name'))
                        ->columnSpan(1),
                ])->columns()
                    ->columnSpanFull(),
                Forms\Components\Section::make(__l('gen1/abilityCards.sections.attribute_bonuses'))
                    ->collapsed()
                    ->columns(2)
                    ->extraAttributes(['class' => 'light'])
                    ->schema([
                        Forms\Components\TextInput::make('pyrus_attribute_bonus')
                            ->label(__l('gen1/attributeBonus.pyrus'))
                            ->placeholder('0')
                            ->columnSpan(1)
                            ->prefixIcon(fn () => BakuganAttribute::PYRUS->getIcon(), isInline: true)
                            ->suffix('G')
                            ->numeric()
                            ->step(10)
                            ->multipleOf(10)
                            ->minValue(0),
                        Forms\Components\TextInput::make('aquos_attribute_bonus')
                            ->label(__l('gen1/attributeBonus.aquos'))
                            ->placeholder('0')
                            ->columnSpan(1)
                            ->prefixIcon(fn () => BakuganAttribute::AQUOS->getIcon(), isInline: true)
                            ->suffix('G')
                            ->numeric()
                            ->step(10)
                            ->multipleOf(10)
                            ->minValue(0),
                        Forms\Components\TextInput::make('subterra_attribute_bonus')
                            ->label(__l('gen1/attributeBonus.subterra'))
                            ->placeholder('0')
                            ->columnSpan(1)
                            ->prefixIcon(fn () => BakuganAttribute::SUBTERRA->getIcon(), isInline: true)
                            ->suffix('G')
                            ->numeric()
                            ->step(10)
                            ->multipleOf(10)
                            ->minValue(0),
                        Forms\Components\TextInput::make('haos_attribute_bonus')
                            ->label(__l('gen1/attributeBonus.haos'))
                            ->placeholder('0')
                            ->columnSpan(1)
                            ->prefixIcon(fn () => BakuganAttribute::HAOS->getIcon(), isInline: true)
                            ->suffix('G')
                            ->numeric()
                            ->step(10)
                            ->multipleOf(10)
                            ->minValue(0),
                        Forms\Components\TextInput::make('darkus_attribute_bonus')
                            ->label(__l('gen1/attributeBonus.darkus'))
                            ->placeholder('0')
                            ->columnSpan(1)
                            ->prefixIcon(fn () => BakuganAttribute::DARKUS->getIcon(), isInline: true)
                            ->suffix('G')
                            ->numeric()
                            ->step(10)
                            ->multipleOf(10)
                            ->minValue(0),
                        Forms\Components\TextInput::make('ventus_attribute_bonus')
                            ->label(__l('gen1/attributeBonus.ventus'))
                            ->placeholder('0')
                            ->columnSpan(1)
                            ->prefixIcon(fn () => BakuganAttribute::VENTUS->getIcon(), isInline: true)
                            ->suffix('G')
                            ->numeric()
                            ->step(10)
                            ->multipleOf(10)
                            ->minValue(0),
                    ]),
                Forms\Components\Group::make([
                    Forms\Components\Section::make(__l('gen1/abilityCards.sections.original_effects'))
                        ->columnSpan(1)
                        ->schema([
                            Forms\Components\Textarea::make('original_text')
                                ->label(__l('gen1/abilityCards.fields.original_text'))
                                ->placeholder(__l('gen1/abilityCards.placeholders.original_text'))
                                ->required(),
                            Forms\Components\Textarea::make('original_french_text')
                                ->label(__l('gen1/abilityCards.fields.original_french_text'))
                                ->placeholder(__l('gen1/abilityCards.placeholders.original_french_text')),
                        ]),
                    Forms\Components\Section::make(__l('gen1/abilityCards.sections.effects'))
                        ->columnSpan(1)
                        ->schema([
                            Forms\Components\Textarea::make('english_text')
                                ->label(__l('gen1/abilityCards.fields.english_text'))
                                ->placeholder(__l('gen1/abilityCards.placeholders.english_text')),
                            Forms\Components\Textarea::make('french_text')
                                ->label(__l('gen1/abilityCards.fields.french_text'))
                                ->placeholder(__l('gen1/abilityCards.placeholders.french_text')),
                        ]),
                ])->columns()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('reference')
                    ->label(__l('gen1/abilityCards.fields.reference'))
                    ->helperText(__l('gen1/abilityCards.help.reference'))
                    ->placeholder('BA1025-AB-SM-GBL')
                    ->required(),
                Forms\Components\TextInput::make('series_reference')
                    ->label(__l('gen1/abilityCards.fields.series_reference'))
                    ->helperText(__l('gen1/abilityCards.help.series_reference'))
                    ->placeholder('25/48a')
                    ->required(),
            ]);
    }

    /**
     * @throws \Exception
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                CuratorColumn::make('front_media_id'),
                Tables\Columns\TextColumn::make('type')
                    ->badge(),
                Tables\Columns\TextColumn::make('condition')
                    ->badge(),
                Tables\Columns\TextColumn::make('power_level')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('english_name')
                    ->searchable()
                    ->description(fn (Gen1AbilityCard $card) => $card->english_text),
                Tables\Columns\TextColumn::make('french_name')
                    ->searchable()
                    ->description(fn (Gen1AbilityCard $card) => $card->french_text),
                Tables\Columns\TextColumn::make('pyrus_attribute_bonus')
                    ->numeric()
                    ->icon(BakuganAttribute::PYRUS->getIcon())
                    ->sortable(),
                Tables\Columns\TextColumn::make('aquos_attribute_bonus')
                    ->numeric()
                    ->icon(BakuganAttribute::AQUOS->getIcon())
                    ->sortable(),
                Tables\Columns\TextColumn::make('subterra_attribute_bonus')
                    ->numeric()
                    ->icon(BakuganAttribute::SUBTERRA->getIcon())
                    ->sortable(),
                Tables\Columns\TextColumn::make('haos_attribute_bonus')
                    ->numeric()
                    ->icon(BakuganAttribute::HAOS->getIcon())
                    ->sortable(),
                Tables\Columns\TextColumn::make('darkus_attribute_bonus')
                    ->numeric()
                    ->icon(BakuganAttribute::DARKUS->getIcon())
                    ->sortable(),
                Tables\Columns\TextColumn::make('ventus_attribute_bonus')
                    ->numeric()
                    ->icon(BakuganAttribute::VENTUS->getIcon())
                    ->sortable(),
                Tables\Columns\TextColumn::make('reference')
                    ->searchable(),
                Tables\Columns\TextColumn::make('series_reference')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('type')
                    ->options(AbilityCardType::class),
                Tables\Filters\SelectFilter::make('condition')
                    ->options(CardCondition::class),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ReplicateAction::make(),
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
            'index' => Pages\ListGen1AbilityCards::route('/'),
            'create' => Pages\CreateGen1AbilityCard::route('/create'),
            'edit' => Pages\EditGen1AbilityCard::route('/{record}/edit'),
        ];
    }
}
