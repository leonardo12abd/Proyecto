@extends('layouts.main', ['activePage' => 'primernivel', 'titlePage' => __('Example||Select Dynamic')])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-info">
                                    <h4 class="card-tittle">Acreditación</h4>
                                </div>
                                <div class="card-body">
                <div class="form-group">
                    <label for="country">Clues:</label>
                    <select id="country" name="country" class="form-control">
                        <option value="" selected disabled>------------</option>
                        @foreach ($countries as $key => $country)
                            <option value="{{ $key }}"> {{ $country }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="state">Localidad:</label>
                    <select name="state" id="state" class="form-control"></select>
                </div>
                <div class="form-group">
                    <label for="city">Nombre de la Unidad:</label>
                    <select name="city" id="city" class="form-control"></select>
                </div>
            </div>
        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<script>
    // when country dropdown changes
    $('#country').change(function() {

        var countryID = $(this).val();

        if (countryID) {

            $.ajax({
                type: "GET",
                url: "{{ url('getState') }}?country_id=" + countryID,
                success: function(res) {

                    if (res) {

                        $("#state").empty();
                        $("#state").append('<option>Select State</option>');
                        $.each(res, function(key, value) {
                            $("#state").append('<option value="' + key + '">' + value +
                                '</option>');
                        });

                    } else {

                        $("#state").empty();
                    }
                }
            });
        } else {

            $("#state").empty();
            $("#city").empty();
        }
    });

    // when state dropdown changes
    $('#state').on('change', function() {

        var stateID = $(this).val();

        if (stateID) {

            $.ajax({
                type: "GET",
                url: "{{ url('getCity') }}?state_id=" + stateID,
                success: function(res) {

                    if (res) {
                        $("#city").empty();
                        $("#city").append('<option>Select City</option>');
                        $.each(res, function(key, value) {
                            $("#city").append('<option value="' + key + '">' + value +
                                '</option>');
                        });

                    } else {

                        $("#city").empty();
                    }
                }
            });
        } else {

            $("#city").empty();
        }
    });

</script>
@endsection
