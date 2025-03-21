<x-layout>
    <x-slot:heading>
        JOB LISTING
    </x-slot:heading>
    
    @foreach ($jobs as $job)
            <li class="text-blue-500"><strong>{{ $job['title'] }}</strong> : Pays {{ $job['salary'] }}</li>
    @endforeach
</x-layout>