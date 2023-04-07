<x-layout>
    <x-slot name="content">
        <article>
            <h1>
                {{$post->title}}
            </h1>
            <div>
                <p>
                    By <a href="/authors/{{$post->author->name}}">{{$post->author->name}}</a>
                    in Caregory: <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
                <p>{{ $post->body }}</p>

            </div>
        </article>
        <a href="/">Go back</a>
    </x-slot>
</x-layout>

