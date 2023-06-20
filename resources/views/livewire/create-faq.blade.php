<div>
    <form wire:submit.prevent="store" method="post">
        @csrf
        <div class="my-6">
            <label for="question" class="input-label @error('question') input-error-label @enderror">
                Question
            </label>
            <input type="text" name="question" id="question"
                   class="input @error('question') input-error @enderror"
                   value="{{ old('question') }}"
                   placeholder="Comment on fait les bébés ?"
                   required
                   wire:model="faq.question"
            />

            @error('question')
            <div class="input-error-message">{{ $message }}</div>
            @enderror
        </div>
        <div class="my-6">
            <label for="answer" class="input-label @error('answer') input-error-label @enderror">
                Réponse
            </label>
            <textarea name="answer" id="answer" cols="10" rows="10"
                class="input @error('answer') input-error @enderror"
                required
                wire:model="faq.answer"
            >{{ old('answer') }}</textarea>

            @error('answer')
            <div class="input-error-message">{{ $message }}</div>
            @enderror
        </div>
        <button class="button" type="submit" wire:prevent>Ajouter</button>
    </form>
</div>
