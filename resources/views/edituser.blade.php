<form action="/{{ $users->id }}/update" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $users->name }}">
    <input type="text" name="first_name"value="{{ $users->first_name }}">
    <input type="text" name="age" value="{{ $users->age }}">
    <input type="text" name="adresse" value="{{ $users->adresse }}">
    <select name="role_id" id="">
        <option value="{{ $users->role->id }}">{{ $users->role->role }}</option>
        @foreach ($roles as $item)
            @if ($users->role->role != $item->role)
                <option value="{{ $item->id }}">{{ $item->role }}</option>
            @endif
        @endforeach
    </select>
    <input type="text" name="email" value="{{ $users->email }}">
    <input type="text" name="password" value="{{ $users->password }}">
    <button type="submit">Update</button>
</form>
