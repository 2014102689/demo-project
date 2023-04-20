@extends('templates.default')

@section('content')
    <section class="vh-100">
        <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-9">
    
            <div class="card" style="border-radius: 15px;">
                <div class="card-body">
                    <form action="{{ route('main.tenant_store') }}" method="post" class="user">
                        {!! csrf_field() !!}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="row align-items-center pt-4 pb-3">
                            <div class="col-md-3 ps-5">
            
                            <h6 class="mb-0">Tenant name</h6>
            
                            </div>
                            <div class="col-md-9 pe-5">
            
                            <input type="text" class="form-control form-control-lg" name="id"/>
            
                            </div>
                        </div>
            
                        <hr class="mx-n3">
            
                        <div class="row align-items-center py-3">
                            <div class="col-md-3 ps-5">
            
                            <h6 class="mb-0">Email address</h6>
            
                            </div>
                            <div class="col-md-9 pe-5">
            
                            <input type="email" class="form-control form-control-lg" name="email" placeholder="example@example.com" required/>
            
                            </div>
                        </div>
                        
                        <div class="row align-items-center pt-4 pb-3">
                            <div class="col-md-3 ps-5">
            
                            <h6 class="mb-0">Password</h6>
            
                            </div>
                            <div class="col-md-9 pe-5">
            
                            <input type="password" class="form-control form-control-lg" name="password" required/>
            
                            </div>
                        </div>

                        <div class="row align-items-center pt-4 pb-3">
                            <div class="col-md-3 ps-5">
            
                            <h6 class="mb-0">Confirm Password</h6>
            
                            </div>
                            <div class="col-md-9 pe-5">
            
                            <input type="password" class="form-control form-control-lg" name="password_confirmation" required/>
            
                            </div>
                        </div>

                        <hr class="mx-n3">
            
                        <div class="px-5 py-4">
                            <button type="submit" class="btn btn-primary btn-lg">Send application</button>
                        </div>
                    </form>
                </div>
            </div>
    
            </div>
        </div>
        </div>
    </section>
@endsection

