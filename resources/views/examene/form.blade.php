<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="muestra_id" class="form-label">Muestra</label>
            <input type="text" name="muestra_id" class="form-control @error('muestra_id') is-invalid @enderror" value="{{ old('muestra_id', $examene?->muestra_id) }}" id="muestra_id" placeholder="Ingrese el ID de la muestra">
            {!! $errors->first('muestra_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-3">
            <label for="tipo_examen_id" class="form-label">Tipo de Examen</label>
            <input type="text" name="tipo_examen_id" class="form-control @error('tipo_examen_id') is-invalid @enderror" value="{{ old('tipo_examen_id', $examene?->tipo_examen_id) }}" id="tipo_examen_id" placeholder="Ingrese el tipo de examen">
            {!! $errors->first('tipo_examen_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-3">
            <label for="usuario_id" class="form-label">Usuario</label>
            <input type="text" name="usuario_id" class="form-control @error('usuario_id') is-invalid @enderror" value="{{ old('usuario_id', $examene?->usuario_id) }}" id="usuario_id" placeholder="Ingrese el usuario">
            {!! $errors->first('usuario_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-3">
            <label for="estado_examen_id" class="form-label">Estado del Examen</label>
            <input type="text" name="estado_examen_id" class="form-control @error('estado_examen_id') is-invalid @enderror" value="{{ old('estado_examen_id', $examene?->estado_examen_id) }}" id="estado_examen_id" placeholder="Ingrese el estado del examen">
            {!! $errors->first('estado_examen_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-3">
            <label for="fecha_solicitud" class="form-label">Fecha de Solicitud</label>
            <input type="text" name="fecha_solicitud" class="form-control @error('fecha_solicitud') is-invalid @enderror" value="{{ old('fecha_solicitud', $examene?->fecha_solicitud) }}" id="fecha_solicitud" placeholder="Ingrese la fecha de solicitud">
            {!! $errors->first('fecha_solicitud', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-3">
            <label for="fecha_procesamiento" class="form-label">Fecha de Procesamiento</label>
            <input type="text" name="fecha_procesamiento" class="form-control @error('fecha_procesamiento') is-invalid @enderror" value="{{ old('fecha_procesamiento', $examene?->fecha_procesamiento) }}" id="fecha_procesamiento" placeholder="Ingrese la fecha de procesamiento">
            {!! $errors->first('fecha_procesamiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-3">
            <label for="resultado" class="form-label">Resultado</label>
            <input type="text" name="resultado" class="form-control @error('resultado') is-invalid @enderror" value="{{ old('resultado', $examene?->resultado) }}" id="resultado" placeholder="Ingrese el resultado">
            {!! $errors->first('resultado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</div>