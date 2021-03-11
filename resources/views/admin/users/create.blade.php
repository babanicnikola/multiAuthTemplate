@extends('admin.layout')
    @section('content')
        <div class="container-fluid">
                <h1 class="h3 mb-2 text-gray-800"></h1>
                <p class="mb-4"></p>
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Dodaj novog korisnika</h6>
                  </div>
                  <div class="card-body">
                      <form action="{{ Route('userstore')}}" method="POST">
                            @csrf
                            @method('PUT')
                            <label class="profileLabels" for="name">Ime i prezime:</label>
                            <input class="profileInputs" name="name" type="text" required><br>
                            <label class="profileLabels" for="email">Email:</label>
                            <input class="profileInputs" name="email" type="text" required><br>
                            <label class="profileLabels" for="password">Lozinka:</label>
                            <input class="profileInputs" name="password" type="password" required><br>
                            <label class="profileLabels" for="role">Uloga:</label>
                            <select class="selectStyle" required name="role_id">
                                <option value="" disabled selected hidden>Odaberi ulogu</option>
                                <?php $off = DB::select('select * from roles'); ?>
                                @foreach ($off as $o)
                                    <option value={{$o->id}}>{{$o->display_name}}</option>  
                                @endforeach  
                            </select><br>
                            <label class="profileLabels" for="address">Ulica i broj:</label>
                            <input class="profileInputs" name="address" type="text"><br>
                            <label class="profileLabels" for="city">Grad:</label>
                            <input class="profileInputs" name="city" type="text"><br>
                            <label class="profileLabels" for="post_code">Postanski broj:</label>
                            <input class="profileInputs" name="post_code" type="number"><br>
                            <label class="profileLabels" for="phone">Telefon:</label>
                            <input class="profileInputs" name="phone" type="text"><br>
                            <br>
                            <button class="btn btn-success" type="submit">Dodaj</button>
                      </form>
                  </div>
                </div>      
        </div>
@endsection