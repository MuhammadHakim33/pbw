<x-app-layout title="Login">
    <x-slot name="heading">Login</x-slot>
    <form action="{{ route('login') }}" class="space-y-6" method="post">
        @csrf
        <div>
            <label for="email">Email</label>
            <input class="block border px-4 py-2 rounded" type="email" name="email" id="email" value="{{old('email')}}">
            @error('email')
            <p class="text-red-500 text-sm mt-1">{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="password">password</label>
            <input class="block border px-4 py-2 rounded" type="password" name="password" id="password">
            @error('password')
            <p class="text-red-500 text-sm mt-1">{{$message}}</p>
            @enderror
        </div>

        <x-button type='submit'>Login</x-button>
    </form>
</x-app-layout>