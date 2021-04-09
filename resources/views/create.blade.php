@extends("theme")
@section("content")
<div class="container">
    <div class="row">
        <div class="col col-12 col-sm-3 col-md-3 col-lg-3"></div>
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
        <form action="/patientread" method="post">
        {{csrf_field()}}
            <table class="table">
                <tr>
                    <td>Patient Code</td>
                    <td> <input name='code' type="text" class="form-control"> </td>
                </tr>
                <tr>
                    <td>PatientName</td>
                    <td><input name='name' type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input name='address' type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td><input name='phone' type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Symptoms</td>
                    <td><input name='symptoms' type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Diagnosis</td>
                    <td><input name='diagnosis' type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="btn btn-success">Submit</button></td>
                </tr>
            </table>
            </form>
        
        
        </div>
        <div class="col col-12 col-sm-3 col-md-3 col-lg-3"></div>
    
    </div>

</div>
    
@endsection