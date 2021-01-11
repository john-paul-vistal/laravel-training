<form action="/posts" method = "post">
    @csrf
    <input type="text" name = "title" placeholder = "Title">
    <input type="text" name = "body" placeholder = "Body">
    <button name = "submit">Submit</button>
</form>