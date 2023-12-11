<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KategoriProgamUnggulanResource\Pages;
use App\Filament\Resources\KategoriProgamUnggulanResource\RelationManagers;
use App\Models\KategoriProgamUnggulan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KategoriProgamUnggulanResource extends Resource
{
    protected static ?string $model = KategoriProgamUnggulan::class;

    protected static ?string $navigationParentItem = 'Kategori Program Unggulan';

    protected static ?string $navigationGroup = 'Program Unggulan';

    protected static ?string $pluralModelLabel = 'Kategori Program Unggulan';

    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255),
                // Forms\Components\Textarea::make('deskripsi')
                //     ->required()
                //     ->maxLength(65535)
                //     ->columnSpanFull(),
                // Forms\Components\FileUpload::make('gambar')
                //     ->imagePreviewHeight('150')
                //     ->loadingIndicatorPosition('left')
                //     ->panelAspectRatio('2:1')
                //     ->panelLayout('integrated')
                //     ->removeUploadedFileButtonPosition('right')
                //     ->uploadButtonPosition('left')
                //     ->uploadProgressIndicatorPosition('left')
                //     ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                // Tables\Columns\ImageColumn::make('gambar'),
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
            'index' => Pages\ListKategoriProgamUnggulans::route('/'),
            'create' => Pages\CreateKategoriProgamUnggulan::route('/create'),
            'edit' => Pages\EditKategoriProgamUnggulan::route('/{record}/edit'),
        ];
    }
}
