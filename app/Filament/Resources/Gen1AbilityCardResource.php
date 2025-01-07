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
                Forms\Components\Section::make('Admin')
                    ->schema([
                        Forms\Components\Group::make([
                            CuratorPicker::make('media_id')
                                ->label('Photo')
                                ->relationship('image', 'id'),
                            Forms\Components\Select::make('condition')
                                ->required()
                                ->placeholder('Near mint, etc.')
                                ->options(CardCondition::class),
                        ])->columns(2),
                        Forms\Components\Textarea::make('observations')
                            ->placeholder('Stored in the ABC box...')
                            ->required(),
                    ])->collapsed(false),
                Forms\Components\Group::make([
                    Forms\Components\Select::make('type')
                        ->label('Color')
                        ->placeholder('Red, green, blue, ...')
                        ->columnSpan(1)
                        ->required()
                        ->options(AbilityCardType::class),
                    Forms\Components\TextInput::make('power_level')
                        ->placeholder('0')
                        ->columnSpan(1)
                        ->numeric(),
                    Forms\Components\Select::make('rarity')
                        ->columnSpan(1)
                        ->required()
                        ->options(CardRarity::class)
                        ->default(CardRarity::COMMON),
                ])->columns(3)
                    ->columnSpanFull(),
                Forms\Components\Group::make([
                    Forms\Components\TextInput::make('english_name')
                        ->placeholder('Doom wind start')
                        ->columnSpan(1)
                        ->required(),
                    Forms\Components\TextInput::make('french_name')
                        ->placeholder('Commencement du vent maudit')
                        ->columnSpan(1),
                ])->columns()
                    ->columnSpanFull(),
                Forms\Components\Section::make('Attribute Bonuses')
                    ->collapsed()
                    ->columns()
                    ->extraAttributes(['class' => 'light'])
                    ->schema([
                        Forms\Components\TextInput::make('pyrus_attribute_bonus')
                            ->placeholder('0')
                            ->columnSpan(1)
                            ->prefixIcon(fn () => BakuganAttribute::PYRUS->getIcon(), isInline: true)
                            ->suffix('G')
                            ->numeric()
                            ->step(10)
                            ->multipleOf(10)
                            ->minValue(0),
                        Forms\Components\TextInput::make('aquos_attribute_bonus')
                            ->placeholder('0')
                            ->columnSpan(1)
                            ->prefixIcon(fn () => BakuganAttribute::AQUOS->getIcon(), isInline: true)
                            ->suffix('G')
                            ->numeric()
                            ->step(10)
                            ->multipleOf(10)
                            ->minValue(0),
                        Forms\Components\TextInput::make('subterra_attribute_bonus')
                            ->placeholder('0')
                            ->columnSpan(1)
                            ->prefixIcon(fn () => BakuganAttribute::SUBTERRA->getIcon(), isInline: true)
                            ->suffix('G')
                            ->numeric()
                            ->step(10)
                            ->multipleOf(10)
                            ->minValue(0),
                        Forms\Components\TextInput::make('haos_attribute_bonus')
                            ->placeholder('0')
                            ->columnSpan(1)
                            ->prefixIcon(fn () => BakuganAttribute::HAOS->getIcon(), isInline: true)
                            ->suffix('G')
                            ->numeric()
                            ->step(10)
                            ->multipleOf(10)
                            ->minValue(0),
                        Forms\Components\TextInput::make('darkus_attribute_bonus')
                            ->placeholder('0')
                            ->columnSpan(1)
                            ->prefixIcon(fn () => BakuganAttribute::DARKUS->getIcon(), isInline: true)
                            ->suffix('G')
                            ->numeric()
                            ->step(10)
                            ->multipleOf(10)
                            ->minValue(0),
                        Forms\Components\TextInput::make('ventus_attribute_bonus')
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
                    Forms\Components\Section::make('Original Effects')
                        ->columnSpan(1)
                        ->schema([
                            Forms\Components\Textarea::make('original_text')
                                ->placeholder('Play at the start of your first turn, if you have both Darkus and Ventus in your force: Take an extra turn after this one.')
                                ->required(),
                            Forms\Components\Textarea::make('original_french_text')
                                ->placeholder('A jouer au début de ton premier tour, si tu as à la fois le Darkus et le Ventus en ta possession: Tu peux rejouer après celui-ci.'),
                        ]),
                    Forms\Components\Section::make('Effects')
                        ->columnSpan(1)
                        ->schema([
                            Forms\Components\Textarea::make('english_text')
                                ->placeholder('Play at the start of your first turn. If you have both a Darkus and a Ventus Bakugan in your deck: Take an extra turn after this one.'),
                            Forms\Components\Textarea::make('french_text')
                                ->placeholder('À jouer au début de ton premier tour. Si tu as à la fois un Bakugan Darkus et un Bakugan Ventus dans ton deck : Joue un tour supplémentaire après celui-ci.'),
                        ]),
                ])->columns()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('reference')
                    ->placeholder('BA1025-AB-SM-GBL')
                    ->required(),
                Forms\Components\TextInput::make('series_reference')
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
                CuratorColumn::make('media_id'),
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
