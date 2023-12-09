<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProgamUnggulanResource\Pages;
use App\Filament\Resources\ProgamUnggulanResource\RelationManagers;
use App\Models\ProgamUnggulan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Navigation\NavigationGroup;
use Filament\Forms\Set;
use Illuminate\Support\Str;

class ProgamUnggulanResource extends Resource
{
    protected static ?string $model = ProgamUnggulan::class;

    protected static ?string $navigationParentItem = 'Progam Unggulan';

    protected static ?string $navigationGroup = 'Progam Unggulan';

    protected static ?int $navigationSort = 1;

    protected static ?string $pluralModelLabel = 'Progam Unggulan';

    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->live(debounce:'500')
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('kategori_progam_unggulan_id')
                    ->required()
                    ->relationship(name: 'kategori_progam_unggulan', titleAttribute: 'nama')
                    ->searchable()
                    ->preload(),
                Forms\Components\TextInput::make('organisasi')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('deskripsi')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('link')
                    ->columnSpanFull()
                    ->maxLength(255),
                // Forms\Components\TextInput::make('sosmed')
                //     ->required()
                //     ->maxLength(255),
                Forms\Components\FileUpload::make('gambar')
                    ->imagePreviewHeight('150')
                    ->loadingIndicatorPosition('left')
                    ->panelAspectRatio('2:1')
                    ->panelLayout('integrated')
                    ->removeUploadedFileButtonPosition('right')
                    ->uploadButtonPosition('left')
                    ->uploadProgressIndicatorPosition('left')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kategori_progam_unggulan.nama')
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('organisasi')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('gambar'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                // Tables\Columns\TextColumn::make('deleted_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListProgamUnggulans::route('/'),
            'create' => Pages\CreateProgamUnggulan::route('/create'),
            'edit' => Pages\EditProgamUnggulan::route('/{record}/edit'),
        ];
    }
}
