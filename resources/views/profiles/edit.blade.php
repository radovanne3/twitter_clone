@extends('layouts.app')
@section('content')
    <form method="POST" enctype="multipart/form-data" action="{{$user->path() }}">
        @csrf
        @method('PATCH')
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">Name</label>
            <input value="{{$user->name}}" class="border border-gray-400 p-2 w-full" name="name" id="name" required type="text">
            @error('name')
            <p class="text-red-500 text-xs mt-2" >{{$message}}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="avatar" class="block mb-2 uppercase font-bold text-gray-700">Avatar</label>
            <input type="file" name="avatar" id="avatar">
        </div>

        <div class="mb-6">
            <label value="{{$user->email}}" class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">Email</label>
            <input  class="border border-gray-400 p-2 w-full" name="email" id="email"  type="email">
            @error('email')
            <p class="text-red-500 text-xs mt-2" >{{$message}}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">Password</label>
            <input required class="border border-gray-400 p-2 w-full" name="password" id="password"  type="password">
            @error('password')
            <p class="text-red-500 text-xs mt-2" >{{$message}}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password_confirmation">Password Confirmation</label>
            <input  required class="border border-gray-400 p-2 w-full" name="password_confirmation" id="password_confirmation"  type="password">
            @error('password_confirmation')
            <p class="text-red-500 text-xs mt-2" >{{$message}}</p>
            @enderror
        </div>
        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit</button>
        </div>
    </form>
@endsection()
