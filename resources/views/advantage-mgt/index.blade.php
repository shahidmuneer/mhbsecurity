@extends('advantage-mgt.base')
@section('action-content')
    <!-- Main content -->
    <section class="content">
      <div class="box">
  <div class="box-header">
    <div class="row">
        <div class="col-sm-8">
          <h3 class="box-title">List of Advantages</h3>
        </div>
        <div class="col-sm-4">
          <a class="btn btn-primary" href="{{ route('advantage-management.create') }}">Add new Advantage</a>
        </div>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
      <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6"></div>
      </div>
      <form method="POST" action="{{ route('advantage-management.search') }}">
         {{ csrf_field() }}
         @component('layouts.search', ['title' => 'Search'])
          @component('layouts.two-cols-search-row', ['items' => ['User Name', 'First Name'], 
          'oldVals' => [isset($searchingVals) ? $searchingVals['username'] : '', isset($searchingVals) ? $searchingVals['firstname'] : '']])
          @endcomponent
          @endcomponent
          </br>
      </form>
    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div class="row">
        <div class="col-sm-12">
          <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
            <thead>
              <tr role="row">
                <th width="10%" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" aria-sort="ascending">Image</th>
                <th width="20%" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">Name</th>
                <th tabindex="0" aria-controls="example2" width='70%' rowspan="1" colspan="2" aria-label="Action: activate to sort column ascending">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($advantages as $advantage)
                <tr role="row" class="odd">
                    <td class="sorting_1"><img src="/uploads/advantages/{{ $advantage->picture }}" width="50"></td>
                  <td>{{ $advantage->name }}</td>
                  <td>
            <center> <form class="row"  method="POST" action="{{ route('advantage-management.destroy', ['id' => $advantage->id]) }}" onsubmit = "return confirm('Are you sure?')">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a href="{{ route('advantage-management.edit', ['id' => $advantage->id]) }}" class="btn btn-warning btn-sm  btn-margin">
                            <i class="fa fa-edit"></i>
                        </a>
                       
                         <button type="submit" class="btn btn-danger btn-margin">
                           <i class="fa fa-trash"></i>
                        </button>

                    </form>
            </center>
                  </td>
              </tr>
            @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th width="10%" rowspan="1" colspan="1">Picture</th>
                <th width="20%" rowspan="1" colspan="1">Name</th>
                <th rowspan="1" colspan="2">Action</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-5">
          <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to {{count($advantages)}} of {{count($advantages)}} entries</div>
        </div>
        <div class="col-sm-7">
          <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
            {{ $advantages->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.box-body -->
</div>
    </section>
    <!-- /.content -->
  </div>
@endsection