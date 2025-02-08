<?php

namespace App\Filament\Resources;

use App\Enums\AdminGroup;
use App\Enums\Gen1\Cards\AbilityCardType;
use App\Enums\Gen1\Cards\CardCondition;
use App\Enums\Gen1\Cards\CardLanguageType;
use App\Enums\Gen1\Cards\CardRarity;
use App\Enums\Gen1\Toys\SupportAttribute;
use App\Filament\Pages\Concerns\Gen1Page;
use App\Filament\Resources\Gen1BattleGearReferenceCardResource\Pages;
use App\Filament\Resources\Gen1BattleGearReferenceCardResource\RelationManagers;
use App\Models\Gen1BattleGearReferenceCard;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Awcodes\Curator\Components\Tables\CuratorColumn;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class Gen1BattleGearReferenceCardResource extends Resource
{
    use Gen1Page;

    protected static ?string $model = Gen1BattleGearReferenceCard::class;

    protected static ?string $navigationIcon = 'gameicon-lightning-spanner';

    protected static ?string $recordTitleAttribute = 'english_name';

    #[\Override]
    public static function getTranslationKey(): string
    {
        return 'gen1/battleGearReferenceCards';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make(__l('gen1/battleGearReferenceCards.sections.meta'))
                    ->schema([
                        Forms\Components\Group::make([
                            Forms\Components\Group::make([
                                CuratorPicker::make('front_media_id')
                                    ->label(__l('gen1/battleGearReferenceCards.fields.front_media_id'))
                                    ->required()
                                    ->relationship('frontImage', 'id')
                                    ->directory('gen1/battleGearReferenceCard/front/')
                                    ->limitToDirectory()
                                    ->imageResizeTargetWidth('568px'),
                                CuratorPicker::make('back_media_id')
                                    ->label(__l('gen1/battleGearReferenceCards.fields.back_media_id'))
                                    ->nullable()
                                    ->relationship('backImage', 'id')
                                    ->directory('gen1/battleGearReferenceCard/back/')
                                    ->limitToDirectory()
                                    ->imageResizeTargetWidth('568px'),
                            ])->columns(1),
                            Forms\Components\Group::make([
                                Forms\Components\Select::make('condition')
                                    ->label(__l('gen1/battleGearReferenceCards.fields.condition'))
                                    ->required()
                                    ->placeholder(__l('gen1/battleGearReferenceCards.placeholders.condition'))
                                    ->options(CardCondition::class),
                                Forms\Components\Textarea::make('observations')
                                    ->label(__l('gen1/battleGearReferenceCards.fields.observations'))
                                    ->placeholder(__l('gen1/battleGearReferenceCards.placeholders.observations'))
                                    ->default(''),
                            ])->columns(1),
                        ])->columns(2),
                    ])->collapsed(false),
                Forms\Components\Group::make([
                    Forms\Components\TextInput::make('power_level')
                        ->label(__l('gen1/battleGearReferenceCards.fields.power_level'))
                        ->placeholder(__l('gen1/battleGearReferenceCards.placeholders.power_level'))
                        ->columnSpan(1)
                        ->numeric(),
                    Forms\Components\Select::make('language_type')
                        ->label(__l('gen1/battleGearReferenceCards.fields.language_type'))
                        ->columnSpan(1)
                        ->required()
                        ->options(CardLanguageType::class)
                        ->default(CardLanguageType::EN_FR),
                ])->columns(2)
                    ->columnSpanFull(),
                Forms\Components\Group::make([
                    Forms\Components\TextInput::make('english_name')
                        ->label(__l('gen1/battleGearReferenceCards.fields.english_name'))
                        ->placeholder(__l('gen1/battleGearReferenceCards.placeholders.english_name'))
                        ->columnSpan(1)
                        ->required(),
                    Forms\Components\TextInput::make('french_name')
                        ->label(__l('gen1/battleGearReferenceCards.fields.french_name'))
                        ->placeholder(__l('gen1/battleGearReferenceCards.placeholders.french_name'))
                        ->columnSpan(1),
                ])->columns(2)
                    ->columnSpanFull(),
                Forms\Components\Group::make([
                    Forms\Components\Select::make('left_attribute')
                        ->label(__l('gen1/battleGearReferenceCards.fields.left_attribute'))
                        ->placeholder(__l('gen1/battleGearReferenceCards.placeholders.left_attribute'))
                        ->required()
                        ->options(SupportAttribute::class)
                        ->different('right_attribute')
                        ->columnSpanFull(),
                    Forms\Components\Section::make(__l('gen1/battleGearReferenceCards.sections.left_original_effects'))
                        ->columnSpan(1)
                        ->schema([
                            Forms\Components\Textarea::make('left_original_text')
                                ->label(__l('gen1/battleGearReferenceCards.fields.left_original_text'))
                                ->placeholder(__l('gen1/battleGearReferenceCards.placeholders.left_original_text'))
                                ->required()
                                ->default(''),
                            Forms\Components\Textarea::make('left_original_french_text')
                                ->label(__l('gen1/battleGearReferenceCards.fields.left_original_french_text'))
                                ->placeholder(__l('gen1/battleGearReferenceCards.placeholders.left_original_french_text')),
                        ]),
                    Forms\Components\Section::make(__l('gen1/battleGearReferenceCards.sections.left_effects'))
                        ->columnSpan(1)
                        ->schema([
                            Forms\Components\Textarea::make('left_english_text')
                                ->label(__l('gen1/battleGearReferenceCards.fields.left_english_text'))
                                ->placeholder(__l('gen1/battleGearReferenceCards.placeholders.left_english_text')),
                            Forms\Components\Textarea::make('left_french_text')
                                ->label(__l('gen1/battleGearReferenceCards.fields.left_french_text'))
                                ->placeholder(__l('gen1/battleGearReferenceCards.placeholders.left_french_text')),
                        ]),
                ])->columns(2)
                    ->columnSpan(1),
                Forms\Components\Group::make([
                    Forms\Components\Select::make('right_attribute')
                        ->label(__l('gen1/battleGearReferenceCards.fields.right_attribute'))
                        ->placeholder(__l('gen1/battleGearReferenceCards.placeholders.right_attribute'))
                        ->required()
                        ->options(SupportAttribute::class)
                        ->different('left_attribute')
                        ->columnSpanFull(),
                    Forms\Components\Section::make(__l('gen1/battleGearReferenceCards.sections.right_original_effects'))
                        ->columnSpan(1)
                        ->schema([
                            Forms\Components\Textarea::make('right_original_text')
                                ->label(__l('gen1/battleGearReferenceCards.fields.right_original_text'))
                                ->placeholder(__l('gen1/battleGearReferenceCards.placeholders.right_original_text'))
                                ->required()
                                ->default(''),
                            Forms\Components\Textarea::make('right_original_french_text')
                                ->label(__l('gen1/battleGearReferenceCards.fields.right_original_french_text'))
                                ->placeholder(__l('gen1/battleGearReferenceCards.placeholders.right_original_french_text')),
                        ]),
                    Forms\Components\Section::make(__l('gen1/battleGearReferenceCards.sections.right_effects'))
                        ->columnSpan(1)
                        ->schema([
                            Forms\Components\Textarea::make('right_english_text')
                                ->label(__l('gen1/battleGearReferenceCards.fields.right_english_text'))
                                ->placeholder(__l('gen1/battleGearReferenceCards.placeholders.right_english_text')),
                            Forms\Components\Textarea::make('right_french_text')
                                ->label(__l('gen1/battleGearReferenceCards.fields.right_french_text'))
                                ->placeholder(__l('gen1/battleGearReferenceCards.placeholders.right_french_text')),
                        ]),
                ])->columns(2)
                    ->columnSpan(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->actionsPosition(Tables\Enums\ActionsPosition::BeforeColumns)
            ->defaultSort('english_name')
            ->columns([

                CuratorColumn::make('front_media_id')
                    ->label(__l('gen1/battleGearReferenceCards.fields.front_media_id'))
                    ->toggleable()
                    ->width('142px'),
                Tables\Columns\TextColumn::make('condition')
                    ->label(__l('gen1/battleGearReferenceCards.fields.condition'))
                    ->badge(),
                Tables\Columns\IconColumn::make('left_attribute')
                    ->searchable(),
                Tables\Columns\IconColumn::make('right_attribute')
                    ->searchable(),
                Tables\Columns\TextColumn::make('power_level')
                    ->label(__l('gen1/battleGearReferenceCards.fields.power_level'))
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('language_type')
                    ->label(__l('gen1/battleGearReferenceCards.fields.language_type'))
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('english_name')
                    ->label(__l('gen1/battleGearReferenceCards.fields.english_name'))
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('french_name')
                    ->label(__l('gen1/battleGearReferenceCards.fields.french_name'))
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('left_english_text')
                    ->label(__l('gen1/battleGearReferenceCards.fields.left_english_text'))
                    ->sortable()
                    ->searchable()
                    ->tooltip(fn (Gen1BattleGearReferenceCard $card) => $card->left_english_text)
                    ->wrap()
                    ->words(8, ' [...]'),
                Tables\Columns\TextColumn::make('left_french_text')
                    ->label(__l('gen1/battleGearReferenceCards.fields.left_french_text'))
                    ->sortable()
                    ->searchable()
                    ->tooltip(fn (Gen1BattleGearReferenceCard $card) => $card->left_french_text)
                    ->wrap()
                    ->words(8, ' [...]'),
                Tables\Columns\TextColumn::make('right_english_text')
                    ->label(__l('gen1/battleGearReferenceCards.fields.right_english_text'))
                    ->sortable()
                    ->searchable()
                    ->tooltip(fn (Gen1BattleGearReferenceCard $card) => $card->right_english_text)
                    ->wrap()
                    ->words(8, ' [...]'),
                Tables\Columns\TextColumn::make('right_french_text')
                    ->label(__l('gen1/battleGearReferenceCards.fields.right_french_text'))
                    ->sortable()
                    ->searchable()
                    ->tooltip(fn (Gen1BattleGearReferenceCard $card) => $card->right_french_text)
                    ->wrap()
                    ->words(8, ' [...]'),
                Tables\Columns\TextColumn::make('reference')
                    ->label(__l('gen1/battleGearReferenceCards.fields.reference'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('series_reference')
                    ->label(__l('gen1/battleGearReferenceCards.fields.series_reference'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label(__l('gen1/battleGearReferenceCards.fields.created_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label(__l('gen1/battleGearReferenceCards.fields.updated_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListGen1BattleGearReferenceCards::route('/'),
            'create' => Pages\CreateGen1BattleGearReferenceCard::route('/create'),
            'edit' => Pages\EditGen1BattleGearReferenceCard::route('/{record}/edit'),
        ];
    }
}
