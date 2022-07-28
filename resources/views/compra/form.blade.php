<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('correo') }}
            {{ Form::email('correo', $compra->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('wallet') }}
            {{ Form::text('wallet', $compra->wallet, ['class' => 'form-control' . ($errors->has('wallet') ? ' is-invalid' : ''), 'placeholder' => 'Wallet']) }}
            {!! $errors->first('wallet', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('f_inicio') }}
            {{ Form::date('f_inicio', $compra->f_inicio, ['class' => 'form-control' . ($errors->has('f_inicio') ? ' is-invalid' : ''), 'placeholder' => 'F Inicio']) }}
            {!! $errors->first('f_inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('f_fin') }}
            {{ Form::date('f_fin', $compra->f_fin, ['class' => 'form-control' . ($errors->has('f_fin') ? ' is-invalid' : ''), 'placeholder' => 'F Fin']) }}
            {!! $errors->first('f_fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('card_number') }}
            {{ Form::text('card_number', $compra->card_number, ['class' => 'form-control' . ($errors->has('card_number') ? ' is-invalid' : ''), 'placeholder' => 'Card Number']) }}
            {!! $errors->first('card_number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('card_holder') }}
            {{ Form::text('card_holder', $compra->card_holder, ['class' => 'form-control' . ($errors->has('card_holder') ? ' is-invalid' : ''), 'placeholder' => 'Card Holder']) }}
            {!! $errors->first('card_holder', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mes') }}
            {{ Form::text('mes', $compra->mes, ['class' => 'form-control' . ($errors->has('mes') ? ' is-invalid' : ''), 'placeholder' => 'Mes']) }}
            {!! $errors->first('mes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('anio') }}
            {{ Form::text('anio', $compra->anio, ['class' => 'form-control' . ($errors->has('anio') ? ' is-invalid' : ''), 'placeholder' => 'Anio']) }}
            {!! $errors->first('anio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ccv') }}
            {{ Form::text('ccv', $compra->ccv, ['class' => 'form-control' . ($errors->has('ccv') ? ' is-invalid' : ''), 'placeholder' => 'Ccv']) }}
            {!! $errors->first('ccv', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>