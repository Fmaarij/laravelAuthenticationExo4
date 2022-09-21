<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

    </x-slot>

    <?php
    $users = Auth::user()->all();

    ?>

    @auth
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <h1>All admins</h1>
                @foreach ($users as $user)
                    <div class="card" style="width: 18rem;">
                        @if ($user->role_id == '1')
                            @if ($user->id != Auth::user()->id)
                                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6 bg-white border-b border-gray-200">
                                        <div class="card-body">
                                            <h1> Name : {{ $user->name }}</h1>
                                            <p class="card-text">First Name : {{ $user->first_name }}</p>
                                            <p class="card-text">Age : {{ $user->age }}</p>
                                            <p class="card-text">Email : {{ $user->email }}</p>
                                            <p class="card-text">Role : {{ $user->role->role }}</p>
                                            <p class="card-text"><button>Show</button></p>
                                            <p class="card-text"><button>Delete</button></p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif
                    </div>
                @endforeach

            </div>
        </div>
    @endauth

</x-app-layout>
