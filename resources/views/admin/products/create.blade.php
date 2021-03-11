@extends('admin.layout')
    @section('content')
        <div class="container-fluid">
                <h1 class="h3 mb-2 text-gray-800"></h1>
                <p class="mb-4"></p>
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Dodaj proizvod</h6>
                  </div>
                  <div class="card-body">
                      <form action="{{ Route('productstore')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <label class="profileLabels" for="name">Naziv:</label>
                            <input class="profileInputs" name="name" type="text" required><br>

                            <label class="profileLabels" for="vehicle">Tip vozila:</label>
                            <select class="selectStyle" name="vehicle">
                                <option value="" disabled selected hidden>Odaberi tip</option>
                                <option value="automobil">Automobil</option>
                                <option value="kamion">Kamion</option>
                                <option value="motor">Motor</option>
                                <option value="autobus">Autobus</option>
                                <option value="traktor">Traktor</option>
                            </select><br>

                            <label class="profileLabels" for="season">Sezona:</label>
                            <select class="selectStyle" name="season">
                                <option value="" disabled selected hidden>Odaberi sezonu</option>
                                <option value="leto">Leto</option>
                                <option value="zima">Zima</option>
                                <option value="all-season">All-season</option>
                            </select><br>

                            <label class="profileLabels" for="on_sale">Na akciji:</label>
                            <input name="on_sale" type="checkbox" value="1" style="height: 18px; width: 18px;"><br>

                            <label class="profileLabels" for="price">Cena:</label>
                            <input class="profileInputs" name="price" type="number"><br>

                            <label class="profileLabels" for="width">Širina:</label>
                            <input class="profileInputs" name="width" type="number"><br>

                            <label class="profileLabels" for="height">Visina:</label>
                            <input class="profileInputs" name="height" type="number"><br>

                            <label class="profileLabels" for="radius">Prečnik:</label>
                            <input class="profileInputs" name="radius" type="number"><br>

                            <label class="profileLabels" for="speed_index">Index brzine:</label>
                            <select class="selectStyle" name="speed_index">
                                <option value="" disabled selected hidden>Odaberi index brzine</option>
                                <option value="A1 (5km/h)">A1	(5km/h)</option>
                                <option value="A2 (10km/h)">A2	(10km/h)</option>
                                <option value="A3 (15km/h)">A3	(15km/h)</option>
                                <option value="A4 (20km/h)">A4	(20km/h)</option>
                                <option value="A5 (25km/h)">A5	(25km/h)</option>
                                <option value="A6 (30km/h)">A6 (30km/h)</option>
                                <option value="A8 (40km/h)">A8 (40km/h)</option>
                                <option value="B (50km/h)">B (50km/h)</option>
                                <option value="C (60km/h)">C (60km/h)</option>
                                <option value="D (65km/h)">D (65km/h)</option>
                                <option value="E (70km/h)">E (70km/h)</option>
                                <option value="F (80km/h)">F (80km/h)</option>
                                <option value="G (90km/h)">G (90km/h)</option>
                                <option value="J (100km/h)">J (100km/h)</option>
                                <option value="K (110km/h)">K (110km/h)</option>
                                <option value="L (120km/h)">L (120km/h)</option>
                                <option value="M (130km/h)">M (130km/h)</option>
                                <option value="N (140km/h)">N (140km/h)</option>
                                <option value="P (150km/h)">P (150km/h)</option>
                                <option value="Q (160km/h)">Q (160km/h)</option>
                                <option value="R (170km/h)">R (170km/h)</option>
                                <option value="S (180km/h)">S (180km/h)</option>
                                <option value="T (190km/h)">T (190km/h)</option>
                                <option value="U (200km/h)">U (200km/h)</option>
                                <option value="H (210km/h)">H (210km/h)</option>
                                <option value="V (240km/h)">V (240km/h)</option>
                                <option value="W (270km/h)">W (270km/h)</option>
                                <option value="Y (300km/h)">Y (300km/h)</option>
                            </select><br>

                            <label class="profileLabels" for="weight">Težina:</label>
                            <input class="profileInputs" name="weight" type="text"><br>

                            <label class="profileLabels" for="load">Opterećenje:</label>
                            <input class="profileInputs" name="load" type="text"><br>

                            <label class="profileLabels" for="manufacturer">Proizvođač:</label>
                            <input class="profileInputs" name="manufacturer" type="text"><br>

                            <label class="profileLabels" for="design">Dezen:</label>
                            <input class="profileInputs" name="design" type="text"><br>

                            <label class="profileLabels" for="special_label">Specijalna oznaka:</label>
                            <input class="profileInputs" name="special_label" type="text"><br>

                            <label class="profileLabels" for="ean">EAN:</label>
                            <input class="profileInputs" name="ean" type="text"><br>

                            <label class="profileLabels" for="country">Zemlja porekla:</label>
                            <input class="profileInputs" name="country" type="text"><br>

                            <label class="profileLabels" for="image_src">Dodaj sliku proizvoda:</label>
                            <input class="profileLabels" type="file" name="image_src" accept="image/png, image/jpeg, image/jpg">

                            <br>
                            <br>
                            <button class="btn btn-success" type="submit">Dodaj proizvod</button>
                      </form>
                  </div>
                </div>      
          </div>
@endsection