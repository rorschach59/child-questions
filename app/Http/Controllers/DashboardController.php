<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Structures\FaqStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function index()
    {
        try {
            $faqs = Faq::where('status', '=', FaqStatus::PENDING)->get();
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }

        return view('dashboard.index', [
            'faqs' => $faqs ?? [],
        ]);
    }

    public function accept(Faq $faq)
    {
        try {
            $faq->update(['status' => FaqStatus::APPROVED]);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }

        return redirect()->route('dashboard.index');
    }

    public function refuse(Faq $faq)
    {
        try {
            $faq->update(['status' => FaqStatus::REJECTED]);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }

        return redirect()->route('dashboard.index');
    }
}
