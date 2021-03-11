@extends('admin.layout')
    @section('content')
    <!-- Begin Page Content -->
        <div class="container-fluid">
    <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800"></h1>
                <p class="mb-4"></p>
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add new Product</h6>
                  </div>
                  <div class="card-body">
                      <form action="{{ Route('productstore')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <label class="profileLabels" for="name">Name:</label>
                            <input class="profileInputs" name="name" type="text" required><br>

                            <label class="profileLabels" for="vehicle">Vehicle:</label>
                            <select class="selectStyle" name="vehicle">
                                <option value="">Choose Vehicle</option>
                                <option value="car">Car</option>
                            </select><br>

                            <label class="profileLabels" for="season">Season:</label>
                            <select class="selectStyle" name="season">
                                <option value="">Choose season</option>
                                <option value="winter">Winter</option>
                                <option value="summer">Summer</option>
                            </select><br>

                            <label class="profileLabels" for="on_sale">On Sale:</label>
                            <input name="on_sale" type="checkbox" value="1" style="height: 18px; width: 18px;"><br>

                            <label class="profileLabels" for="price">Price:</label>
                            <input class="profileInputs" name="price" type="number"><br>

                            <label class="profileLabels" for="width">Width:</label>
                            <input class="profileInputs" name="width" type="number"><br>

                            <label class="profileLabels" for="height">Height:</label>
                            <input class="profileInputs" name="height" type="number"><br>

                            <label class="profileLabels" for="radius">Radius:</label>
                            <input class="profileInputs" name="radius" type="number"><br>

                            <label class="profileLabels" for="speed_index">Speed index:</label>
                            <select class="selectStyle" name="speed_index">
                                <option value="">Choose Speed Index</option>
                                <option value="A1">A1	(5km/h)</option>
                                <option value="A2">A2	(10km/h)</option>
                                <option value="A3">A3	(15km/h)</option>
                                <option value="A4">A4	(20km/h)</option>
                                <option value="A5">A5	(25km/h)</option>
                                <option value="A6">A6 (30km/h)</option>
                                <option value="A8">A8 (40km/h)</option>
                                <option value="B">B (50km/h)</option>
                                <option value="C">C (60km/h)</option>
                                <option value="D">D (65km/h)</option>
                                <option value="E">E (70km/h)</option>
                                <option value="F">F (80km/h)</option>
                                <option value="G">G (90km/h)</option>
                                <option value="J">J (100km/h)</option>
                                <option value="K">K (110km/h)</option>
                                <option value="L">L (120km/h)</option>
                                <option value="M">M (130km/h)</option>
                                <option value="N">N (140km/h)</option>
                                <option value="P">P (150km/h)</option>
                                <option value="Q">Q (160km/h)</option>
                                <option value="R">R (170km/h)</option>
                                <option value="S">S (180km/h)</option>
                                <option value="T">T (190km/h)</option>
                                <option value="U">U (200km/h)</option>
                                <option value="H">H (210km/h)</option>
                                <option value="V">V (240km/h)</option>
                                <option value="W">W (270km/h)</option>
                                <option value="Y">Y (300km/h)</option>
                            </select><br>

                            <label class="profileLabels" for="weight">Weight:</label>
                            <input class="profileInputs" name="weight" type="text"><br>

                            <label class="profileLabels" for="load">Load:</label>
                            <input class="profileInputs" name="load" type="text"><br>

                            <label class="profileLabels" for="manufacturer">Manufacturer:</label>
                            <input class="profileInputs" name="manufacturer" type="text"><br>

                            <label class="profileLabels" for="design">Design:</label>
                            <input class="profileInputs" name="design" type="text"><br>

                            <label class="profileLabels" for="special_label">Special Label:</label>
                            <input class="profileInputs" name="special_label" type="text"><br>

                            <label class="profileLabels" for="ean">EAN:</label>
                            <input class="profileInputs" name="ean" type="text"><br>

                            <label class="profileLabels" for="country">Country:</label>
                            <input class="profileInputs" name="country" type="text"><br>

                            <label class="profileLabels" for="image_src">Choose a product picture:</label>
                            <input class="profileLabels" type="file" name="image_src" accept="image/png, image/jpeg, image/jpg">

                            <br>
                            <button class="btn btn-success" type="submit">Add</button>
                      </form>
                  </div>
                </div>      
          </div>
          <!-- /.container-fluid --> 
@endsection