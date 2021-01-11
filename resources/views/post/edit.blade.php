<form action="/posts/{{$post->id}}" method = "post">
    @csrf
    @method('PUT')
    <input type="text" name = "title" placeholder = "Title" value="{{$post->title}}">
    <input type="text" name = "body" placeholder = "Body" value="{{$post->body}}">
    <button name = "update">Update</button>
</form>