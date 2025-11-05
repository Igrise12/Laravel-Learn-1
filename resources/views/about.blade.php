<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h3 class ="font-bold tracking-tight text-white">About Page</h3>
    <div class="text-white"> 
    <p>This is the about page for our website. Here you can learn more about our mission and values.</p>
    <p> Name :{{ $name }}</p>
    <p> Email :{{ $email }}</p>
    </div>
</x-layout>