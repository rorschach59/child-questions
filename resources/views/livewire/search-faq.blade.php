<div class="">
    <div class="relative mb-24">

        <input type="text" id="search" name="search" wire:model="search"
               class="input"
               placeholder="Comment on fait les bébés ?"
               required>
        <img src="{{ Vite::asset('resources/images/icon-search.svg') }}"
             alt="Search"
             class="absolute right-2.5 bottom-2.5">
    </div>

    <div class="md:grid md:grid-cols-3 md:gap-24 md:px-24">
        @foreach($faqs as $faq)

            <div class="faqs">
                <p class="mb-2 text-xs font-bold">
                    {{ $faq->question }}
                </p>
                <p class="">
                    {{ $faq->answer }}
                </p>
            </div>

        @endforeach
    </div>

    <div>
        {{ $faqs->links('livewire.pagination') }}
    </div>

</div>
