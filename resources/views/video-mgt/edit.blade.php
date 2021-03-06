@extends('video-mgt.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-10 ">
            <div class="panel panel-default">
                <div class="panel-heading">Add new Video</div>
                <div class="panel-body">
                    <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{ route('video-management.update',['id'=>$video->id]) }}">
                     
                        <input type="hidden" name="_method" value="PATCH">
                        
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $video->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                   
                      
                        <div class="form-group{{ $errors->has('picture') ? ' has-error' : '' }}">
                            <label for="picture" class="col-md-4 control-label">Image</label>

                            <div class="col-md-6">
                                <input id="picture" type="file" class="form-control" name="picture" value="{{ $video->picture }}" >

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
                                <input id="picture_description" type="picture_description" class="form-control" name="picture_description" value="{{ $video->picture_description }}" required>

                                @if ($errors->has('picture_description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('picture_description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('iframe') ? ' has-error' : '' }}">
                           <div class="row"> <label for="iframe" style='padding:14px;' class="row col-md-5 text-center control-label">Details</label>
                           </div><hr>
                            <div class="clearfix"></div>
                            <div class="col-md-12" style='margin-top:10px;'>
                                <textarea id="iframe" type="iframe" class="form-control" name="iframe">{{$video->iframe}}</textarea>
                                @if ($errors->has('iframe'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('iframe') }}</strong>
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
