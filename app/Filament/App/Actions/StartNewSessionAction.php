<?php

namespace App\Filament\App\Actions;

use Filament\Actions\Action;

class StartNewSessionAction extends Action
{
    public static function getDefaultName(): ?string
    {
        return 'start-new-session';
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->modalContent(view('filament.app.actions.start-new-session'));
        $this->modalWidth('xl');

        $this->modalActions([
            \Filament\GlobalSearch\Actions\Action::make('start')
                ->button()
                ->size('md')
                ->label('Start')
                ->emitTo('timer', 'timerStarted'),
            \Filament\GlobalSearch\Actions\Action::make('stop')
                ->button()
                ->size('md')
                ->label('Stop')
                ->color('secondary')
                ->emitTo('timer', 'timerStopped'),
            \Filament\GlobalSearch\Actions\Action::make('discard')
                ->button()
                ->size('md')
                ->label('Discard')
                ->color('danger')
                ->emitTo('timer', 'discardSession'),
        ]);
    }
}
