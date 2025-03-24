<x-layout>
    <x-slot:heading>
        JOB LISTING
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job->id }}">
                    Job name: {{ $job->title }} - Company: {{ $job->company }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>