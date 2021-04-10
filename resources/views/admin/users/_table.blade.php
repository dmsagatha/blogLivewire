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
                Acciones
            </td>
        </tr>
    @endforeach
  </tbody>
</table>