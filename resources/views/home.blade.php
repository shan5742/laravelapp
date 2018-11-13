@extends('layouts.app')

@section('content')
  <h1>Home</h1>
  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa optio facere dicta? Quisquam dolores delectus possimus eum exercitationem reiciendis! Eum, at? Obcaecati quia earum asperiores reprehenderit cum ipsam reiciendis modi.</p>
@endsection

@section('sidebar')
  @parent
  <p>This is appended to the sidebar</p>
@endsection