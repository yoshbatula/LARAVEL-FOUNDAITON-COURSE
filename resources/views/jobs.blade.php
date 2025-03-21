<x-layout>
    <x-slot:heading>
        JOB LISTING
    </x-slot:heading>
    
    <ul>
    @foreach ($jobs as $job)
        <a href="">
            <li class="text-blue-500"><strong>{{ $job['title'] }}</strong> : Pays {{ $job['salary'] }}</li>
        </a>
    @endforeach
    </ul>
</x-layout>