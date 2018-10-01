<a class="btn btn-success btn-rounded w-md waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Add Doctor </a>
<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Add Doctord </h4>
            </div>
            <form action="{{route('doctor.store')}}" method="post" data-parsley-validate novalidate enctype="multipart/form-data">
                {!! csrf_field() !!}
            <div class="modal-body">
                <div class="row">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="userName"> Doctor Name*</label>
                                <input type="text" name="name" parsley-trigger="change" required placeholder="Enter  name" class="form-control" id="userName">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="emailAddress">Email address*</label>
                                <input type="email" name="email" parsley-trigger="change" required placeholder="Enter email" class="form-control" id="emailAddress">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="pass1">Password*</label>
                                <input id="pass1" type="password" placeholder="Password" required class="form-control">
                            </div>
                            <div class="form-group col-lg-6 ">
                                <label>Phone</label>
                                <input type="text" name="code" placeholder=""  class="form-control">
                                {{--<span class="font-13 text-muted">(999) 999-9999</span>--}}
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="sel1">Select Colleges *</label>
                                <select onchange="department_ajax(this.value)" name='collage' class="select2 form-control"  required>
                                    <option value="">Select Faculty</option>
                                        @foreach($faculites as $faculty)
                                        <option value="{{$faculty->id}}">{{$faculty->FACULTY_NAME}}</option>
                                        @endforeach

                                </select>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="sel1">Select Departement *</label>
                                <select name="department" id="depart" class="form-control select2">

                                </select>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="sel1">Select Courses *</label>
                                <select class="select2 select2-multiple" name='courses[]' multiple="multiple" required>
                                      <optgroup label="courses">
                                      <option value="AK">IT</option>
                                      <option value="HI">CO2</option>
                                      </optgroup>
                                </select>
                            </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-info waves-effect waves-light">Save </button>
            </div>
            </form>

        </div>
    </div>
</div>
