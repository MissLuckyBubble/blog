<x-layout>
    <x-slot name="content">
    <article>
        <h1>
            {{$post->title}}
        </h1>
        <div>
            {!! $post->body !!} // use !! only if you are in control of the date incoming
                                // couse this mean it could be used scripts and html from other ppls
        </div>
    </article>
    <a href="/">Go back</a>
    </x-slot>
</x-layout>

