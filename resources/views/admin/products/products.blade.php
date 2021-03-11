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
                <a href="{{ Route('productnew') }}" class="btn btn-success float-right">Add New</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Naziv</th>
                            <th>Tip vozila</th>
                            <th>Sezona</th>
                            <th>Na rasprodaji</th>
                            <th>Cena</i></th>
                            <th>Sirina</i></th>
                            <th>Visina</th>
                            <th>Precnik</th>
                            <th>Index brzine</th>
                            <th>Tezina</th>
                            <th>Opterecenje</th>
                            <th>Proizvodjac</th>
                            <th>Dezen</th>
                            <th>Spec. Oznaka</th>
                            <th>EAN</th>
                            <th>Zemlja porekla</th>
                            <th>Slika</th>
                            <th>Izmene</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Naziv</th>
                            <th>Tip vozila</th>
                            <th>Sezona</th>
                            <th>Na rasprodaji</th>
                            <th>Cena</i></th>
                            <th>Sirina</i></th>
                            <th>Visina</th>
                            <th>Precnik</th>
                            <th>Index brzine</th>
                            <th>Tezina</th>
                            <th>Opterecenje</th>
                            <th>Proizvodjac</th>
                            <th>Dezen</th>
                            <th>Spec. Oznaka</th>
                            <th>EAN</th>
                            <th>Zemlja porekla</th>
                            <th>Slika</th>
                            <th>Izmene</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    @foreach ($products as $post)
                        <tr>
                        <td> 
                            {{ $post->name }} 
                        </td>
                        <td> 
                            {{ $post->vehicle }} 
                        </td>
                        <td> 
                            {{ $post->season }} 
                        </td>
                        <?php if($post->on_sale == 1) {
                            echo "<td style='background-color: green; font-size: 50px;'>&#10003;</td>";
                        } else {
                            echo "<td style='background-color: red'> </td>";
                        }?>
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
                            <img src="{{ asset('images/products/'.$post->image_src) }}" alt="" height="70px" width="70px"> 
                        </td>
                        <td>
                            <a href="{{ route('productview', $post->id ) }}" class="view" title="Pregledaj" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                            <a href="{{ route('productedit', $post->id ) }}" class="edit" title="Izmeni" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="{{ route('productdelete', $post->id ) }}" class="delete" title="Obriši" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
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