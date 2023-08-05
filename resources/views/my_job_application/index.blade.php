<x-layout>
    <x-breadcrumbs class="mb-4" :links="['My Job Applications' => '#']" />
    @forelse ($applications as $application)
        <x-job-card :job="$application->job">
            <div class="flex items-center justify-between tetx-xs text-slate-500">
                <div class="">
                    <div class="">Applied {{ $application->created_at->diffForHumans() }}</div>
                    <div class="">Other
                        {{ Str::plural('applicant', $application->job->job_application_count - 1) }}
                        {{ $application->job->job_application_count - 1 }}
                    </div>
                    <div class="">Your asking salary ${{ number_format($application->expacted_salary) }}</div>
                    <div class="">Average asking salary
                        ${{ $application->job->job_application_avg_expacted_salary }}</div>
                </div>
                <div class="">
                    <form action="{{ route('my-job-applications.destroy', $application) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <x-big-button type="submit">Cancel</x-big-button>
                    </form>

                </div>
            </div>
        </x-job-card>
    @empty
        <div class="rounded-md border border-dashed border-slate-300 p-8">
            <div class="text-center font-medium">
                No job application yet
            </div>
            <div class="text-center">
                Go find some jobs <a class="text-indigo-500 hover:underline" href="{{ route('jobs.index') }}">here!</a>
            </div>
        </div>
    @endforelse
</x-layout>
