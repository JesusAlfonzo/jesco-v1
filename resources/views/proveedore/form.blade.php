<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre_empresa" class="form-label">{{ __('Nombre Empresa') }}</label>
            <input type="text" name="nombre_empresa" class="form-control @error('nombre_empresa') is-invalid @enderror" value="{{ old('nombre_empresa', $proveedore?->nombre_empresa) }}" id="nombre_empresa" placeholder="Nombre Empresa">
            {!! $errors->first('nombre_empresa', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="rif" class="form-label">{{ __('Rif') }}</label>
            <input type="text" name="rif" class="form-control @error('rif') is-invalid @enderror" value="{{ old('rif', $proveedore?->rif) }}" id="rif" placeholder="Rif">
            {!! $errors->first('rif', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="direccion" class="form-label">{{ __('Direccion') }}</label>
            <input type="text" name="direccion" class="form-control @error('direccion') is-invalid @enderror" value="{{ old('direccion', $proveedore?->direccion) }}" id="direccion" placeholder="Direccion">
            {!! $errors->first('direccion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="pais" class="form-label">{{ __('Pais') }}</label>
            <input type="text" name="pais" class="form-control @error('pais') is-invalid @enderror" value="{{ old('pais', $proveedore?->pais) }}" id="pais" placeholder="Pais">
            {!! $errors->first('pais', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>