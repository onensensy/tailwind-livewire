<div>
    <div class="flex justify-center">
        <input type="text" class="bg-white rounded-full p-4" wire:model.lazy='newComment'><button
            class="m-4 bg-red-300 px-4 rounded-full" wire:click="addComment">Send</button>
    </div>
{{{$newComment}}}

    <div class="pt-6 ">
        @foreach ($comments as $comment)
            <hr class="border border-red-500 ">

            <div class="bg-white-200 py-6">
                <span class="text-black-200 text-4xl">{{ $comment['creator'] }}</span>
                <span class="pl-4 text-gray-400">{{ $comment['created_at'] }}</span>
            </div>
            <div class="pb-4">
                <span>{{ $comment['body'] }}</span>
            </div>
        @endforeach
    </div>

</div>
