@extends('layouts.app')

@section('content')
    <h1>HOME</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio earum fugit modi neque odit quam qui rerum
        sint ullam velit! Animi beatae blanditiis delectus dolore eos expedita libero ratione ut.</p>
@endsection

@section('sidebar')
    @parent
    <p>This content is injected</p>
@endsection
