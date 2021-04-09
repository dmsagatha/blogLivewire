<div>
  <h1>Usuarios</h1> 

  <div class="table-responsive-sm">
    @include('livewire.admin._table')
  </div>

  @push('styles')
    @livewireStyles
  @endpush

  @push('js')
    @livewireScripts
  @endpush
</div>