<div>
    <h2>Admin: Job Posts</h2>
    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <a href="{{ route('admin.jobs.create') }}" class="btn btn-primary mb-3">Create New Job</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Location</th>
                <th>Deadline</th>
                <th>Active</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($jobs as $job)
            <tr>
                <td>{{ $job->title }}</td>
                <td>{{ $job->location }}</td>
                <td>{{ $job->deadline?->format('Y-m-d') ?? 'N/A' }}</td>
                <td>{{ $job->is_active ? 'Yes' : 'No' }}</td>
                <td>
                    <a href="{{ route('admin.jobs.edit', $job->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <button wire:click="deleteJob({{ $job->id }})" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" class="btn btn-sm btn-danger">Delete</button>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5">No jobs found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    {{ $jobs->links() }}
</div>
