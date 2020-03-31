@extends('index')
@section('title','new task')
@section('content')
<div class="container mt-5 mb-5">
    <div class="card justify-content-center">
        <div class="card-header text-center">
            New task to do
        </div>
        <div class="card-body">
            <form method="POST" action="/create">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @csrf
                <div class="form-group">
                <input type="text" class="form-control"  name="title" value="{{old('title')}}"  placeholder="Enter Title task">

                </div>

                <div class="form-group">
                    <textarea class="form-control" name="discription" value="{{old('discription')}}" placeholder="task description" rows="3"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary w-50">Submit</button>

                </div>
            </form>
        </div>
    </div>
</div>


@endsection
