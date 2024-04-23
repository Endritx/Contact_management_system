@extends('layouts.master')

@section('content')
    <style>
   
        h1 {
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        strong {
            font-weight: bold;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        a:hover {
            background-color: #000000;
        }
        
    </style>

    <h1>Contact Details</h1>
    <p><strong>Name:</strong> {{ $contact->name }}</p>
    <p><strong>Surname:</strong> {{ $contact->surname }}</p>
    <p><strong>Phone:</strong> {{ $contact->phone }}</p>
    <a href="{{ route('contacts.index') }}">Back to Contacts</a>
@endsection

<style>
        body {
         background-color: #f5f5f5;
         font-family: Arial, sans-serif;
          line-height: 1.6;
          color: #333;
          text-align: center;
          padding: 40px 0;
        }
    
        img {
          max-width: 200px;
          height: auto;
        }
    
        h1 {
          font-size: 2.5em;
          margin-bottom: 20px;
        }
    

        p {
          font-size: 1.2em;
          margin-bottom: 40px;
        }
      </style>
   
   


   