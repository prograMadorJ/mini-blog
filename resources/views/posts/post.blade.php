@foreach($posts as $post)
    <article class="post">
        <h1>{{$post->title}}</h1>
        {{$post->body}}
    </article>
@endforeach
