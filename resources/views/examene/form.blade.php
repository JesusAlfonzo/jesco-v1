<div class="row g-4">
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="muestra_id" class="form-label"><i class="bi bi-droplet me-1"></i>Muestra</label>
            <select name="muestra_id" id="muestra_id" class="form-select @error('muestra_id') is-invalid @enderror">
                <option value="">Seleccione una muestra</option>
                @foreach($muestras as $muestra)
                    <option value="{{ $muestra->id }}" {{ old('muestra_id', $examene?->muestra_id) == $muestra->id ? 'selected' : '' }}>
                        {{ $muestra->codigo_muestra ?? $muestra->id }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('muestra_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-3">
            <label for="tipo_examen_id" class="form-label"><i class="bi bi-clipboard2-pulse me-1"></i>Tipo de Examen</label>
            <select name="tipo_examen_id" id="tipo_examen_id" class="form-select @error('tipo_examen_id') is-invalid @enderror">
                <option value="">Seleccione un tipo de examen</option>
                @foreach($tiposExamen as $tipo)
                    <option value="{{ $tipo->id }}" {{ old('tipo_examen_id', $examene?->tipo_examen_id) == $tipo->id ? 'selected' : '' }}>
                        {{ $tipo->nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('tipo_examen_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-3">
            <label for="usuario_id" class="form-label"><i class="bi bi-person-circle me-1"></i>Usuario</label>
            <select name="usuario_id" id="usuario_id" class="form-select @error('usuario_id') is-invalid @enderror">
                <option value="">Seleccione un usuario</option>
                @foreach($usuarios as $usuario)
                    <option value="{{ $usuario->id }}" {{ old('usuario_id', $examene?->usuario_id) == $usuario->id ? 'selected' : '' }}>
                        {{ $usuario->name }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('usuario_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-3">
            <label for="estado_examen_id" class="form-label"><i class="bi bi-activity me-1"></i>Estado del Examen</label>
            <select name="estado_examen_id" id="estado_examen_id" class="form-select @error('estado_examen_id') is-invalid @enderror">
                <option value="">Seleccione un estado</option>
                @foreach($estadosExamen as $estado)
                    <option value="{{ $estado->id }}" {{ old('estado_examen_id', $examene?->estado_examen_id) == $estado->id ? 'selected' : '' }}>
                        {{ $estado->nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('estado_examen_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="fecha_solicitud" class="form-label"><i class="bi bi-calendar-plus me-1"></i>Fecha de Solicitud</label>
            <input type="datetime-local" name="fecha_solicitud" class="form-control @error('fecha_solicitud') is-invalid @enderror" value="{{ old('fecha_solicitud', $examene?->fecha_solicitud) }}" id="fecha_solicitud" placeholder="Ingrese la fecha de solicitud">
            {!! $errors->first('fecha_solicitud', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-3">
            <label for="fecha_procesamiento" class="form-label"><i class="bi bi-calendar-check me-1"></i>Fecha de Procesamiento</label>
            <input type="datetime-local" name="fecha_procesamiento" class="form-control @error('fecha_procesamiento') is-invalid @enderror" value="{{ old('fecha_procesamiento', $examene?->fecha_procesamiento) }}" id="fecha_procesamiento" placeholder="Ingrese la fecha de procesamiento">
            {!! $errors->first('fecha_procesamiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-3">
            <label for="resultado" class="form-label"><i class="bi bi-clipboard-check me-1"></i>Resultado</label>
            <textarea name="resultado" class="form-control @error('resultado') is-invalid @enderror" id="resultado" placeholder="Ingrese el resultado" rows="3">{{ old('resultado', $examene?->resultado) }}</textarea>
            {!! $errors->first('resultado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="d-flex justify-content-center align-items-center mt-5 mb-2">
            <button type="submit" class="btn btn-primary px-4 py-2 shadow-sm rounded-pill fw-semibold">
                <i class="bi bi-save me-1"></i> Guardar
            </button>
        </div>
    </div>
</div>