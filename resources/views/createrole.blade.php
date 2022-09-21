<form action="/storerole" method="post" enctype="multipart/form-data">
    @csrf
    <label for="">Role</label>
    <input type="text" name="role">
    <button type="submit">Add</button>
</form>
