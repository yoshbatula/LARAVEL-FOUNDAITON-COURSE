<x-layout>
    <x-slot:heading>
        JOB LISTING
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            @if(is_array($job))
                <li><a href="/jobs/{{ $job['id'] }}">Job name: {{ $job['title'] }} Job Company is {{ $job['company'] }}</a></li>
            @else
                <li>Invalid job data</li>
            @endif
        @endforeach
    </ul>
</x-layout>