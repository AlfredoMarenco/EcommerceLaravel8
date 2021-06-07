<div>
    <div class="d-flex flex-row justify-content-between">
        <input class="form-control col-3" wire:model="search" type="text" placeholder="Busqueda de mosaics">
        <a class="btn btn-info" href="{{ route('admin.mosaics.create') }}"><i class="fas fa-fw fa-boxes"> </i>
            Agregar mosaic</a>
    </div>
    @if ($mosaics->count())
        <div class="d-flex flex-row-reverse my-3">
            {{ $mosaics->links() }}
        </div>
        <div class="table-responsive">
            <table class="table table-sm table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Texto</th>
                        <th scope="col">Link</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mosaics as $mosaic)
                        <tr>
                            <th scope="row">{{ $mosaic->id }}</th>
                            <td>{{ $mosaic->text }}</td>
                            <td>{{ $mosaic->link }}</td>
                            <td class="d-flex justify-content-center">
                                <a href="{{ route('admin.mosaics.edit', $mosaic) }}"
                                    class="btn btn-success btn-md mx-1">Editar</a>

                                {{-- <form action="{{ route('admin.mosaics.destroy', $mosaic) }}" method="POST">
                                    @csrf
                                    @method('Delete')
                                    <button class="btn btn-danger mx-1" type="submit">Eliminar</button>
                                </form> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="text-center">
            <img src="{{ asset('images/icons/mosaico.png') }}" class="img-fluid">
        </div>
        <div class="d-flex flex-row-reverse">
            {{ $mosaics->links() }}
        </div>
    @else
        <div class="mt-5">
            <strong>No hay ningun registro con ese valor de busqueda</strong>
        </div>
    @endif
</div>
