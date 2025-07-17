<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="moneda_id" class="form-label">{{ __('Moneda Id') }}</label>
            <input type="text" name="moneda_id" class="form-control @error('moneda_id') is-invalid @enderror" value="{{ old('moneda_id', $tasaCambio?->moneda_id) }}" id="moneda_id" placeholder="Moneda Id">
            {!! $errors->first('moneda_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tasa" class="form-label">{{ __('Tasa') }}</label>
            <input type="text" name="tasa" class="form-control @error('tasa') is-invalid @enderror" value="{{ old('tasa', $tasaCambio?->tasa) }}" id="tasa" placeholder="Tasa">
            {!! $errors->first('tasa', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="text" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha', $tasaCambio?->fecha) }}" id="fecha" placeholder="Fecha">
            {!! $errors->first('fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>