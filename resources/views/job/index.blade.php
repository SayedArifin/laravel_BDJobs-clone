<x-layout>
    <x-breadcrumbs class="mb-4" :links="['Jobs' => route('jobs.index')]" />
    <x-card class="mb-4 text-sm">
        <form action="{{ route('jobs.index') }}" method="get">
            <div class="mb-4 grid grid-cols-2 gap-4">
                <div class="">
                    <div class="mb-1 font-semibold">Search</div>
                    <x-text-input name='search' value="{{ request('search') }}" placeholder='Search for any text' />
                </div>
                <div class="">
                    <div class="mb-1 font-semibold">Salary</div>
                    <div class="flex space-x-2">
                        <x-text-input name='min_salary' value="{{ request('min_salary') }}" placeholder='From' />
                        <x-text-input name='max_salary' value="{{ request('max_salary') }}" placeholder='To' />
                    </div>
                </div>
                <div class="">
                    <div class="mb-1 font-semibold">Experience</div>
                    <x-radio-button name="experience" :options="\App\Models\Job::$experience" />
                </div>
                <div class="">
                    <div class="mb-1 font-semibold">Category</div>
                    <x-radio-button name="category" :options="\App\Models\Job::$catagory" />
                </div>
            </div>
            <x-big-button>Filter</x-big-button>


        </form>
    </x-card>
    @forelse ($jobs as $job)
        <x-job-card class="mb4" :$job>
            <x-link-button :href="route('jobs.show', $job)">Show</x-link-button>
        </x-job-card>
    @empty
        <x-card>NO Job Found</x-card>
    @endforelse
</x-layout>
