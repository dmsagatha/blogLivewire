<div class="form-outline mb-4">
  <input type="text" class="form-control" wire:model="name">
  <label class="form-label" for="">Nombre:</label>
  @error('name') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="form-outline mb-4">
  <input type="email" class="form-control" wire:model="email">
  <label class="form-label" for="">Correo Electrónico:</label>
  @error('email') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="form-outline mb-4">
  <input type="password" class="form-control" wire:model="password">
  <label class="form-label" for="">Contraseña:</label>
  @error('password') <span class="text-danger">{{ $message }}</span> @enderror
</div>