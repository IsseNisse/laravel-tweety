<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img class="mb-2" src="/img/default-profile-banner.jpg" alt="">

            <img 
            class="w-32 h-32 border border-2 border-gray-200 bg-white rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2" 
            src="{{ $user->avatar }}" 
            alt="avatar"
            style="left: 50%;"
            width="150">
        </div>
        

        <div class="flex justify-between items-center mb-6">
            <div style="max-width: 270px">
                <h2 class="font-bold text-2xl mb-0">
                    {{ $user->name }}
                </h2>
                <p class="text-sm">
                    Joined {{ $user->created_at->diffForHumans() }}
                </p>
            </div>

            <div class="flex">
                @can('edit', $user)
                    <a 
                        href="{{ $user->path('edit') }}" 
                        class="rounded-2xl border border-gray-300 py-2 px-4 text-black text-xs mr-2"
                        >Edit Profile
                    </a>
                @endcan

                
                <x-follow-button :user="$user"></x-follow-button>
                
            </div>
        </div>


        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore fugit dolor asperiores excepturi ex quisquam sit eos pariatur ullam!
            Explicabo quae ex aperiam adipisci numquam voluptatem expedita ipsa commodi officiis!</p>

        
    </header>

    @include('_timeline', [
        'tweets' => $tweets
    ])
</x-app>
