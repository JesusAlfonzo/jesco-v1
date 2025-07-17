<div class="row g-4">
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="nombre" class="form-label"><i class="bi bi-diagram-3 me-1"></i>Nombre</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror"
                value="{{ old('nombre', $departamento?->nombre) }}" id="nombre" placeholder="Ingrese el nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="descripcion" class="form-label"><i class="bi bi-card-text me-1"></i>Descripción</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror"
                value="{{ old('descripcion', $departamento?->descripcion) }}" id="descripcion" placeholder="Ingrese la descripción">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
</div>
<div class="text-center mt-4">
    <button type="submit" class="btn btn-primary"><i class="bi bi-save me-1"></i>Guardar</button>
</div>