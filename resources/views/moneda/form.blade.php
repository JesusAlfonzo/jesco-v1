<div class="row justify-content-center">
    <div class="col-md-6">
        <!-- Campo: Nombre de la moneda -->
        <div class="form-group mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror"
                value="{{ old('nombre', $moneda?->nombre) }}" id="nombre" placeholder="Ejemplo: Euro, Dólar, Bolívar Soberano">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <!-- Campo: Código de la moneda -->
        <div class="form-group mb-3">
            <label for="codigo" class="form-label">Código</label>
            <input type="text" name="codigo" class="form-control @error('codigo') is-invalid @enderror"
                value="{{ old('codigo', $moneda?->codigo) }}" id="codigo" placeholder="Ejemplo: EUR, USD, VES">
            {!! $errors->first('codigo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <!-- Campo: Símbolo de la moneda -->
        <div class="form-group mb-3">
            <label for="simbolo" class="form-label">Símbolo</label>
            <input type="text" name="simbolo" class="form-control @error('simbolo') is-invalid @enderror"
                value="{{ old('simbolo', $moneda?->simbolo) }}" id="simbolo" placeholder="Ejemplo: €, $, Bs.">
            {!! $errors->first('simbolo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <!-- Campo: País -->
        <div class="form-group mb-3">
            <label for="pais" class="form-label">País</label>
            <select name="pais" id="pais" class="form-control @error('pais') is-invalid @enderror">
                <option value="">Seleccione un país</option>
                <option value="Venezuela" {{ old('pais', $moneda?->pais) == 'Venezuela' ? 'selected' : '' }}>Venezuela</option>
                <option value="Estados Unidos" {{ old('pais', $moneda?->pais) == 'Estados Unidos' ? 'selected' : '' }}>Estados Unidos</option>
                <option value="Unión Europea" {{ old('pais', $moneda?->pais) == 'Unión Europea' ? 'selected' : '' }}>Unión Europea</option>
                <!-- Agrega más países según lo necesites -->
            </select>
            {!! $errors->first('pais', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <!-- Botón de guardar -->
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</div>