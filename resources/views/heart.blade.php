@extends('layouts.app')

@section('content')
    <h1>Enter the following details</h1>
    <form action="http://localhost:5000/predict" method="GET">
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" class="form-control" id="age" name="age" required>
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select class="form-control" id="gender" name="gender" required>
                <option disabled selected>Select Gender</option>
                <option value="1">Male</option>
                <option value="0">Female</option>
            </select>
        </div>
        <div class="form-group">
            <label for="chest_pain">Chest Pain Level</label>
            <select class="form-control" id="chest_pain" name="chest_pain" required>
                <option disabled selected>Select Chest Pain Level</option>
                <option value="1">Typical Angina</option>
                <option value="2">Atypical Angina</option>
                <option value="3">Non-Anginal Pain</option>
                <option value="4">Asymptomatic</option>
            </select>
        </div>
        <div class="form-group">
            <label for="bp">Blood Pressure</label>
            <input type="number" class="form-control" name="bp" id="bp" required>
        </div>
        <div class="form-group">
            <label for="chol">Cholestrol Level</label>
            <input type="number" class="form-control" id="chol" name="chol" required>
        </div>
        <div class="form-group">
            <label for="mhr">Max Heart Rate</label>
            <input type="number" class="form-control" id="mhr" name="mhr" required>
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
    </form>
@endsection