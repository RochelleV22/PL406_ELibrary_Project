@extends('admin.layouts.master', ['title' => 'Authority information'])

@section('content')

    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
            <!-- Form Validation Block -->
            <div class="block">
                <!-- Form Validation Title -->
                <div class="block-title">
                    <h2>Authority information{{ $role->name}}</h2>
                </div>
                <!-- END Form Validation Title -->

                <!-- Form Validation Form -->
                <form id="form-validation" class="form-horizontal form-bordered">

                    <div class="form-group">
                        <label class="col-md-4 col-md-offset-1">Name</label>
                        <div class="col-md-6">
                            <p class="form-control-static">{{ $role->name }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 col-md-offset-1">Access :</label>
                        <div class="col-md-6">
                            <div class="block-section">
                                @foreach($role->permissions->all() as $permission)
                                    <span class="btn btn-effect-ripple btn-default" data-toggle="tooltip" title="" style="overflow: hidden; position: relative;" data-original-title="{{ $permission->name }}">{{ $permission->label }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="form-group form-actions">
                        <div class="col-md-12 col-md-offset-1">
                            <a href="{{ route('roles.edit', ['role' => $role]) }}"><button type="button" class="btn btn-effect-ripple btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-edit"></i>Edit</button></a>
                            <a href="#modal-fade" data-toggle="modal" title="حذف"><button type="button" class="btn btn-effect-ripple btn-danger" style="overflow: hidden; position: relative;"><i class="fa fa-trash"></i>Delete status</button></a>
                        </div>
                    </div>
                </form>

                <!-- END Form Validation Form -->

                <form id="delete-roles-form" action="{{ route('roles.destroy', ['role' => $role]) }}" method="post">
                    {!! csrf_field() !!}
                    {{ method_field('DELETE') }}
                </form>

                <div id="modal-fade" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h3 class="modal-title"><strong>Warning</strong></h3>
                            </div>
                            <div class="modal-body">
                                Deleting the status will also delete all related data, do you want to delete the status?
                            </div>
                            <div class="modal-footer">
                                <button onclick="document.getElementById('delete-roles-form').submit();" type="button" class="btn btn-effect-ripple btn-danger" style="overflow: hidden; position: relative;">Delete anyway</button></a>
                                <button type="button" class="btn btn-effect-ripple btn-success" data-dismiss="modal" style="overflow: hidden; position: relative;">No</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- END Form Validation Block -->
        </div>
    </div>

@endsection