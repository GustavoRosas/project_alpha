@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="padding:15px">Edit Product</h2>
            </div>
            
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $employee->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <textarea class="form-control" style="height:50px" name="email"
                        placeholder="Email">{{ $employee->email }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Contact:</strong>
                    <input type="text" name="contact" class="form-control" placeholder="{{ $employee->contact }}"
                        value="{{ $employee->contact }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-left"  style="padding-bottom:15px">
                <button type="submit" class="btn btn-success" style="font-size: 15px;color:black;">Submit</button>
                <a class="btn btn-primary" href="{{ route('employees.index') }}">Return</a>
            </div>
        </div>

    </form>
@endsection