<x-layout>
    <x-slot:heading>
        Edit Job : {{ $job->title }}
    </x-slot:heading>

    <form method="POST" action="/jobs/{{$job->id}}">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field >
                        <x-form-label for="title" >Title</x-form-label>
                        <div class="mt-2">
                                <x-form-input
                                    type="text"
                                    name="title"
                                    id="title"
                                    placeholder="Programmer"
                                    value="{{$job->title}}"
                                    required
                                />
                            <x-form-error name="title" />
                        </div>
                    </x-form-field>
                    <x-form-field >
                        <x-form-label for="salary" >Salary</x-form-label>
                        <div class="mt-2">
                                <x-form-input
                                    type="text"
                                    name="salary"
                                    id="salary"
                                    placeholder="$50,000 per year"
                                    value="{{$job->salary}}"
                                    required
                                />
                            <x-form-error name="salary" />
                        </div>
                        </x-form-field >
                </div>
            </div>
        </div>
        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="flex items-center">
                <button class="text-red-500 font-bold text-sx" form="delete-form">
                    Delete
                </button>
            </div>
            <div class="flex space-x-6 items-center">
            <a type="button" class="text-sm font-semibold leading-6 text-gray-900" href="/jobs/{{$job->id}}">Cancel</a>
                <x-form-button>Update</x-form-button>
            </div>

        </div>
    </form>
<form method="POST" action="/jobs/{{$job->id}}" id="delete-form" class="hidden">
    @csrf
    @method('DELETE')
</form>
</x-layout>
