<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Enums\Gen1\Cards\AbilityCardType;
use App\Enums\Gen1\Toys\BakuganAttribute;
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
    protected static ?string $model = Gen1AbilityCard::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Admin')
                    ->schema([
                        CuratorPicker::make('media_id')
                            ->relationship('image', 'id'),
                        Forms\Components\Textarea::make('observations')
                            ->required(),
                    ]),
                Forms\Components\Select::make('type')
                    ->required()
                    ->options(AbilityCardType::class),
                Forms\Components\TextInput::make('power_level')
                    ->numeric(),
                Forms\Components\Group::make([
                    Forms\Components\TextInput::make('english_name')
                        ->required(),
                    Forms\Components\TextInput::make('french_name'),
                ]),
                Forms\Components\Section::make('Attribute Bonuses')
                    ->collapsed()
                    ->schema([
                        Forms\Components\TextInput::make('pyrus_attribute_bonus')
                            ->prefixIcon(fn () => BakuganAttribute::PYRUS->getIcon())
                            ->numeric()
                            ->multipleOf(10)
                            ->minValue(0),
                        Forms\Components\TextInput::make('aquos_attribute_bonus')
                            ->prefixIcon(fn () => BakuganAttribute::AQUOS->getIcon())
                            ->numeric()
                            ->multipleOf(10)
                            ->minValue(0),
                        Forms\Components\TextInput::make('subterra_attribute_bonus')
                            ->prefixIcon(fn () => BakuganAttribute::SUBTERRA->getIcon())
                            ->numeric()
                            ->multipleOf(10)
                            ->minValue(0),
                        Forms\Components\TextInput::make('haos_attribute_bonus')
                            ->prefixIcon(fn () => BakuganAttribute::HAOS->getIcon())
                            ->numeric()
                            ->multipleOf(10)
                            ->minValue(0),
                        Forms\Components\TextInput::make('darkus_attribute_bonus')
                            ->prefixIcon(fn () => BakuganAttribute::DARKUS->getIcon())
                            ->numeric()
                            ->multipleOf(10)
                            ->minValue(0),
                        Forms\Components\TextInput::make('ventus_attribute_bonus')
                            ->prefixIcon(fn () => BakuganAttribute::VENTUS->getIcon())
                            ->numeric()
                            ->multipleOf(10)
                            ->minValue(0),
                    ]),
                Forms\Components\Section::make('Original Effects')
                    ->schema([
                        Forms\Components\Textarea::make('original_text')
                            ->required()
                            ->columnSpan(1),
                        Forms\Components\Textarea::make('original_french_text')
                            ->columnSpan(1),
                    ]),
                Forms\Components\Section::make('Effects')
                    ->schema([
                        Forms\Components\Textarea::make('english_text')
                            ->columnSpan(1),
                        Forms\Components\Textarea::make('french_text')
                            ->columnSpan(1),
                    ]),
                Forms\Components\TextInput::make('reference')
                    ->required(),
                Forms\Components\TextInput::make('series_reference')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                CuratorColumn::make('media_id'),
                Tables\Columns\TextColumn::make('type')
                    ->badge()
                    ->searchable(),
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
                //
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
