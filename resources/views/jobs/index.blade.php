<x-layout>
    <x-slot:heading>
         Jobs list
    </x-slot:heading>
<div class="space-y-4">
    @foreach($jobs as $job)
            <a href="jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="text-sm font-bold text-blue-300">
                    {{ $job->employer->name }}
                </div>
                <div>
                    <strong class="capitalize">{{ $job['title'] }}:</strong>
                    Pays ${{ $job['salary'] }} per year.
                </div>
            </a>
    @endforeach

        <div>
            {{ $jobs->links() }}
        </div>
</div>

</x-layout>
