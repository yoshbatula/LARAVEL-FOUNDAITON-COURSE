<x-layout>
    <x-slot name="heading">
        CONTACT
    </x-slot>
    
    <ul>
        @foreach ($contacts as $contact)
            <li class="font-bold"><strong>Name: {{ $contact['name'] }}</strong> Email: {{ $contact['email'] }}</li>
        @endforeach
    </ul>
</x-layout>