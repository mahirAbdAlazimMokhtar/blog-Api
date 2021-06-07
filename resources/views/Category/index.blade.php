@extends('layout')
@section('dashboard-content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Category Name</th>
                            <th>Actions</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Category Name</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    @foreach ($categories as $category)
                     <tr>
                        <td> {{ $category->name }}</td>
                        <td>

                            <a href="{{URL::to('edit-category')}}/{{$category->id}}" class="btn btn-outline-primary btn-sm">Edit</a>
                            <a href="" class="btn btn-outline-danger btn-sm">Delete</a>


                        </td>
                    </tr>
                        <br>
                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>

    </div>
    <!-- /.container-fluid -->


@stop
