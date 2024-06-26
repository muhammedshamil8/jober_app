<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
   <h2 class="font-bold text-lg">
       {{$job['title']}}
   </h2>

    <p>
     This job pays  ${{$job['salary'] }} per year
    </p>
    @can('edit',$job)
    <x-button href="/jobs/{{$job->id}}/edit" class="mt-3">
        Edit Job
    </x-button>
        @endcan
</x-layout>
