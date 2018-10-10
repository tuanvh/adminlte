@extends('admin.layouts.master')
@section('content')
    <section class="content-header">
        <h1>
            Users
            <small>List</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li class="active">users</li>
        </ol>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">List</h3>
                <!-- Search -->
                <div class="box-tools pull-right">
                    <form class="form" role="form" method="GET" action="http://localhost:8001/admin/users">
                        <div class="input-group input-group-sm margin-r-5 pull-left" style="width: 200px;">
                            <input type="text" name="search" class="form-control" value="" placeholder="Search...">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        <a href="http://localhost:8001/admin/users/create" class="btn btn-sm btn-primary pull-right">
                            <i class="fa fa-plus"></i> <span>Add</span>
                        </a>
                    </form>
                </div>
                <!-- END Search -->
            </div>

            <div class="box-body no-padding">
                <div class="table-responsive list-records">
                    <table class="table table-hover table-bordered">
                        <thead>
                        <!--<th style="width: 10px;"><button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button></th>-->
                        <tr><th>#</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th style="width: 120px;">Actions</th>
                        </tr></thead>
                        <tbody>
                        <tr>
                            <!--<td><input type="checkbox" name="ids[]" value="1" class="square-blue"></td>-->
                            <td>1</td>
                            <td>
                                <a href="http://localhost:8001/admin/users/1/edit">1</a>
                            </td>
                            <td class="table-text">
                                <a href="http://localhost:8001/admin/users/1/edit">Jon Snow</a>
                            </td>
                            <td>admin@admin.com</td>
                            <td><span class="label label-info">Yes</span></td>

                            <!-- we will also add show, edit, and delete buttons -->
                            <td>
                                <div class="btn-group">
                                    <a href="http://localhost:8001/admin/users/1/edit" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm btnOpenerModalConfirmModelDelete" data-form-id="formDeleteModel_1"><i class="fa fa-trash-o"></i></a>
                                </div>
                                <!-- Delete Record Form -->
                                <form id="formDeleteModel_1" action="http://localhost:8001/admin/users/1" method="POST" style="display: none;" class="hidden form-inline">
                                    <input type="hidden" name="_token" value="9ZlLaUBQkslaQ2fjT2edYvHeN39pOGx4TE9FLflV">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <!--<td><input type="checkbox" name="ids[]" value="2" class="square-blue"></td>-->
                            <td>2</td>
                            <td>
                                <a href="http://localhost:8001/admin/users/2/edit">2</a>
                            </td>
                            <td class="table-text">
                                <a href="http://localhost:8001/admin/users/2/edit">Daenerys Targaryen</a>
                            </td>
                            <td>member@example.com</td>
                            <td><span class="label label-warning">No</span></td>

                            <!-- we will also add show, edit, and delete buttons -->
                            <td>
                                <div class="btn-group">
                                    <a href="http://localhost:8001/admin/users/2/edit" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm btnOpenerModalConfirmModelDelete" data-form-id="formDeleteModel_2"><i class="fa fa-trash-o"></i></a>
                                </div>
                                <!-- Delete Record Form -->
                                <form id="formDeleteModel_2" action="http://localhost:8001/admin/users/2" method="POST" style="display: none;" class="hidden form-inline">
                                    <input type="hidden" name="_token" value="9ZlLaUBQkslaQ2fjT2edYvHeN39pOGx4TE9FLflV">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <!--<td><input type="checkbox" name="ids[]" value="3" class="square-blue"></td>-->
                            <td>3</td>
                            <td>
                                <a href="http://localhost:8001/admin/users/3/edit">3</a>
                            </td>
                            <td class="table-text">
                                <a href="http://localhost:8001/admin/users/3/edit">tuanvh</a>
                            </td>
                            <td>vuhuytuan89@gmail.com</td>
                            <td><span class="label label-info">Yes</span></td>

                            <!-- we will also add show, edit, and delete buttons -->
                            <td>
                                <div class="btn-group">
                                    <a href="http://localhost:8001/admin/users/3/edit" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm btnOpenerModalConfirmModelDelete" data-form-id="formDeleteModel_3"><i class="fa fa-trash-o"></i></a>
                                </div>
                                <!-- Delete Record Form -->
                                <form id="formDeleteModel_3" action="http://localhost:8001/admin/users/3" method="POST" style="display: none;" class="hidden form-inline">
                                    <input type="hidden" name="_token" value="9ZlLaUBQkslaQ2fjT2edYvHeN39pOGx4TE9FLflV">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                <!-- Pagination -->
                <div class="pull-right">
                    <div class="no-margin text-center">
                    </div>
                </div>
                <!-- / End Pagination -->
            </div>
            <!-- /.box-footer -->
        </div>
        <!-- /.box -->
    </section>
@endsection
