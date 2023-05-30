<x-filament::page>
    <x-tabs :tabs="$this->tabs()" active="detailsForm"></x-tabs>
    <div>
        <form x-ref="detailsForm" @active-tab.window="$event.detail === 'detailsForm' ? $refs.detailsForm.classList.remove('hidden') : $el.classList.add('hidden')" class="space-y-6" wire:submit.prevent="saveDetails" wire:ignore.self>
            {{ $this->detailsForm }}
            <x-filament::form.actions
                class="mt-6"
                :actions="$this->getSaveDetailsFormAction()"
                :full-width="$this->hasFullWidthFormActions()"
            />
        </form>

        <form x-ref="updatePasswordForm" @active-tab.window="$event.detail === 'updatePasswordForm' ? $refs.updatePasswordForm.classList.remove('hidden') : $el.classList.add('hidden')" class="space-y-6 hidden" wire:submit.prevent="savePassword" wire:ignore.self>
            {{ $this->updatePasswordForm }}
            <x-filament::form.actions
                class="mt-6"
                :actions="$this->getSavePasswordFormAction()"
                :full-width="$this->hasFullWidthFormActions()"
            />
        </form>

        <form x-ref="rateForm" @active-tab.window="$event.detail === 'rateForm' ? $refs.rateForm.classList.remove('hidden') : $el.classList.add('hidden')" class="space-y-6 hidden" wire:submit.prevent="saveRates" wire:ignore.self>
            {{ $this->rateForm }}
            <x-filament::form.actions
                class="mt-6"
                :actions="$this->getSaveRatesFormAction()"
                :full-width="$this->hasFullWidthFormActions()"
            />
        </form>
    </div>
    <x-filament-actions::modals />
</x-filament::page>
