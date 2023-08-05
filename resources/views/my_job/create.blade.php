<x-layout>
    <x-breadcrumbs :links="['My Jobs' => route('my-jobs.index'), 'Create' => '#']" />
    <x-card class="mb-8">
        <form action="{{ route('my-jobs.store') }}" method="post">
            @csrf
            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <x-label for="title" :required="true">Job Title</x-label>
                    <x-text-input name="title" />
                </div>
                <div>
                    <x-label for="location" :required="true">Job Location</x-label>
                    <x-text-input name="location" />
                </div>
                <div class="col-span-2">
                    <x-label for="salary" :required="true">Salary</x-label>
                    <x-text-input name="salary" type="number" />
                </div>
                <div class="col-span-2">
                    <x-label for="description" :required="true">Description</x-label>
                    <x-text-input name="description" type="textarea" />
                </div>
                <div>
                    <x-label for="experience" :required="true">Experience</x-label>
                    <x-radio-button name="experience" :value="old('experience')" :all-option="false" :options="array_combine(
                        array_map('ucfirst', \App\Models\Job::$experience),
                        \App\Models\Job::$experience,
                    )" />

                    <x-label for="catagory" :required="true">Category</x-label>
                    <x-radio-button name="catagory" :all-option="false" :value="old('catagory')" :options="\App\Models\Job::$catagory" />
                </div>
            </div>

            </div>
            <div>
                <x-big-button class="w-full">Create Job</x-big-button>
            </div>
        </form>
    </x-card>
</x-layout>
