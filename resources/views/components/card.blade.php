<div class="card {{ $class ?? '' }} w-auto mb-3 d-inline-flex m-3">
  <div class="card-body ">
    @if(isset($title) || $slot->has('title'))
      <h5 class="card-title">
        {{ $title ?? $slot->get('title') }}
      </h5>
    @endif

    <div class="card-text">
      {{ $slot }}
    </div>

    @if(isset($button) || $slot->has('button'))
      <div class="mt-4">
        {{ $button ?? $slot->get('button') }}
      </div>
    @endif
  </div>
</div>


{{-- 
        <x-card
            title="Modulo: Marcas"
            cardClass="border-primary"
            wrapperClass="mb-4"
            >
            <p>Modulo de Marcas para Productos</p>
            
            <x-slot name="button">
                <a href="#" class="btn btn-success">Entrar</a>
            </x-slot>
        </x-card> --}}