@extends('layouts.app')
@section('content')

 <header class="mb-6 relative">
     <img class="mb-2" src="/images/banner.jpg" alt="">
    <div class="flex justify-between items-center mb-4">
        <div>
            <h2 class="font-bold text-2xl mb-2">{{$user->name}}</h2>
            <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
        </div>
        <div class="flex">
            @if(auth()->user()->is($user))
            <a href="{{$user->path('edit')}}" class="rounded-full text-xs border border-gray-300 mr-2  py-2 px-4 text-black" type="submit">Edit Profile</a>
            @endif
            @if(auth()->user()->isNot($user))
            <form method="POST" action="/profiles/{{$user->name}}/follow">
                @csrf
                <button type="submit" class="rounded-full text-xs bg-blue-500 shadow py-2 px-4 text-white" type="submit"> {{auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me' }}</button>
            </form>
            @endif
        </div>
    </div>
     <p class="text-sm">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
     <img  src="{{$user->avatar}}" alt="" class="rounded-full mr-2 absolute " style="width: 150px; left:calc(50% - 75px); top: 138px; "></a>

 </header>

    @include('_timeline',['tweets'=> $user->tweets])


@endsection
