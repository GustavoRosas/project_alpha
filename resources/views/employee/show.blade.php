@extends('layouts.app')


@section('content')
    <div class="row" style="padding:15px">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $employee->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $employee->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contact:</strong>
                {{ $employee->contact }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-left"  style="padding-bottom:15px">
                <a class="btn btn-primary" href="{{ route('employees.index') }}">Return</a>
            </div>
    </div>
    </div>
        </div>
    </div>
@endsection