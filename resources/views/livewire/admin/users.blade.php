<div>
    <div class="bg-gray-800 pt-3">
        <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
            <h1 class="font-bold pl-2">Users</h1>
        </div>
    </div>


    <div class="overflow-x-auto relative">
        <table class=" table w-full text-sm text-left text-gray-500 dark:text-gray-400" id="table">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Email
                </th>
                <th scope="col" class="py-3 px-6">
                    Type
                </th>
                <th scope="col" class="py-3 px-6">
                    Date Created
                </th>
                <th scope="col" class="py-3 px-6">
                    Actions
                </th>
            </tr>
            </thead>
            <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                @foreach($users as $user)
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $user->name }}
                    </th>
                    <td class="py-4 px-6">
                        {{ $user->email }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $user->type }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $user->created_at }}
                    </td>
                    <td class="flex space-x-2 py-4 px-6">
                        <a href="{{ url('editUser', [$user->id])}}">
                            <button class=""><i class="fas fa-pen text-yellow-400"></i></button>
                        </a>
                        <form method="post" action="{{ url('deleteUser', [$user->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger ml-1"
                                    onclick="return confirm('Proceed to delete account?');"><i
                                        class="fas fa-trash text-red-900"></i></button>
                        </form>
                    </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
