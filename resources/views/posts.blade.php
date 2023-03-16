<x-layout>
    <x-slot name="content">

        @foreach ($posts as $post)
            <article class="{{$loop->even ? 'foobar' : ''}}">
                <a href="/posts/{{$post->slug}}">
                    <h1>{{$post->title}}</h1>
                </a>
                <div>
                    <p>Caregory: <a href="/categories/{{$post->category->slug}}"> {{$post->category->name}}</a></p>
                    {{$post->excerpt}}
                </div>
            </article>
        @endforeach
    </x-slot>
</x-layout>
