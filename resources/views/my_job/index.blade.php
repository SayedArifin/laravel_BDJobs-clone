<x-layout>
    <x-breadcrumbs :links="['My Jobs' => route('my-jobs.index')]" />

    <div class="mb-8 text-right">
        <x-link-button href="{{ route('my-jobs.create') }}">Add New</x-link-button>
    </div>
    @foreach ($jobs as $job)
        <x-job-card :$job>
            <div class="text-xs text-slate-500">
                @forelse ($jobApplications as $application)
                    <!-- Display application details here -->
                    <div class=""></div>
                @empty
                    <div>No Application Yet!</div>
                @endforeach


</x-layout>
