<div>
    <h1>Job Listings</h1>

    @if($jobs->count())
        <ul>
            @foreach ($jobs as $job)
                <li>{{ $job->title }} - {{ $job->company }}</li>
            @endforeach
        </ul>

        {{ $jobs->links() }} <!-- Pagination links -->
    @else
        <p>No jobs found.</p>
    @endif
</div>

