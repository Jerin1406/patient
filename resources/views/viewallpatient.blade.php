@extends("theme")
@section("content")


<div class="container">
    <div class="row">
        <div class="col col-12 col-sm-3 col-md-3 col-lg-3"></div>
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
            <table class="table">
                <tr>
                    <th>Patient Code</th>
                    <th>Patient Name</th>
                    <th> Address</th>
                    <th>Phone Number</th>
                    <th>Symptoms</th>
                    <th>Diagnosis</th>
                </tr>
                @foreach($patients as $patient)
                <tr>
                    <td>{{$patient->code}}</td>
                    <td>{{$patient->name}}</td>
                    <td>{{$patient->address}}</td>
                    <td>{{$patient->phone}}</td>
                    <td>{{$patient->symptoms}}</td>
                    <td>{{$patient->diagnosis}}</td>

                    <td> <a class="btn btn-warning" href="/patient/{{$patient->id}}/edit">Edit</a> </td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="col col-12 col-sm-3 col-md-3 col-lg-3"></div>
    
    </div>

</div>
    
@endsection