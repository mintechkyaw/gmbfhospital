<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Doctor;
use App\Models\Patient;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Appointment;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\DatePicker;
use App\Filament\Resources\AppointmentResource\Pages;

class AppointmentResource extends Resource
{
    protected static ?string $model = Appointment::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('patient_id')
                    ->label('Patient')
                    ->options(Patient::all()->pluck('user.name', 'id'))
                    ->searchable()
                    ->required(),
                Forms\Components\Select::make('doctor_id')
                    ->label('Doctor')
                    ->options(Doctor::all()->pluck('user.name', 'id'))
                    ->searchable()
                    ->required(),
                Forms\Components\DatePicker::make('appointment_date')
                    ->required(),
                Forms\Components\Select::make('status')
                    ->options([
                        'pending' => 'pending',
                        'confirmed' => 'confirmed',
                        'cancelled' => 'cancelled',
                        'finished' => 'finished'
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('appointment_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('patient.patient_photo')->label('Patient_Photo'),
                Tables\Columns\TextColumn::make('patient.user.name')->label('Patient'),
                Tables\Columns\TextColumn::make('doctor.user.name')->label('Doctor'),
                Tables\Columns\TextColumn::make('status'),
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
            'index' => Pages\ListAppointments::route('/'),
            'create' => Pages\CreateAppointment::route('/create'),
            'edit' => Pages\EditAppointment::route('/{record}/edit'),
        ];
    }
}
