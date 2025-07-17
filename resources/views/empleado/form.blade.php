<div class="row g-4">
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="nombre" class="form-label"><i class="bi bi-person me-1"></i>Nombre</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $empleado?->nombre) }}" id="nombre" placeholder="Ingrese el nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-3">
            <label for="apellido" class="form-label"><i class="bi bi-person me-1"></i>Apellido</label>
            <input type="text" name="apellido" class="form-control @error('apellido') is-invalid @enderror" value="{{ old('apellido', $empleado?->apellido) }}" id="apellido" placeholder="Ingrese el apellido">
            {!! $errors->first('apellido', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-3">
            <label for="departamento_id" class="form-label"><i class="bi bi-building me-1"></i>Departamento</label>
            <select name="departamento_id" id="departamento_id" class="form-control @error('departamento_id') is-invalid @enderror">
                <option value="">Seleccione un departamento</option> 
                @foreach($departamentos as $departamento)
                    <option value="{{ $departamento->id }}" {{ old('departamento_id', $empleado?->departamento_id) == $departamento->id ? 'selected' : '' }}>
                        {{ $departamento->nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('departamento_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="cargo" class="form-label"><i class="bi bi-briefcase me-1"></i>Cargo</label>
            <input type="text" name="cargo" class="form-control @error('cargo') is-invalid @enderror" value="{{ old('cargo', $empleado?->cargo) }}" id="cargo" placeholder="Ingrese el cargo">
            {!! $errors->first('cargo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-3">
            <label for="estado" class="form-label"><i class="bi bi-circle-fill me-1"></i>Estado</label>
            <select name="estado" id="estado" class="form-control @error('estado') is-invalid @enderror">
                <option value="">Seleccione el estado</option>
                <option value="activo" {{ old('estado', $empleado?->estado) == 'activo' ? 'selected' : '' }}>Activo</option>
                <option value="inactivo" {{ old('estado', $empleado?->estado) == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
                <option value="reposo" {{ old('estado', $empleado?->estado) == 'reposo' ? 'selected' : '' }}>Reposo</option>
                <option value="jubilado" {{ old('estado', $empleado?->estado) == 'jubilado' ? 'selected' : '' }}>Jubilado</option>
            </select>
            {!! $errors->first('estado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-3">
            <label for="fecha_ingreso" class="form-label"><i class="bi bi-calendar-date me-1"></i>Fecha de Ingreso</label>
            <input type="date" name="fecha_ingreso" class="form-control @error('fecha_ingreso') is-invalid @enderror" value="{{ old('fecha_ingreso', $empleado?->fecha_ingreso) }}" id="fecha_ingreso" placeholder="Seleccione la fecha de ingreso">
            {!! $errors->first('fecha_ingreso', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
</div>
<div class="text-center mt-4">
    <button type="submit" class="btn btn-primary"><i class="bi bi-save me-1"></i>Guardar</button>
</div>