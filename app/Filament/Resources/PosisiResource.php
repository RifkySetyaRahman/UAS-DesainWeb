<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PosisiResource\Pages;
use App\Filament\Resources\PosisiResource\RelationManagers;
use App\Models\Posisi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PosisiResource extends Resource
{
    protected static ?string $model = Posisi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->label('Position Title'),
                Forms\Components\Textarea::make('description')
                    ->label('Description'),
                Forms\Components\TextInput::make('salary')
                    ->numeric()
                    ->label('Salary'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Position Title'),
                Tables\Columns\TextColumn::make('description')->label('Description'),
                Tables\Columns\TextColumn::make('salary')->label('Salary')->money('IDR'),
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
            'index' => Pages\ListPosisis::route('/'),
            'create' => Pages\CreatePosisi::route('/create'),
            'edit' => Pages\EditPosisi::route('/{record}/edit'),
        ];
    }
}
