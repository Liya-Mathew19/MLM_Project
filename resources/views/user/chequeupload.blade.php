@extends('layouts.user')
@section('content')
    <!-- partial -->
            <div class='container'>
				<div class="row mt-4">
					<div class="col-lg-12 grid-margin stretch-card">
        				<div class="card card-danger card-outline card-outline-danger">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Upload KYC details</h4><br>
                                        <form class="forms-sample" action="{{ route('storekyc') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                            <input type="hidden" value="{{ Auth::user()->id }}" class="form-control" id="exampleInputName1" name="id" placeholder="Name">
                                            
                                            <div class="form-group">
                                                <label for="exampleInputName1">User Name</label>
                                                <input type="text" value="{{ Auth::user()->name }}" readonly="readonly" class="form-control" id="exampleInputName1" name="name" placeholder="Name">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlSelect3">Type</label>
                                                <input type="text" value="Cancelled Cheque / Passbook FrontPage" readonly="readonly" class="form-control" id="exampleInputName1" name="type" placeholder="Name">
                                            </div>
                  
                                            <div class="form-group">
                                                <label for="exampleInputPassword4">Cheque Number</label>
                                                <input type="text" class="form-control @error('identification_number') is-invalid @enderror" id="identification_number" name=identification_number   value="{{ old('identification_number') }}" autocomplete="identification_number" autofocus id="identification_number" required placeholder="Cheque Number">
                                                @error('identification_number')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                                            </div>                  
            
                                            <div class="form-group">
                                                <label>File upload</label>
                                                <div class="input-group col-xs-12">
                                                    <input type="file" class="form-control file-upload-info" name='path[]' class="form-control file-upload-info @error('path') is-invalid @enderror"  value="{{ old('path') }}" autocomplete="path" autofocus required>
                                                        <span class="input-group-append">
                                                        </span>
                                                </div>
                                                <p><font color="red"><strong>Supported file formats:</strong> .jpg,.jpeg,.pdf,.png</font></p>
                                                @error('path')
                        <div class="alert alert-danger" role="alert">
                          {{ $message }}
                        </div>
                      @enderror
                                            </div>
                   
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    
                  </form>
                </div>
              </div>
            </div>
							</div>
						</div>
					</div>
          </div>
		
@endsection			