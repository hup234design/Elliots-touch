<x-blocks.wrapper>
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-12">
        @foreach($this->posts as $post)
            <div
                class="group clickable flex flex-col overflow-hidden rounded-lg bg-white"
            >
                <div class="h-48">
                    <x-media-renderer
                        :data="$post->featured_image"
                        class="object-cover object-center w-full h-full transition duration-300 ease-in-out group-hover:scale-105"
                        :alt="$post->title . ' Featured Image'"
                    />
                </div>
                <div class="py-6 prose">
                    <h2 class="mb-2 text-lg sm:text-xl">
                        <a
                            href="{{ route('posts.post', $post->slug) }}"
                            class="not-prose text-gray-800 hover:text-gray-600"
                        >
                            {{ $post->title }}
                        </a>
                    </h2>
                    <p class="mb-3 text-sm font-medium text-gray-600">
                        {{ format_carbon_date($post->published_at) }}
                    </p>
                    <p class="">
                        {{ nl2br($post->summary) }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</x-blocks.wrapper>
