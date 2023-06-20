<?php

namespace App\Http\Livewire;

use App\Models\Faq;
use App\Models\User;
use App\Structures\FaqStatus;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;

class SearchFaq extends Component
{
    use WithPagination;

    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $faqs = Faq::where('question', 'like', '%'.$this->search.'%')
            ->where('status', '=', FaqStatus::APPROVED)
            ->paginate(6);

        return view('livewire.search-faq', [
            'faqs' => $faqs,
        ]);
    }
}
