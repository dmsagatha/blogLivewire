<div>
    <h1>Usuarios</h1> 

    <div class="table-responsive-sm">
        <table class="table table-sm table-bordered table-hover">
            <thead class="table-dark">
            <tr class="text-center">
                <th>ID</th>
                <th>Nombre Completo</th>
                <th>Correo Electrónico</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $value)
                <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td class="text-center" style="display-inline">
                    <a wire:click.prevent="edit({{ $value->id }})" class="teal-text" title="Actualizar" data-toggle="modal" data-target="#updateUserModal">
                    <i class="fas fa-pencil-alt"></i>
                    </a>
                    <a type="button"
                    wire:click.prevent="delete({{ $value->id }})" class="btn-sm text-danger" title="Eliminar">
                    <i class="fa fa-times"></i>
                    </a>
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>