<x-events-layout>
    @section('title', $settings->events_page_title)
        <div class="prose max-w-none">
            <h1>{{ $event->title }}</h1>
            <p>{{ $event->date }}</p>
            @if( $event->featured_image)
                <x-media-renderer :data="$event->featured_image" class="w-full"/>
            @endif
            {!! $event->content !!}
        </div>
</x-events-layout>
