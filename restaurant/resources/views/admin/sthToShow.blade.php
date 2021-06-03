@extends('admin.common')

@section('title', $title)

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <a href="{{url()->current()}}/../../">
                <button type="button" class="btn-block btn btn-secondary mb-3">Powrót</button>
            </a>
        </div>

        <div class="col-12">
            <table class="table table-dark">
                <thead>
                    <tr>
                        @foreach($columnsHead as $column)
                            <th scope="col">{{$column}}</th>
                        @endforeach
                        @if($manage['edit'] + $manage['delete'] > 0)
                            <th scope="col">Zarządzaj</th>
                        @endif
                    </tr>
                </thead>
                <tbody>

                @foreach($objects as $obj)
                    <tr class="bg-light">
                        @foreach($columnsBody as $key)
                            <td>{{$obj[$key]}}</td>
                        @endforeach
                            @if($manage['edit'] + $manage['delete'] > 0)
                                <td>
                                    @if($manage['edit'])
                                    <a href="{{url()->current()}}/edit/{{$obj['id']}}"><i class="bi bi-pencil"></i></a>
                                    @endif
                                    
                                    @if($manage['delete'])
                                    <a href="{{url()->current()}}/delete/{{$obj['id']}}"><i class="text-danger bi bi-trash"></i></a>
                                    @endif
                                </td>
                            @endif
                    </tr>
                @endforeach
                    @if($manage['add'])
                    <tr>
                        @php
                        $spanCol = count($columnsBody) + ($manage['edit'] + $manage['delete'] + $manage['add'] > 0 ? 1 : 0)
                        @endphp
                        <td style="text-align: center;" colspan="{{$spanCol}}">
                            <a href="{{url()->current()}}/add">
                                <i class="bi bi-plus-circle-dotted" data-bs-toggle="modal" data-bs-target="#newUser"></i>
                            </a>
                        </td>
                    </tr>
                    @endif

                </tbody>
            </table>
        </div>

    </div>
</div>

@endsection
