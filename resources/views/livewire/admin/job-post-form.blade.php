<div>
    <h2>{{ $jobId ? 'Edit Job' : 'Create Job' }}</h2>

    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form wire:submit.prevent="save">
        <div class="mb-3">
            <label for="title" class="form-label">Job Title</label>
            <input type="text" id="title" wire:model="title" class="form-control" />
            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" wire:model="description" class="form-control"></textarea>
            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" id="location" wire:model="location" class="form-control" />
            @error('location') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" id="category" wire:model="category" class="form-control" />
            @error('category') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="company_logo" class="form-label">Company Logo URL</label>
            <input type="text" id="company_logo" wire:model="company_logo" class="form-control" />
            @error('company_logo') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="deadline" class="form-label">Deadline</label>
            <input type="date" id="deadline" wire:model="deadline" class="form-control" />
            @error('deadline') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" id="is_active" wire:model="is_active" class="form-check-input" />
            <label for="is_active" class="form-check-label">Active</label
        </div>
        <button type="submit" class="btn btn-success">
        {{ $jobId ? 'Update' : 'Create' }}
        </button>
    </form>
</div>
