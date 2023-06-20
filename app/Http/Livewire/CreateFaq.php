<?php

namespace App\Http\Livewire;

use App\Models\Faq;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class CreateFaq extends Component
{

    public Faq $faq;

    protected $rules = [
        'faq.question' => 'required',
        'faq.answer' => 'required',
    ];

    public function mount()
    {
        $this->faq = new Faq();
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.create-faq');
    }

    public function store()
    {

        try {
            $this->validate();
            $this->faq->save();
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }

        return redirect()->route('home')->with('success', 'Question ajoutée');
    }
}
