@extends('layouts.master')

@section('content')
<style>
   
    h1 {
        margin-bottom: 20px;
        text-align: center;
    }
    
    form {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column; 
        align-items: center; 
    }
    
    label {
        display: block;
        margin-bottom: 5px;
        color: #333;
    }
    
    input[type="text"],
    input[type="surname"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    
    button[type="submit"],
    a.cancel-button {
        position: relative;
        align-items: center; 
        display: inline-block;
        padding: 12px 24px;
        background-color: #691717;
        color: #fff;
        text-decoration: none;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        margin-top: 10px; 
    }
    
    button[type="submit"]:hover,
    a.cancel-button:hover {
        background-color: #000000;
    }
    .cancel {
        display: block;
        margin-top: 10px;
        text-align: center;
        background-color: #fff;
        border: 2px solid #691717;
        color: #691717;
        border-radius: 4px;
        padding: 10px 0px;
        cursor: pointer;
        transition: background-color 0.3s ease, color 0.3s ease;
    }
    
    .cancel:hover {
        background-color: #691717;
        color: #fff;
    }
</style>    
<div>
    <h1>Edit Contact</h1>
    <form method="POST" action="{{ route('contacts.update', $contact->id) }}">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $contact->name }}">
        <label for="surname">Surname:</label>
        <input type="surname" id="surname" name="surname" value="{{ $contact->surname }}">
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="{{ $contact->phone }}">
        <button type="submit">Update Contact</button>
        <a href="{{ route('contacts.index') }}" class="cancel-button">Cancel</a>
    </form>
    @include('layouts.footer')

    @endsection
