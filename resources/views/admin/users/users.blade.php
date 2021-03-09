@extends('admin.layout') 
    @section('content')
    <div class="container-fluid">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Users Details</h2></div>
                    </div>
                </div>
                <a href="{{ route('usernew') }}" class="btn btn-success float-right">Add New</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Post Code</i></th>
                            <th>Phone</i></th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>User ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Post Code</i></th>
                            <th>Phone</i></th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($users as $post)
                        <tr>
                        <td>
                            {{ $post->id }}
                        </td>
                        <td> 
                            {{ $post->name }} 
                        </td>
                        <td> 
                            {{ $post->email }} 
                        </td>
                        <td> 
                            <?php $off = DB::select('select role_id from role_user where user_id = '.$post->id); 
                                if ($off[0]->role_id == 1) {
                                    echo "Administrator";
                                } else {
                                    echo "User";
                                }
                            ?>
                            
                        </td>
                        <td> 
                            {{ $post->address }} 
                        </td>
                        <td> 
                            {{ $post->city }} 
                        </td>
                        <td> 
                            {{ $post->post_code }} 
                        </td>
                        <td> 
                            {{ $post->phone }} 
                        </td>
                        <td>
                            <a href="{{ route('userview', $post->id ) }}" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                            <a href="{{ route('useredit', $post->id ) }}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="{{ route('userdelete', $post->id ) }}" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                        </tr>  
                        @endforeach               
                    </tbody>
                </table>
                
            </div>
        </div>        
    </div>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    @endsection