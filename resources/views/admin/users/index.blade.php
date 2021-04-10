<div>
  <div class="row">
    <div class="col-sm-4">
      <div class="card">
        <h4 class="card-header font-italic">Nuevo Usuario</h4>

        <div class="card-body">
          @include('admin.users._form')

          <button wire:click="store" class="btn btn-primary">
            Guardar
          </button>
        </div>
      </div>
    </div>
    
    <div class="col-sm-8">
      <div class="card">
        <div class="table-responsive-sm">
          @include('admin.users._table')
        </div>
      </div>
    </div>
  </div>

  @push('styles')
    @livewireStyles
  @endpush

  @push('js')
    @livewireScripts
  @endpush
</div>