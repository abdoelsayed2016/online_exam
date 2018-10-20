@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="panel">
            <div class="panel-body">
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
                <div class="col-lg-12">
                    <div class="col-md-12" style="margin-bottom: 30px">
                        <div class="dropdown pull-right">
                        </div>
                        <h4 class="header-title m-t-0 m-b-30">Import Excel Sheet</h4>
                        <input type="file" class="dropify" data-max-file-size="1M" />
                    </div>
                    <!-- end col -->
                    @include('admin.students.create')
                     <!-- /.modal -->
                </div>
                <!-- end col -->
                <div class="editable-responsive ">
                    <table class="table table-striped" id="datatable-editable">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Colleges</th>
                            <th>Term</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $student)
                        <tr class="gradeX">

                            <td>{{$student->STUDENT_NAME}}</td>
                            <td>
                                {{$student->faculty->FACULTY_NAME}}
                            </td>
                            <td>
                                @if($student->term==1)
                                    First
                                    @else
                                    Second
                                @endif
                            </td>
                            <td class="actions">
                                <a href="#" class="on-default " data-toggle="modal"
                                   data-target="#con-close-modal_{{$student->id}}">
                                    <i style="color: white;padding: 8px 10px;background-color: #10c469 !important;border: 1px solid #10c469 !important;
" class="fa fa-pencil"></i></a>
                                <a href="#" data-toggle="modal" data-target="#dialog_{{$student->id}}"
                                   class="on-default ">
                                    <i style="color: white; background-color: #ff5b5b !important; border: 1px solid #ff5b5b !important;padding: 8px 10px;" class="fa fa-trash-o">
                                    </i>
                                </a>
                            </td>
                            @include('admin.students.edit')
                            <?php
                            $route=route('students.destroy', $student->id);
                            $id= $student->id;
                            $message="Do You Want To Delete This Student ?";
                            ?>
                            @include('layouts.delete')
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end: panel body -->
        </div>
        <!-- end panel -->
    </div>
    <!-- end col-->
</div>
@endsection
@section('script')
  <script>
      function department_ajax(val){
          $.ajax({ //Process the form using $.ajax()
              type      : 'POST', //Method type
              url       : '{{route('students.getDepartment')}}', //Your form processing file URL
              data      : {id:val,_token:"{{csrf_token()}}"}, //Forms name
//              dataType  : 'json',
              success   : function(data) {
                  $('#depart').select2('destroy')
                  $('#depart').html(data)
                  $('#depart').select2()

              }
          });
      }
  </script>
@endsection
