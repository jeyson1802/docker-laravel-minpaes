@extends('layouts.app')

@section('title', 'Listado conferencia')

@section('content')

    <div id="page-banner-area" class="page-banner-area">        
    </div><!-- Page Banner end -->

    <div class="row">
        <section class="content">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-12">
                            @if(Session::has('success'))
                            <div class="alert alert-info">
                                {{Session::get('success')}}
                            </div>
                            @endif
                            <div class="pull-left"><h3>Inscritos Conferencia</h3></div>
                            <div class="pull-right">
                                <div class="btn-group">
                                <a href="#" class="btn btn-primary" >Exportar <span class="glyphicon glyphicon-save"></span></a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="mytable" class="table table-bordred table-striped">
                                    <thead>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Correo</th>
                                    <th>Celular</th>
                                    <th>Facebook</th>
                                    <th>País</th>
                                    <th>Iglesia</th>
                                    <th>Oración</th>
                                    <th>Rol - Iglesia</th>
                                    <th>Eliminar</th>
                                    </thead>
                                    <tbody>
                                    @if($conferencias->count())  
                                    @foreach($conferencias as $conferencia)  
                                    <tr>
                                        <td>{{$conferencia->nombres}}</td>
                                        <td>{{$conferencia->apellidos}}</td>
                                        <td>{{$conferencia->correo}}</td>
                                        <td>{{$conferencia->celular}}</td>
                                        <td>{{$conferencia->facebook}}</td>
                                        <td>{{$conferencia->pais}}</td>
                                        <td>{{$conferencia->iglesia}}</td>
                                        <td>{{$conferencia->roliglesia}}</td>
                                        <td>{{$conferencia->noticias}}</td>  
                                        <td>                          
                                        <form action="{{action('ConferenciaController@destroy', $conferencia)}}" method="post">
                                        {{csrf_field()}}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                                        </form>
                                        </td>
                                    </tr>
                                    @endforeach 
                                    @else
                                    <tr>
                                        <td colspan="8">No hay registro !!</td>
                                    </tr>
                                    @endif
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                {{ $conferencias->links() }}
        </section><!-- Main container end -->
    </div>

@endsection