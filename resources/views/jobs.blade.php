<x-layout>
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
        <a class="text-blue-600 underline hover:text-blue-800" href="/jobs/{{ $job['id']}}">
            <li>{{ $job['title'] }} : {{ $job['salary'] }}</li>
        </a>
        @endforeach
    </ul>

</x-layout>