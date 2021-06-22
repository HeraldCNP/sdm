<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('name', 'Nombre del Elemento') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del Elemento']) !!}
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('symbol', 'Simbolo') !!}
            {!! Form::text('symbol', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el simbolo del Elemento']) !!}
            @error('symbol')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('price', 'Precio') !!}
            {!! Form::text('price', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Precio']) !!}
            @error('price')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
