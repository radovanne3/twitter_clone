<h3 class="font-bold text-xl mb-4">Following</h3>
<ul>
    <li>
        @forelse(auth()->user()->follows as $user)
            <li class="mb-4">
            <div>
                <a class="flex items-center text-sm" href="{{route('profile', $user)}}"><img width="40px" height="40px" src="{{$user->avatar}}" alt="" class="rounded-full mr-2">
                    {{$user->name}} </a>
            </div>
            </li>
        @empty
            <li>No followers yet!</li>
        @endforelse
    </li>
</ul>
