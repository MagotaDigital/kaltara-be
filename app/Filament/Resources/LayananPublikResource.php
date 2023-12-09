<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LayananPublikResource\Pages;
use App\Filament\Resources\LayananPublikResource\RelationManagers;
use App\Models\LayananPublik;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Set;
use Illuminate\Support\Str;

class LayananPublikResource extends Resource
{
    protected static ?string $model = LayananPublik::class;

    protected static ?string $navigationParentItem = 'Layanan Publik';

    protected static ?string $navigationGroup = 'Layanan Publik';

    protected static ?string $pluralModelLabel = 'Layanan Publik';

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
                Forms\Components\Select::make('kategori_layanan_publik_id')
                    ->required()
                    ->relationship(name: 'kategori_layanan_publik', titleAttribute: 'nama')
                    ->searchable()
                    ->preload(),
                Forms\Components\Textarea::make('deskripsi_singkat')
                    ->required()
                    ->label('Deskripsi Singkat')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('deskripsi')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('logo')
                    ->imagePreviewHeight('150')
                    ->loadingIndicatorPosition('left')
                    ->panelAspectRatio('2:1')
                    ->panelLayout('integrated')
                    ->removeUploadedFileButtonPosition('right')
                    ->uploadButtonPosition('left')
                    ->uploadProgressIndicatorPosition('left')
                    ->required()
                    ->label('Logo'),
                Forms\Components\FileUpload::make('gambar')
                    ->required()
                    ->reorderable()
                    ->appendFiles()
                    ->multiple()
                    ->columnStart(1)
                    ->label('Gambar Infografis'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kategori_layanan_publik.nama')
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('logo'),
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
            'index' => Pages\ListLayananPubliks::route('/'),
            'create' => Pages\CreateLayananPublik::route('/create'),
            'edit' => Pages\EditLayananPublik::route('/{record}/edit'),
        ];
    }
}
