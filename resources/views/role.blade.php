<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Role Page') }}
        </h2>

        <table>
            <thead>
                <tr>
                    <th>Role ID</th>
                    <th>Role</th>
                    <th>Add a role</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($roles as $role)
                    <tr>
                        <td>{{ $role->id }}</td>
                        <td>{{ $role->role }}</td>
                        <td>
                            <a href="{{route('createrole')}}">
                                <button>Add</button>
                            </a>
                        </td>
                        <td>
                            <form action="/del/{{$role->id}}" method="post" enctype="">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </x-slot>
</x-app-layout>
