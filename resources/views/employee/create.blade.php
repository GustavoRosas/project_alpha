@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="padding:15px">Add New Employee</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('employees.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
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
    <form action="{{ route('employees.store') }}" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <textarea class="form-control" style="height:50px" name="email"
                        placeholder="example@example.com"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Contact:</strong>
                    <input type="text" name="contact" class="form-control" placeholder="(99) 9 9999-9999">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-left"  style="padding-bottom:15px">
                <button type="submit" class="btn btn-success" style="font-size: 15px;color:black;">Submit</button>
                <button type="submit" class="btn btn-info" style="font-size: 15px;color:black;">Return</button>
            </div>
        </div>

    </form>
@endsection