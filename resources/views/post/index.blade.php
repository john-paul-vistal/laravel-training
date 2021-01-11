<h1>All Post</h1>
<a href="/posts/create"><button>Create</button></a>
@foreach($posts as $post)
    <h2>{{$post -> title}}</h2>
    <p>{{$post-> body}}</p>
    <a href="/posts/{{$post->id}}/edit"><button>Edit</button></a>
    <form action="/posts/{{$post->id}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete">
    </form>
@endforeach