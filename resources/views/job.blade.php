<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h1>{{$job['Title']}}</h1>
    <p>This job pays {{$job['salary']}}</p>
</x-layout>