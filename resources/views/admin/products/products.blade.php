@extends('admin.layout') 
    @section('content')
    <div class="container-fluid">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Products Details</h2></div>
                    </div>
                </div>
                <a href="" class="btn btn-success float-right">Add New</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Vehicle</th>
                            <th>Season</th>
                            <th>On Sale</th>
                            <th>Price</i></th>
                            <th>Width</i></th>
                            <th>Height</th>
                            <th>Radius</th>
                            <th>Speed Index</th>
                            <th>Weight</th>
                            <th>Load</th>
                            <th>Manufacturer</th>
                            <th>Design</th>
                            <th>Spec. Label</th>
                            <th>EAN</th>
                            <th>Country</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Vehicle</th>
                            <th>Season</th>
                            <th>On Sale</th>
                            <th>Price</i></th>
                            <th>Width</i></th>
                            <th>Height</th>
                            <th>Radius</th>
                            <th>Speed Index</th>
                            <th>Weight</th>
                            <th>Load</th>
                            <th>Manufacturer</th>
                            <th>Design</th>
                            <th>Spec. Label</th>
                            <th>EAN</th>
                            <th>Country</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    @foreach ($products as $post)
                        <tr>
                        <td> 
                            {{ $post->name }} 
                        </td>
                        <td> 
                            {{ $post->slug }} 
                        </td>
                        <td> 
                            {{ $post->vehicle }} 
                        </td>
                        <td> 
                            {{ $post->season }} 
                        </td>
                        <td> 
                            {{ $post->on_sale }} 
                        </td>
                        <td> 
                            {{ $post->price }} 
                        </td>
                        <td> 
                            {{ $post->width }} 
                        </td>
                        <td> 
                            {{ $post->height }} 
                        </td>
                        <td> 
                            {{ $post->radius }} 
                        </td>
                        <td> 
                            {{ $post->speed_index }} 
                        </td>
                        <td> 
                            {{ $post->weight }} 
                        </td>
                        <td> 
                            {{ $post->load }} 
                        </td>
                        <td> 
                            {{ $post->manufacturer }} 
                        </td>
                        <td> 
                            {{ $post->design }} 
                        </td>
                        <td> 
                            {{ $post->special_label }} 
                        </td>
                        <td> 
                            {{ $post->ean }} 
                        </td>
                        <td> 
                            {{ $post->country }} 
                        </td>
                        <td> 
                            {{ $post->image_src }} 
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