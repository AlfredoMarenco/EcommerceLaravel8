<div>
    <div class="d-flex flex-row justify-content-between">
        <input class="form-control col-3" wire:model="search" type="text" placeholder="Busqueda de video">
        <a class="btn btn-info" href="{{ route('admin.videos.create') }}"><i class="fas fa-fw fa-boxes"> </i>
            Agregar video</a>
    </div>
    @if ($videos->count())
        <div class="d-flex flex-row-reverse my-3">
            {{ $videos->links() }}
        </div>
        <div class="table-responsive">
            <table class="table table-sm table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($videos as $video)
                        <tr>
                            <th scope="row">{{ $video->id }}</th>
                            <td>{{ $video->name }}</td>
                            <td class="d-flex justify-content-center">
                                <a href="{{ route('admin.videos.edit', $video) }}"
                                    class="btn btn-success btn-md mx-1">Editar</a>

                                <form action="{{ route('admin.videos.destroy', $video) }}" method="POST">
                                    @csrf
                                    @method('Delete')
                                    <button class="btn btn-danger mx-1" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex flex-row-reverse">
            {{ $videos->links() }}
        </div>
    @else
        <div class="mt-5">
            <strong>No hay ningun registro con ese valor de busqueda</strong>
        </div>
    @endif
</div>
