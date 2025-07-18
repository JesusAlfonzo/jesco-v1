<div class="row padding-1 p-1">
    <div class="col-md-12">
        <div class="form-group mb-3">
            <label for="nombre_empresa" class="form-label">
                <i class="bi bi-building me-1"></i> {{ __('Nombre Empresa') }}
            </label>
            <div class="input-group">
                <span class="input-group-text bg-light"><i class="bi bi-building"></i></span>
                <input type="text" name="nombre_empresa" class="form-control @error('nombre_empresa') is-invalid @enderror" value="{{ old('nombre_empresa', $proveedore?->nombre_empresa) }}" id="nombre_empresa" placeholder="Nombre Empresa">
                {!! $errors->first('nombre_empresa', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
        </div>
        <div class="form-group mb-3">
            <label for="rif" class="form-label">
                <i class="bi bi-file-earmark-text me-1"></i> {{ __('Rif') }}
            </label>
            <div class="input-group">
                <span class="input-group-text bg-light"><i class="bi bi-file-earmark-text"></i></span>
                <input type="text" name="rif" class="form-control @error('rif') is-invalid @enderror" value="{{ old('rif', $proveedore?->rif) }}" id="rif" placeholder="Rif">
                {!! $errors->first('rif', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
        </div>
        <div class="form-group mb-3">
            <label for="direccion" class="form-label">
                <i class="bi bi-geo-alt me-1"></i> {{ __('Direccion') }}
            </label>
            <div class="input-group">
                <span class="input-group-text bg-light"><i class="bi bi-geo-alt"></i></span>
                <input type="text" name="direccion" class="form-control @error('direccion') is-invalid @enderror" value="{{ old('direccion', $proveedore?->direccion) }}" id="direccion" placeholder="Direccion">
                {!! $errors->first('direccion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
        </div>
        <div class="form-group mb-3">
            <label for="pais" class="form-label">
                <i class="bi bi-globe me-1"></i> {{ __('Pais') }}
            </label>
            <div class="input-group">
                <span class="input-group-text bg-light"><i class="bi bi-globe"></i></span>
                <input type="text" name="pais" class="form-control @error('pais') is-invalid @enderror" value="{{ old('pais', $proveedore?->pais) }}" id="pais" placeholder="Pais">
                {!! $errors->first('pais', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
        </div>
    </div>
    <div class="col-md-12 mt-3">
        <button type="submit" class="btn btn-primary d-flex align-items-center gap-2">
            <i class="bi bi-save"></i> {{ __('Guardar') }}
        </button>
    </div>
</div>