@extends('menu-management.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-10 ">
            <div class="panel panel-default">
                <div class="panel-heading">Add new Menu</div>
                <div class="panel-body">
                    <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{ route('menu-management.update',['id'=>$menu->id]) }}">
                     
                        <input type="hidden" name="_method" value="PATCH">
                        
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $menu->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
