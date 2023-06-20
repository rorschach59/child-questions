<div class="my-6">
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-center gap-8">
            <span>
                @if ($paginator->onFirstPage())
                    <span class="pagination-button-disabled">
                        Précédent
                    </span>
                @else
                    <button wire:click="previousPage" wire:loading.attr="disabled" rel="prev" class="pagination-button">
                        Précédent
                    </button>
                @endif
            </span>

            <span>
                @if ($paginator->hasMorePages())
                    <button wire:click="nextPage" wire:loading.attr="disabled" rel="next" class="pagination-button">
                        Suivant
                    </button>
                @else
                    <span class="pagination-button-disabled">
                        Suivant
                    </span>
                @endif
            </span>
        </nav>
    @endif
</div>
