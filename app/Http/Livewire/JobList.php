<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\JobPost; // ✅ Add this
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class JobList extends Component
{
    public function render()
    {
        $jobs = JobPost::latest()->paginate(10);
        //dd($jobs);
        return view('livewire.job-list', [
            'jobs' => $jobs
        ]);
    }
}
