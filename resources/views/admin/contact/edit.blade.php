@extends('admin.master')

@section('title')
    Edit Contact
@endsection

@section('body')
    <div class="row py-3">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="float-start">Edit Contact</h3>
                    <a href="{{route('contacts.index')}}" class="btn btn-info float-end">Manage</a>
                </div>
                <div class="card-body">
                    <h3 class="text-center text-info">{{Session::has('message') ? Session::get('message') : ''}}</h3>
                    <form method="POST" action="{{ route('contacts.update', $contact->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row mt-3">
                            <label for="" class="col-md-4">First Name</label>
                            <div class="col-md-8">
                                <input type="text" name="first_name" value="{{ $contact->first_name }}" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4">Last Name</label>
                            <div class="col-md-8">
                                <input type="text" name="last_name" value="{{ $contact->last_name }}" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4">Phone</label>
                            <div class="col-md-8">
                                <input type="number" name="phone" value="{{ $contact->phone }}" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4">Email</label>
                            <div class="col-md-8">
                                <input type="email" name="email" value="{{ $contact->email }}" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4">Message</label>
                            <div class="col-md-8">
                                <textarea class="form-control" name="message" id="" cols="10" rows="5">
                                    {!! $contact->message !!}
                                </textarea>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit"  class="btn btn-outline-info" value="Update Contact">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
