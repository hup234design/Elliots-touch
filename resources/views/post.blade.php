<x-posts-layout>

    @section('seo')
        {!! seo()->for($post) !!}
    @endsection

    @section('title', $settings->posts_page_title)
        <div class="prose max-w-none">
            <h1>{{ $post->title }}</h1>
            <p>{{ format_carbon_date($post->published_at) }}</p>
            @if( $post->featured_image)
                <x-media-renderer :data="$post->featured_image" class="w-full"/>
            @endif
        </div>

    <div class="mt-8">
        <x-blocks :blocks="$post->content ?? []" />
    </div>
</x-posts-layout>
