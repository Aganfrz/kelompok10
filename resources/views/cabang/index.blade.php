<x-app-layout>
    @hasrole('owner')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cabang Minimarket') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <x-primary-button tag="a" href="{{ route('cabang.create') }}">Tambah Cabang</x-primary-button>
                <x-table>
                        <x-slot name="header">
                            <tr class="py-10">
                                <th scope="col">ID</th>
                                <th scope="col">Nama Cabang</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </x-slot>
                        @foreach ($cabangs as $cabang)
                            <tr>
                                <td>{{ $cabang->id }}</td>
                                <td>{{ $cabang->nama }}</td>
                                <td>{{ $cabang->alamat }}</td>
                                <td>
                                        <form action="{{ route('cabang.destroy', $cabang->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <x-primary-button class="bg-red-500 text-red-600 hover:text-black hover:bg-red-400">Hapus</x-primary-button>
                                        </form>
                                </td>
                            </tr>
                        @endforeach
                    </x-table>
                </div>
            </div>
        </div>
    </div>
    @endhasrole
</x-app-layout>