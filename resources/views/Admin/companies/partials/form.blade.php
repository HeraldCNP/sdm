<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('name', 'Nombre de la Empresa') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la empresa']) !!}
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('phone', 'Celular') !!}
            {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el # de celular']) !!}
            @error('phone')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('address', 'Dirección') !!}
            {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Dirección']) !!}
            @error('address')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('fax', 'Telefono-Fax') !!}
            {!! Form::text('fax', null, ['class' => 'form-control', 'placeholder' => 'Ingrese # de telefono fax']) !!}
            @error('fax')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('url', 'Página Web') !!}
            {!! Form::text('url', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la dirección web']) !!}
            @error('url')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('face', 'Facebook') !!}
            {!! Form::text('face', null, ['class' => 'form-control', 'placeholder' => 'Ingrese facebook']) !!}
            @error('face')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('delegate', 'Delegado') !!}
            {!! Form::select('delegate', $users, null, ['class' => 'form-control']) !!}
            @error('delegate')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        {{-- {!! Form::checkbox('delegate', $users, null, ['class' => 'form-control']) !!} --}}
        {{-- {!! Form::select('delegate', $users, null, []) !!} --}}



    </div>
</div>
