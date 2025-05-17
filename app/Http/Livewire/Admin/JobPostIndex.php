<?php
namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\JobPost;

class JobPostIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap'; // optional

    public function deleteJob($id)
    {
        $job = JobPost::findOrFail($id);
        $job->delete();
        session()->flash('message', 'Job deleted successfully.');
    }

    public function render()
    {
        $jobs = JobPost::latest()->paginate(10);

        return view('livewire.admin.job-post-index', compact('jobs'));
    }
}
