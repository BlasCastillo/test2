@extends('layouts.plantillapadre')



@section('plantillapadre')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Compra</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('compras.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $compra->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Wallet:</strong>
                            {{ $compra->wallet }}
                        </div>
                        <div class="form-group">
                            <strong>F Inicio:</strong>
                            {{ $compra->f_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>F Fin:</strong>
                            {{ $compra->f_fin }}
                        </div>
                        <div class="form-group">
                            <strong>Card Number:</strong>
                            {{ $compra->card_number }}
                        </div>
                        <div class="form-group">
                            <strong>Card Holder:</strong>
                            {{ $compra->card_holder }}
                        </div>
                        <div class="form-group">
                            <strong>Mes:</strong>
                            {{ $compra->mes }}
                        </div>
                        <div class="form-group">
                            <strong>Anio:</strong>
                            {{ $compra->anio }}
                        </div>
                        <div class="form-group">
                            <strong>Ccv:</strong>
                            {{ $compra->ccv }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
