@extends('admin.layout') 
    @section('content')
    <div class="container-fluid">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Roles Details</h2></div>
                    </div>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Naziv</th>
                            <th>Naziv na prikazu</th>
                            <th>Opis</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Naziv</th>
                            <th>Naziv na prikazu</th>
                            <th>Opis</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($roles as $post)
                        <tr>
                        <td>
                            {{ $post->id }}
                        </td>
                        <td> 
                            {{ $post->name }} 
                        </td>
                        <td> 
                            {{ $post->display_name }} 
                        </td>
                        <td> 
                            {{ $post->description }} 
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