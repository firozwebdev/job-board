<?php
namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\JobPost;
use Illuminate\Validation\Rule;

class JobPostForm extends Component
{
    public $jobId;
    public $title;
    public $description;
    public $location;
    public $category;
    public $company_logo;
    public $deadline;
    public $is_active = true;

    public function mount($job = null)
    {
        if ($job) {
            $this->jobId = $job->id;
            $this->title = $job->title;
            $this->description = $job->description;
            $this->location = $job->location;
            $this->category = $job->category;
            $this->company_logo = $job->company_logo;
            $this->deadline = $job->deadline?->format('Y-m-d');
            $this->is_active = $job->is_active;
        }
    }

    protected function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'company_logo' => 'nullable|string|max:255',
            'deadline' => 'nullable|date',
            'is_active' => 'boolean',
        ];
    }

    public function save()
    {
        $this->validate();

        $data = [
            'title' => $this->title,
            'description' => $this->description,
            'location' => $this->location,
            'category' => $this->category,
            'company_logo' => $this->company_logo,
            'deadline' => $this->deadline,
            'is_active' => $this->is_active,
        ];

        if ($this->jobId) {
            JobPost::find($this->jobId)->update($data);
            session()->flash('message', 'Job updated successfully.');
        } else {
            JobPost::create($data);
            session()->flash('message', 'Job created successfully.');
        }

        return redirect()->route('admin.jobs.index');
    }

    public function render()
    {
        return view('livewire.admin.job-post-form');
    }
}
