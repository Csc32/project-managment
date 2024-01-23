<div id="alert-1"
    class="flex items-center p-4 mb-4 mr- rounded-lg top-2 left-3 w-[98%] {{ $isError ? $errorColors['alert-container'] : $successColors['alert-container'] }} {{ $show }}"
    role="alert">
    <x-fas-info-circle class="h-5" />
    <div class="ms-3 text-sm font-medium">
        {{ $message }}
    </div>
    <button type="button"
        class="ms-auto -mx-1.5 -my-1.5 rounded-lg focus:ring-2  inline-flex items-center justify-center h-8 w-8 {{ $isError ? $errorColors['btn'] : $successColors['btn'] }}"
        data-dismiss-target="#alert-1" aria-label="Close" wire:click='close'>
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
    </button>
</div>
