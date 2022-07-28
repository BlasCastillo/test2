
@extends('layouts.plantillapadre')

@section('template_title')
    Compra
@endsection

@section('plantillapadre')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Compra') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('compras.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Correo</th>
										<th>Wallet</th>
										<th>F Inicio</th>
										<th>F Fin</th>
										<th>Card Number</th>
										<th>Card Holder</th>
										<th>Mes</th>
										<th>Anio</th>
										<th>Ccv</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($compras as $compra)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $compra->correo }}</td>
											<td>{{ $compra->wallet }}</td>
											<td>{{ $compra->f_inicio }}</td>
											<td>{{ $compra->f_fin }}</td>
											<td>{{ $compra->card_number }}</td>
											<td>{{ $compra->card_holder }}</td>
											<td>{{ $compra->mes }}</td>
											<td>{{ $compra->anio }}</td>
											<td>{{ $compra->ccv }}</td>

                                            <td>
                                                <form action="{{ route('compras.destroy',$compra->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('compras.show',$compra->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('compras.edit',$compra->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $compras->links() !!}
            </div>
        </div>
    </div>
@endsection
