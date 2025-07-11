<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="orden_compra_id" class="form-label">{{ __('Orden Compra Id') }}</label>
            <input type="text" name="orden_compra_id" class="form-control @error('orden_compra_id') is-invalid @enderror" value="{{ old('orden_compra_id', $impuestoCompra?->orden_compra_id) }}" id="orden_compra_id" placeholder="Orden Compra Id">
            {!! $errors->first('orden_compra_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo_impuesto_id" class="form-label">{{ __('Tipo Impuesto Id') }}</label>
            <input type="text" name="tipo_impuesto_id" class="form-control @error('tipo_impuesto_id') is-invalid @enderror" value="{{ old('tipo_impuesto_id', $impuestoCompra?->tipo_impuesto_id) }}" id="tipo_impuesto_id" placeholder="Tipo Impuesto Id">
            {!! $errors->first('tipo_impuesto_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="monto" class="form-label">{{ __('Monto') }}</label>
            <input type="text" name="monto" class="form-control @error('monto') is-invalid @enderror" value="{{ old('monto', $impuestoCompra?->monto) }}" id="monto" placeholder="Monto">
            {!! $errors->first('monto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>