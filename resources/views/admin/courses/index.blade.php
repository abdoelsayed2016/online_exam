@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12 search-box">
            <div class="panel">
                <div class="form-group">
                    <fieldset class="the-fieldset">
                        <legend class="the-legend"> Search</legend>
                        <div class="form-group col-md-3">
                            <label >    Courses Name</label>
                            <div>
                                <input type="text" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label > College Name</label>
                            <div>
                                <input type="text" class="form-control">
                            </div>
                        </div>


                        <div class="col-md-3  search-bin">
                            <a class="btn btn-primary btn-rounded w-md waves-effect waves-light " > Search</a>
                        </div>

                    </fieldset>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="panel">
                <div class="panel-body">

                    <div class="col-lg-12">

                        <a class="btn btn-success btn-rounded w-md waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Add    Courses </a>
                        <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title">Add    Courses </h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">


                                            <form action="#" data-parsley-validate novalidate>
                                                <div class=" col-md-6">

                                                    <div class="form-group col-md-12">
                                                        <label for="userName">   Courses  Name*</label>
                                                        <input type="text" name="nick" parsley-trigger="change" required
                                                               placeholder="Enter user name" class="form-control" id="userName">
                                                    </div>


                                                    <div class="form-group col-md-12">
                                                        <label for="sel1">Select  Colleges *</label>
                                                        <select class="select2 select2-multiple" multiple="multiple" required>
                                                            <optgroup label="Colleges">
                                                                <option value="AK">FCI</option>
                                                                <option value="HI">FCI</option>
                                                            </optgroup>


                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-12">
                                                        <div class="input_fields_wrap">
                                                            <a class="add_field_button btn btn-primary btn-rounded w-md waves-effect waves-light ">Add IIOS</a>
                                                            <div><input type="text" name="mytext[]" class="form-control"></div>
                                                        </div>

                                                    </div>




                                                </div>
                                                <div class=" col-md-6">

                                                    <div class="form-group col-md-12 ">
                                                        <label>Code</label>
                                                        <input type="text" placeholder="" data-mask="(999) 999-9999" class="form-control">
                                                        <span class="font-13 text-muted">(999) 999-9999</span>
                                                    </div>

                                                    <div class="col-md-12">


                                                        <h4 class="header-title m-t-0 m-b-30">Add Photo</h4>

                                                        <input type="file" class="dropify" data-default-file="assets/images/gallery/1.jpg" />

                                                    </div><!-- end col -->




                                                </div>




                                            </form>

                                        </div>



                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-info waves-effect waves-light">Save </button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.modal -->

                    </div><!-- end col -->



                    <div class="editable-responsive ">
                        <table class="table table-striped" id="datatable-editable">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Colleges</th>
                                <th>Code</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="gradeX">
                                <td> it</td>
                                <td>
                                    <label class="blue-label">FCI</label>
                                    <label class="purple-label">Science</label>

                                </td>
                                <td>
                                    141
                                </td>
                                <td class="actions">

                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                    <a  class="on-default btn-info"  > <i class="fa fa-keyboard-o"></i> </a>
                                </td>
                            </tr>
                            <tr class="gradeC">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeC">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeX">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeC">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeC">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeX">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeX">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeX">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeC">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="gradeC">
                                <td>Mohamed Ahmed</td>
                                <td> FCI
                                </td>
                                <td>IT</td>
                                <td class="actions">
                                    <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end: panel body -->

            </div> <!-- end panel -->
        </div> <!-- end col-->
    </div>
    <div id="dialog" class="modal-block mfp-hide">
        <section class="panel panel-info panel-color">
            <header class="panel-heading">
                <h2 class="panel-title">Are you sure?</h2>
            </header>
            <div class="panel-body">
                <div class="modal-wrapper">
                    <div class="modal-text">
                        <p>Are you sure that you want to delete this row?</p>
                    </div>
                </div>

                <div class="row m-t-20">
                    <div class="col-md-12 text-right">
                        <button id="dialogConfirm" class="btn btn-primary waves-effect waves-light">Confirm</button>
                        <button id="dialogCancel" class="btn btn-default waves-effect">Cancel</button>
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection