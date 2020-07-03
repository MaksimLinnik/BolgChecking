@extends('blogs-mgmt.base')
@section('action-content')
    <!-- Main content -->
    <section class="content">
      <div class="box">
        <div class="box-header">
          <div class="row">
              <div class="col-sm-8">
                <h3 class="box-title">List of blogs</h3>
              </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
              <div class="col-sm-6"></div>
              <div class="col-sm-6"></div>
            </div>
          <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row">
              <div class="col-sm-12">
                <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                  <thead>
                    <tr role="row">
                      <th width="5%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Occupation" aria-sort="ascending">Occupation</th>
                      <th width="1%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Degree">Degree</th>
                      <th width="1%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Class Number">Class Number</th>
                      <th width="1%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Age">Age</th>
                      <th width="1%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Name" aria-sort="ascending">Name</th>
                      <th width="1%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Email" aria-sort="ascending">Email</th>
                      <th width="5%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Phone" aria-sort="ascending">Phone</th>
                      <th width="5%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Gender" aria-sort="ascending">Gender</th>
                      <th width="5%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Message" aria-sort="ascending">Message</th>
                      <th width="5%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Regarding" aria-sort="ascending">Regarding</th>
                      <th width="5%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Description" aria-sort="ascending">Description</th>
                      <th width="5%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Choice" aria-sort="ascending">Choice</th>
                      <th width="5%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Expectedsalary" aria-sort="ascending">Expectedsalary</th>
                      <th width="5%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CVFile" aria-sort="ascending">CVFile</th>
                      <th width="5%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Summary" aria-sort="ascending">Summary</th>
                      <th class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="2" aria-label="Action: activate to sort column ascending">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($blogs as $blog)
                      <tr role="row" class="odd">
                        <td class="sorting_1">{{ $blog->occupation }}</td>
                        <td class="hidden-xs">{{ $blog->sdegree }}</td>
                        <td class="hidden-xs">{{ $blog->classnum }}</td>
                        <td class="hidden-xs">{{ $blog->age }}</td>
                        <td class="hidden-xs">{{ $blog->name }}</td>
                        <td>{{ $blog->email }}</td>
                        <td class="hidden-xs">{{ $blog->phone }}</td>
                        <td class="hidden-xs">{{ $blog->gender }}</td>
                        <td class="hidden-xs">{{ $blog->message }}</td>
                        <td class="hidden-xs">{{ $blog->group1 }}</td>
                        <td class="hidden-xs">{{ $blog->description }}</td>
                        <td class="hidden-xs">{{ $blog->choice1 }} / {{ $blog->choice2 }} / {{ $blog->choice3 }}</td>
                        <td class="hidden-xs">{{ $blog->expectedsalary }}</td>
                        <td class="hidden-xs"><a href="{{ url($blog->CVfile) }}" target="_blank">{{ $blog->filename }}</a></td>
                        <td class="hidden-xs">{{ $blog->totmessage }}</td>
                        <td class="hidden-xs">
                          <form class="row form-middle" method="POST" action="{{ route('admin.update', ['id' => $blog->id]) }}" onsubmit = "return confirm('Are you sure?')">
                            <input type="hidden" name="_method" value="PATCH">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="flag" value="{{($blog->flag + 1) % 2}}">
                            @if ($blog->flag == 0)
                            <button type="submit" class="btn btn-danger col-sm-6 col-xs-6 btn-margin">
                              <i class="fa fa-close"> Block</i>
                            </button>
                            @else
                            <button type="submit" class="btn btn-primary col-sm-6 col-xs-6 btn-margin">
                              <i class="fa fa-check"> Allow</i>
                            </button>
                            @endif
                          </form>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                    <th width="5%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Occupation" aria-sort="ascending">Occupation</th>
                      <th width="1%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Degree">Degree</th>
                      <th width="1%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Class Number">Class Number</th>
                      <th width="1%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Age">Age</th>
                      <th width="1%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Name" aria-sort="ascending">Name</th>
                      <th width="1%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Email" aria-sort="ascending">Email</th>
                      <th width="5%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Phone" aria-sort="ascending">Phone</th>
                      <th width="5%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Gender" aria-sort="ascending">Gender</th>
                      <th width="5%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Message" aria-sort="ascending">Message</th>
                      <th width="5%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Regarding" aria-sort="ascending">Regarding</th>
                      <th width="5%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Description" aria-sort="ascending">Description</th>
                      <th width="5%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Choice" aria-sort="ascending">Choice</th>
                      <th width="5%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Expectedsalary" aria-sort="ascending">Expectedsalary</th>
                      <th width="5%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CVFile" aria-sort="ascending">CVFile</th>
                      <th width="5%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Summary" aria-sort="ascending">Summary</th>
                      <th class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="2" aria-label="Action: activate to sort column ascending">Action</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-5">
                <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to {{count($blogs)}} of {{count($blogs)}} entries</div>
              </div>
              <div class="col-sm-7">
                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                  {{ $blogs->links() }}
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