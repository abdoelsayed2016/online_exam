<a class="btn btn-success btn-rounded w-md waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Add Student</a>
<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Add Student</h4>
            </div>
            <form action="{{route('students.store')}}" method="post" data-parsley-validate novalidate>

            <div class="modal-body">
                <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="userName"> Name*</label>
                            <input type="text" name="name" parsley-trigger="change" required placeholder="Enter  name" class="form-control" id="userName">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="emailAddress">Email address*</label>
                            <input type="email" name="email" parsley-trigger="change" required placeholder="Enter email" class="form-control" id="emailAddress">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="pass1">Password*</label>
                            <input id="pass1" name="password" type="password" placeholder="Password" required class="form-control">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="sel1" class="form-label">Select Courses *</label>
                            <select class=" form-control select2 select2-multiple" multiple="multiple" required>
                                <optgroup label="Courses">
                                    <option value="AK">it</option>
                                    <option value="HI">so</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="sel1">Select Colleges *</label>
                            <select  name="faculty" class="form-control select2" onchange="department_ajax(this.value)">
                                <option value="">Select Faculty</option>
                                @foreach($faculites as $facu)
                                <option value="{{$facu->id}}"> {{$facu->FACULTY_NAME}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="sel1">Select Departement *</label>
                            <select name="department" class="form-control select2" id="depart">

                            </select>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="sel1">Select Term *</label>
                            <select class="form-control select2">
                                <option value="1"> First</option>
                                <option value="2">Second</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="sel1">Select Year *</label>
                            <select class="form-control select2">
                                <option value="AK"> 2018 -2019</option>
                                <option value="HI">2017-2018</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-6 ">
                            <label>Code</label>
                            <input type="text" placeholder="" data-mask="(999) 999-9999" class="form-control" data-parsley-id="10">
                            <span class="font-13 text-muted">(999) 999-9999</span>
                        </div>
                </div>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info waves-effect waves-light">Save </button>
                </div>
            </form>


        </div>
    </div>
</div>
