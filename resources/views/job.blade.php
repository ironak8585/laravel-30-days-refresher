<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h1 class="text-2xl">Job Title is : {{ $job['title'] }}</h1>
    <p class="text-green-500">Salary {{ $job['salary'] }} per anum.</p>
</x-layout>