<div class="flex">
    <form method="POST" action="/tweets/{{ $tweet->id }}/like">
        @csrf
        
        <div class="flex items-center mr-2 {{ $tweet->isLikedBy(current_user()) ? 'text-blue-500' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-thumb-up mr-1" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M7 11v8a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-7a1 1 0 0 1 1 -1h3a4 4 0 0 0 4 -4v-1a2 2 0 0 1 4 0v5h3a2 2 0 0 1 2 2l-1 5a2 3 0 0 1 -2 2h-7a3 3 0 0 1 -3 -3" />
              </svg>

                <button 
                    type="submit" 
                    class="text-xs text-gray-500">{{ $tweet->likes ?: 0 }}
                </button>
        </div>
    </form>

    <form method="POST" action="/tweets/{{ $tweet->id }}/like">
        @csrf
        @method('DELETE')

        <div class="flex items-center {{ $tweet->isDislikedBy(current_user()) ? 'text-blue-500' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-thumb-down mr-1" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M7 13v-8a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v7a1 1 0 0 0 1 1h3a4 4 0 0 1 4 4v1a2 2 0 0 0 4 0v-5h3a2 2 0 0 0 2 -2l-1 -5a2 3 0 0 0 -2 -2h-7a3 3 0 0 0 -3 3" />
              </svg>

              <button 
                type="submit" 
                class="text-xs text-gray-500">{{ $tweet->dislikes ?: 0 }}
            </button>
        </div>
    </form>
</div>