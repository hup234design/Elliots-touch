<x-app-layout>

    @section('title', $settings->posts_page_title)
    {{--    @section('subtitle', $settings->posts_page_introduction)--}}

    <div class="container">
        <div class="space-y-4 sm:space-y-10">
            @foreach($posts as $post)
                <div class="group">

                    <div
                        class="flex flex-col overflow-hidden rounded-lg bg-gray-50 shadow-sm md:flex-row"
                    >
                        <div
                            class="block w-full aspect-video overflow-hidden lg:w-2/5 xl:w-1/3 bg-red-100 md:min-h-64 md:aspect-none"
                        >
                            <a href="{{ route('posts.post', $post->slug) }}" class="not-prose relative block h-full w-full">
                                <div class="absolute inset-0">
                                <x-media-renderer
                                    :data="$post->featured_image"
                                    class="h-full w-full object-cover object-center group-hover:scale-105 transition duration-300 ease-in-out"
                                    alt="Featured Image of event"
                                />
                                </div>
                            </a>
                        </div>
                        <div
                            class="w-full p-6 lg:w-3/5 lg:self-center lg:px-10 xl:w-2/3"
                        >
                            <div class="prose">
                                <h3 class="mt-0">
                                    <a href="{{ route('posts.post', $post->slug) }}" class="not-prose">
                                    {{ $post->title }}
                                    </a>
                                </h3>
                                <p class="mb-3 text-sm text-gray-600">
                                    <span class="font-medium">
                                        {{ format_carbon_date($post->published_at) }}
                                    </span>
                                </p>
                                <p>{{ nl2br($post->summary) }}</p>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
                </a>
        </div>

        <div class="mt-12">
            {{ $posts->links() }}
        </div>

</x-app-layout>
