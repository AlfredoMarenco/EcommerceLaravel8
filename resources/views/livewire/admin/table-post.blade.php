<div>
    <div class="d-flex flex-row justify-content-between">
        <input class="form-control col-3" wire:model="search" type="text" placeholder="Busqueda de posts">
        <a class="btn btn-info" href="{{ route('admin.posts.create') }}"><i class="fas fa-fw fa-boxes"> </i>
            Agregar post</a>
    </div>
    @if ($posts->count())

        <div class="d-flex flex-row-reverse justify-content-between my-3">
            <div>
                {{ $posts->links() }}
            </div>
            <div>
                <label for="paginate">Articulos a mostrar</label>
                <select wire:model="paginate" name="paginate" class="border">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                </select>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-sm table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Etiquetas</th>
                        <th scope="col">Status</th>
                        <th scope="col">Fecha de creacion</th>
                        <th scope="col">Ultima actualizacion</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>
                                @foreach ($post->tags as $tag)
                                    <span class="badge badge-dark">{{ $tag->name }}</span>
                                @endforeach
                            </td>
                            <td>
                                @switch($post->status)
                                    @case(1)
                                        <span class="badge badge-danger">Borrador</span>
                                    @break
                                    @case(2)
                                        <span class="badge badge-warning">Revision</span>
                                    @break
                                    @case(3)
                                        <span class="badge badge-success">Publicado</span>
                                    @break

                                @endswitch
                            </td>
                            <td>{{ $post->created_at->diffForHumans(['options' => 0]) }}</td>
                            <td>{{ $post->updated_at->diffForHumans(['options' => 0]) }}</td>
                            <td class="d-flex justify-content-center">
                                <a href="{{ route('admin.posts.edit', $post) }}"
                                    class="btn btn-success btn-md mx-1">Editar
                                </a>
                                @can('admin.posts.destroy', Model::class)
                                    <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                                        @csrf
                                        @method('Delete')
                                        <button class="btn btn-danger mx-1" type="submit">Eliminar</button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex flex-row-reverse">
            {{ $posts->links() }}
        </div>
    @else
        <div class="mt-5">
            <strong>No hay ningun registro con ese valor de busqueda</strong>
        </div>
    @endif
</div>
