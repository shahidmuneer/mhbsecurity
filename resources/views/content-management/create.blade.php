@extends('content-management.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-10 ">
            <div class="panel panel-default">
                <div class="panel-heading">Add new Post</div>
                <div class="panel-body">
                    <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{ route('content-management.store') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('menu') ? ' has-error' : '' }}">
                            <label for="menu" class="col-md-4 control-label">Menu</label>

                            <div class="col-md-6">
                                <!--<input id="menu" type="text" class="form-control" name="menu" value="{{ old('menu') }}" required autofocus>-->
                                <select class="form-control" name="menu_id">
                                    @foreach($menus as $menu)
                                    <option value="{{$menu->id}}" >{{$menu->name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('menu'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('menu') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                   
                       <div class="form-group{{ $errors->has('heading') ? ' has-error' : '' }}">
                            <label for="heading" class="col-md-4 control-label">Heading</label>

                            <div class="col-md-6">
                                <input id="heading" type="text" class="form-control" name="heading" value="{{ old('heading') }}" required autofocus>

                                @if ($errors->has('heading'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('heading') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                         <div class="form-group{{ $errors->has('picture') ? ' has-error' : '' }}">
                            <label for="picture" class="col-md-4 control-label">Picture</label>

                            <div class="col-md-6">
                                <input id="picture" type="file" class="form-control" name="picture" value="{{ old('picture') }}" required autofocus>

                                @if ($errors->has('picture'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('picture') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                        
                        <div class="form-group{{ $errors->has('copyrights_description') ? ' has-error' : '' }}">
                            <label for="picture_description" class="col-md-4 control-label">Picture Description</label>

                            <div class="col-md-6">
                                <input id="picture_description" type="type" class="form-control" name="picture_description" value="{{ old('picture_description') }}" required autofocus>

                                @if ($errors->has('picture_description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('picture_description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                        
                        <div class="form-group{{ $errors->has('copyrights') ? ' has-error' : '' }}">
                            <label for="copyrights" class="col-md-4 control-label">Copyrights</label>

                            <div class="col-md-6">
                                <input id="copyrights" type="text" class="form-control" name="copyrights" value="{{ old('copyrights') }}" >

                                @if ($errors->has('copyrights'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('copyrights') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('metaTitle') ? ' has-error' : '' }}">
                            <label for="metaTitle" class="col-md-4 control-label">Meta Name</label>

                            <div class="col-md-6">
                                <input id="metaTitle" type="text" class="form-control" name="metaTitle" value="{{ old('metaTitle') }}" >

                                @if ($errors->has('metaTitle'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('metaTitle') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                
                
                
                         
                        
                        <div class="form-group{{ $errors->has('metaDescription') ? ' has-error' : '' }}">
                            <div class="row"><center> <label for="metaDescription" style='padding:14px;' class="row col-md-5 text-center control-label">Meta Description</label>
                                </center></div><hr>
                            <div class="clearfix"></div>
                            <div class="col-md-9 col-md-offset-3">
                                <textarea id="metaDescription" type="metaDescription" class="form-control" name="metaDescription">{{old("metaDescription")}}</textarea>
                                @if ($errors->has('metaDescription'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('metaDescription') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                
                 <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                            <div class="row"><center> <label for="content" style='padding:14px;' class="row col-md-5 text-center control-label">Post</label>
                                </center></div><hr>
                            <div class="clearfix"></div>
                            <div class="col-md-9 col-md-offset-3">
                                <textarea id="details" class="form-control" name="content">{{old("content")}}</textarea>
                                @if ($errors->has('content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>
                  </div>

                
                       <div class="form-group{{ $errors->has('keywords') ? ' has-error' : '' }}">
                            <label for="keywords" class="col-md-4 control-label">Keywords</label>

                            <div class="col-md-6">
                                <input id="keywords" type="text" class="form-control" name="keywords" value="{{ old('keywords') }}" >

                                @if ($errors->has('keywords'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('keywords') }}</strong>
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
