<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="tipo_examen_id" class="form-label">{{ __('Tipo Examen Id') }}</label>
            <input type="text" name="tipo_examen_id" class="form-control @error('tipo_examen_id') is-invalid @enderror" value="{{ old('tipo_examen_id', $tipoExamenPrecio?->tipo_examen_id) }}" id="tipo_examen_id" placeholder="Tipo Examen Id">
            {!! $errors->first('tipo_examen_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="moneda_id" class="form-label">{{ __('Moneda Id') }}</label>
            <input type="text" name="moneda_id" class="form-control @error('moneda_id') is-invalid @enderror" value="{{ old('moneda_id', $tipoExamenPrecio?->moneda_id) }}" id="moneda_id" placeholder="Moneda Id">
            {!! $errors->first('moneda_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="precio" class="form-label">{{ __('Precio') }}</label>
            <input type="text" name="precio" class="form-control @error('precio') is-invalid @enderror" value="{{ old('precio', $tipoExamenPrecio?->precio) }}" id="precio" placeholder="Precio">
            {!! $errors->first('precio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_vigencia" class="form-label">{{ __('Fecha Vigencia') }}</label>
            <input type="text" name="fecha_vigencia" class="form-control @error('fecha_vigencia') is-invalid @enderror" value="{{ old('fecha_vigencia', $tipoExamenPrecio?->fecha_vigencia) }}" id="fecha_vigencia" placeholder="Fecha Vigencia">
            {!! $errors->first('fecha_vigencia', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>