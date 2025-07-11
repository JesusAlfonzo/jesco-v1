<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="solicitud_compra_id" class="form-label">{{ __('Solicitud Compra Id') }}</label>
            <input type="text" name="solicitud_compra_id" class="form-control @error('solicitud_compra_id') is-invalid @enderror" value="{{ old('solicitud_compra_id', $cotizacione?->solicitud_compra_id) }}" id="solicitud_compra_id" placeholder="Solicitud Compra Id">
            {!! $errors->first('solicitud_compra_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="proveedor_id" class="form-label">{{ __('Proveedor Id') }}</label>
            <input type="text" name="proveedor_id" class="form-control @error('proveedor_id') is-invalid @enderror" value="{{ old('proveedor_id', $cotizacione?->proveedor_id) }}" id="proveedor_id" placeholder="Proveedor Id">
            {!! $errors->first('proveedor_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="text" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha', $cotizacione?->fecha) }}" id="fecha" placeholder="Fecha">
            {!! $errors->first('fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="total" class="form-label">{{ __('Total') }}</label>
            <input type="text" name="total" class="form-control @error('total') is-invalid @enderror" value="{{ old('total', $cotizacione?->total) }}" id="total" placeholder="Total">
            {!! $errors->first('total', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="observaciones" class="form-label">{{ __('Observaciones') }}</label>
            <input type="text" name="observaciones" class="form-control @error('observaciones') is-invalid @enderror" value="{{ old('observaciones', $cotizacione?->observaciones) }}" id="observaciones" placeholder="Observaciones">
            {!! $errors->first('observaciones', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>