<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProgrammerResource\Pages;
use App\Filament\Resources\ProgrammerResource\RelationManagers;
use App\Models\Programmer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProgrammerResource extends Resource
{
    protected static ?string $model = Programmer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Programmer';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('nama')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('Tanggal_lahir')
                ->required(),
            Forms\Components\Textarea::make('deskripsi'),
            Forms\Components\FileUpload::make('item_image_path')
                    ->label('Item Image')
                    ->image(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('Tanggal_lahir')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('deskripsi')->limit(50),
                Tables\Columns\ImageColumn::make('item_image_path')->label('Item Image'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListProgrammers::route('/'),
            'create' => Pages\CreateProgrammer::route('/create'),
            'edit' => Pages\EditProgrammer::route('/{record}/edit'),
        ];
    }
}
