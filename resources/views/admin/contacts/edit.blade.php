@extends('layouts.app')
@section('title', 'Hamid Sabirin | Data Contacts')
    @section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Form Edit</strong> Contact Us
                            </div>
                            <div class="card-body card-block">
                                <form action="{{ route('contacts.update',$contact->id) }}" method="post" class="">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Nama</label>
                                        <input type="text" name="nama" class="form-control" value="{{ $contact->nama }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Email</label>
                                        <input type="email" name="nf-email" class="form-control" value="{{ $contact->email }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Password</label>
                                        <textarea name="pesan" class="form-control" value="{{ $contact->pesan }}"></textarea>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Ubah
                                        </button>
                                </form>
                            </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
                
    
@endsection