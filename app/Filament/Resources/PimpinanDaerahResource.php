<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PimpinanDaerahResource\Pages;
use App\Filament\Resources\PimpinanDaerahResource\RelationManagers;
use App\Models\PimpinanDaerah;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PimpinanDaerahResource extends Resource
{
    protected static ?string $model = PimpinanDaerah::class;

    protected static ?string $navigationParentItem = 'Pimpinan Daerah';

    protected static ?string $navigationGroup = 'Tentang';

    protected static ?string $pluralModelLabel = 'Pimpinan Daerah';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255),
                Forms\Components\TextInput::make('jabatan')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('awal_jabatan')
                    ->required()
                    ->label('Awal Jabatan'),
                Forms\Components\DatePicker::make('akhir_jabatan')
                    ->required()
                    ->label('Akhir Jabatan'),
                Forms\Components\TextInput::make('tempat_lahir')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tanggal_lahir')
                    ->required(),
                Forms\Components\Textarea::make('biodata')
                    ->required()
                    ->maxLength(65535)
                    ->rows(5)
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('riwayat_pendidikan')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('karir')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('gambar')
                    ->imagePreviewHeight('150')
                    ->loadingIndicatorPosition('left')
                    ->panelAspectRatio('2:1')
                    ->panelLayout('integrated')
                    ->removeUploadedFileButtonPosition('right')
                    ->uploadButtonPosition('left')
                    ->uploadProgressIndicatorPosition('left')
                    ->required()
                    ->label('Foto'),
                Forms\Components\FileUpload::make('dokumen')
                    ->label('Dokumen LHKPN (Laporan Harta Kekayaan Penyelenggara Negara)'),
                // Forms\Components\Textarea::make('sosmed')
                //     ->maxLength(65535)
                //     ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jabatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('awal_jabatan')
                    ->date('Y')
                    ->searchable(),
                Tables\Columns\TextColumn::make('akhir_jabatan')
                    ->date('Y')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('gambar')
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
            'index' => Pages\ListPimpinanDaerahs::route('/'),
            'create' => Pages\CreatePimpinanDaerah::route('/create'),
            'edit' => Pages\EditPimpinanDaerah::route('/{record}/edit'),
        ];
    }
}
