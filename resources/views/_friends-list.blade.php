<div class="bg-gray-200 border border-gray-300 rounded-2xl py-4 px-6">
    <h3 class="font-bold text-xl mb-4">Following</h3>

    <ul>
        @forelse (auth()->user()->follows as $user)
            <li class="{{ $loop->last ? '' : 'mb-4' }}">
                <div>
                    <a href="{{ route('profile', $user) }}" class="flex items-center text-sm">
                        <img 
                            class="w-10 h-10 rounded-full mr-2" 
                            src="{{ $user->avatar }}" 
                            alt="avatar"
                            width="40" 
                            height="40"
                            >

                        {{ $user->name }}
                </div>
            </li>
            @empty
                <li>No friends yet!</li>
        @endforelse
    </ul>
</div>