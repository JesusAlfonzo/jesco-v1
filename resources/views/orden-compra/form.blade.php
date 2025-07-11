<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="cotizacion_id" class="form-label">{{ __('Cotizacion Id') }}</label>
            <input type="text" name="cotizacion_id" class="form-control @error('cotizacion_id') is-invalid @enderror" value="{{ old('cotizacion_id', $ordenCompra?->cotizacion_id) }}" id="cotizacion_id" placeholder="Cotizacion Id">
            {!! $errors->first('cotizacion_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="proveedor_id" class="form-label">{{ __('Proveedor Id') }}</label>
            <input type="text" name="proveedor_id" class="form-control @error('proveedor_id') is-invalid @enderror" value="{{ old('proveedor_id', $ordenCompra?->proveedor_id) }}" id="proveedor_id" placeholder="Proveedor Id">
            {!! $errors->first('proveedor_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="codigo" class="form-label">{{ __('Codigo') }}</label>
            <input type="text" name="codigo" class="form-control @error('codigo') is-invalid @enderror" value="{{ old('codigo', $ordenCompra?->codigo) }}" id="codigo" placeholder="Codigo">
            {!! $errors->first('codigo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="text" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha', $ordenCompra?->fecha) }}" id="fecha" placeholder="Fecha">
            {!! $errors->first('fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="subtotal" class="form-label">{{ __('Subtotal') }}</label>
            <input type="text" name="subtotal" class="form-control @error('subtotal') is-invalid @enderror" value="{{ old('subtotal', $ordenCompra?->subtotal) }}" id="subtotal" placeholder="Subtotal">
            {!! $errors->first('subtotal', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="impuestos" class="form-label">{{ __('Impuestos') }}</label>
            <input type="text" name="impuestos" class="form-control @error('impuestos') is-invalid @enderror" value="{{ old('impuestos', $ordenCompra?->impuestos) }}" id="impuestos" placeholder="Impuestos">
            {!! $errors->first('impuestos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="total" class="form-label">{{ __('Total') }}</label>
            <input type="text" name="total" class="form-control @error('total') is-invalid @enderror" value="{{ old('total', $ordenCompra?->total) }}" id="total" placeholder="Total">
            {!! $errors->first('total', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="moneda_id" class="form-label">{{ __('Moneda Id') }}</label>
            <input type="text" name="moneda_id" class="form-control @error('moneda_id') is-invalid @enderror" value="{{ old('moneda_id', $ordenCompra?->moneda_id) }}" id="moneda_id" placeholder="Moneda Id">
            {!! $errors->first('moneda_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>