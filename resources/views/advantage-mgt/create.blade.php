@extends('advantage-mgt.base')

@section('action-content')

<div class="container">
    <div class="row">
        <div class="col-md-10 ">
            <div class="panel panel-default">
                <div class="panel-heading">Add new Advantage</div>
                <div class="panel-body">
                    <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{ route('advantage-management.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                   
                        <div class="form-group{{ $errors->has('package_id') ? ' has-error' : '' }}">
                            <label for="userpackage_id" class="col-md-4 control-label">Package Id</label>

                            <div class="col-md-6">
                                <input id="package_id" type="text" class="form-control" name="package_id" value="{{ old('package_id') }}" required autofocus>

                                @if ($errors->has('package_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('package_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                              <div class="form-group{{ $errors->has('comes_with') ? ' has-error' : '' }}">
                            <label for="usercomes_with" class="col-md-4 control-label">Additional</label>

                            <div class="col-md-6">
                                <input id="comes_with" type="text" class="form-control" name="comes_with" value="{{ old('comes_with') }}" required autofocus>

                                @if ($errors->has('comes_with'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('comes_with') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                      
                          <div class="form-group{{ $errors->has('importance') ? ' has-error' : '' }}">
                            <label for="userimportance" class="col-md-4 control-label">Importance</label>

                            <div class="col-md-6">
                                <input id="importance" type="text" class="form-control" name="importance" value="{{ old('importance') }}" required autofocus>

                                @if ($errors->has('importance'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('importance') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('picture') ? ' has-error' : '' }}">
                            <label for="picture" class="col-md-4 control-label">Image</label>

                            <div class="col-md-6">
                                <input id="picture" type="file" class="form-control" name="picture" value="{{ old('picture') }}" >

                                @if ($errors->has('picture'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('picture') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                          <div class="form-group{{ $errors->has('picture_description') ? ' has-error' : '' }}">
                            <label for="picture_description" class="col-md-4 control-label">Image Description</label>

                            <div class="col-md-6">
                                <input id="picture_description" type="picture_description" class="form-control" name="picture_description" value="{{ old('picture_description') }}" required>

                                @if ($errors->has('picture_description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('picture_description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('details') ? ' has-error' : '' }}">
                            <div class="row"><center> <label for="details" style='padding:14px;' class="row col-md-5 text-center control-label">Details</label>
                                </center></div><hr>
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                                <textarea id="details" type="details" class="form-control" name="details">{{old("name")}}</textarea>
                                @if ($errors->has('details'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('details') }}</strong>
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
