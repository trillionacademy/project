@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registration fee</div>
                <div class="card-body">
                    <form method="POST" role="form" action="{{ route('makepayment') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-lg-6 col-sm-12 membership-padding">
                                <div class="form-check reg-div">
                                    <input class="form-check-input membership-checkboxicon" type="checkbox" onclick="setChristian()" name="christian" id="christian" {{ old('christian') ? 'checked' : '' }}>
                                    <div class="form-check-label membership-title" for="christian">
                                        I'm a Christian
                                    </div>
                                    <div class="form-check-label memebership-content" for="christian">
                                        {{ __('- Wealth Community Access') }}
                                    </div>
                                    <div class="form-check-label memebership-content" for="christian">
                                        {{ __('- TA Events access') }}
                                    </div>
                                    <div class="form-check-label memebership-content" for="christian">
                                        {{ __('- 24/7 Support Team') }}
                                    </div>
                                    <div class="form-check-label memebership-content" for="christian">
                                        {{ __('- Wealth Shop') }}
                                    </div>
                                    <div class="form-check-label memebership-content" for="christian">
                                        {{ __('- Access to WorkShops') }}
                                    </div>        
                                    <div class="vspace">
                                    </div>
                                    <div class="form-check-label membership-reg" for="christian">
                                        {{ __('Registration fee') }}
                                    </div>      
                                    <div class="form-check-label membership-price" for="christian">
                                        {{ __('$125') }}
                                    </div>                       
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 membership-padding">
                                <div class="form-check reg-div">
                                    <input class="form-check-input membership-checkboxicon" type="checkbox" onclick="setNChristian()" name="nchristian" id="nchristian" {{ old('nchristian') ? 'checked' : '' }}>

                                    <div class="form-check-label membership-title" for="nchristian">
                                        I'm NOT a Christian
                                    </div>
                                    <div class="form-check-label memebership-content" for="nchristian">
                                        {{ __('- Wealth Community Access') }}
                                    </div>
                                    <div class="form-check-label memebership-content" for="nchristian">
                                        {{ __('- TA Events access') }}
                                    </div>
                                    <div class="form-check-label memebership-content" for="nchristian">
                                        {{ __('- 24/7 Support Team') }}
                                    </div>
                                    <div class="form-check-label memebership-content" for="nchristian">
                                        {{ __('- Wealth Shop') }}
                                    </div>
                                    <div class="form-check-label memebership-content" for="nchristian">
                                        {{ __('- Access to WorkShops') }}
                                    </div>
                                    <div class="form-check-label memebership-content" for="nchristian">
                                        {{ __('- Biblical Materials') }}
                                    </div>
                                    <div class="form-check-label memebership-content" for="nchristian">
                                        {{ __('- TA Bible programs') }}
                                    </div> 
                                    <div class="form-check-label membership-reg" for="christian">
                                        {{ __('Registration fee') }}
                                    </div>      
                                    <div class="form-check-label membership-price" for="christian">
                                        {{ __('$350') }}
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6 col-sm-12 membership-padding">
                                <a class="btn btn-link membership-skip" href="{{ url('/skippayment') }}">
                                    {{ __('SKIP') }}
                                </a>
                                <a class="btn btn-link membership-or">
                                    {{ __('OR') }}
                                </a>  
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <button type="submit" class="btn btn-primary membership-makepay">
                                    {{ __('Make Payment') }}
                                </button>
                            </div>
                        </div>
                        <input id="membership" type="membership" class="form-control" name="membership" value="{{Auth::user()->membership}}" hidden>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function setChristian(){
    var christian = document.getElementById("christian");
    var nchristian = document.getElementById("nchristian");
    if (christian.checked == true){
        nchristian.checked = false;
        document.getElementById("membership").value=1;
    }
    else{
        if (nchristian.checked == false){
            document.getElementById("membership").value=0;
        }
    }
}
function setNChristian(){
    var christian = document.getElementById("christian");
    var nchristian = document.getElementById("nchristian");
    if (nchristian.checked == true){
        christian.checked = false;
        document.getElementById("membership").value=2;
    }
    else{
        if (christian.checked == false){
            document.getElementById("membership").value=0;
        }
    }
}
</script>
@endsection
