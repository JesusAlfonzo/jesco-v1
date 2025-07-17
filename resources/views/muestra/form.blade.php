<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="paciente_id" class="form-label"><i class="bi bi-person me-1"></i>Paciente</label>
            <input type="text" name="paciente_id" class="form-control @error('paciente_id') is-invalid @enderror" value="{{ old('paciente_id', $muestra?->paciente_id) }}" id="paciente_id" placeholder="Ingrese el ID del paciente">
            {!! $errors->first('paciente_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-3">
            <label for="codigo_muestra" class="form-label"><i class="bi bi-upc-scan me-1"></i>Código de Muestra</label>
            <input type="text" name="codigo_muestra" class="form-control @error('codigo_muestra') is-invalid @enderror" value="{{ old('codigo_muestra', $muestra?->codigo_muestra) }}" id="codigo_muestra" placeholder="Ingrese el código de la muestra">
            {!! $errors->first('codigo_muestra', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-3">
            <label for="fecha_toma" class="form-label"><i class="bi bi-calendar me-1"></i>Fecha de Toma</label>
            <input type="text" name="fecha_toma" class="form-control @error('fecha_toma') is-invalid @enderror" value="{{ old('fecha_toma', $muestra?->fecha_toma) }}" id="fecha_toma" placeholder="Ingrese la fecha de toma">
            {!! $errors->first('fecha_toma', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-3">
            <label for="tipo_muestra" class="form-label"><i class="bi bi-droplet-half me-1"></i>Tipo de Muestra</label>
            <input type="text" name="tipo_muestra" class="form-control @error('tipo_muestra') is-invalid @enderror" value="{{ old('tipo_muestra', $muestra?->tipo_muestra) }}" id="tipo_muestra" placeholder="Ingrese el tipo de muestra">
            {!! $errors->first('tipo_muestra', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-3">
            <label for="observaciones" class="form-label"><i class="bi bi-chat-left-text me-1"></i>Observaciones</label>
            <input type="text" name="observaciones" class="form-control @error('observaciones') is-invalid @enderror" value="{{ old('observaciones', $muestra?->observaciones) }}" id="observaciones" placeholder="Ingrese observaciones">
            {!! $errors->first('observaciones', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</div>