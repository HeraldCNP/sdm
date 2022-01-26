<div>
    {!! Form::text('user', null, ['class' => 'form-control', 'wire:model' => 'client', 'placeholder' => 'Ingrese el Apellido Paterno o el Carnet de Identidad']) !!}

    @if(count($people) > 0)
        <div class="mb-3">
            <label class="inline-block w-32 font-bold">Seleccione Cliente:</label>
            <select name="user_id"
                class="form-control">
                <option value=''>Seleccione Cliente...</option>
                @foreach($people as $person)
                    <option value={{ $person->user_id }}>{{ $person->name }} {{ $person->app }} {{ $person->apm }}</option>
                @endforeach
            </select>
        </div>
    @else
        @if ($people)
            <p class="alert alert-danger m-2">No hay registros, vuelva a ingresar el Apellido o Carnet de Identidad</p>
        @endif
    @endif
</div>
