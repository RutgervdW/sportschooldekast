<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inscrijven cursus') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="/courses" method="POST">
                        @csrf
                        <select name="coursetypeid" id="">
                            @foreach ($courseTypes as $courseType)
                                <option value="{{ $courseType->id }}">{{ $courseType->name }}</option>
                            @endforeach
                        </select>
                        <label for="datetime">Datum en tijd:</label>
                        <input type="datetime-local" id="datetime" name="datetime">
                        <input type="submit" value="Plan afspraak">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
