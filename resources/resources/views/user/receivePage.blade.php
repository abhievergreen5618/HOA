@include('partials/header')

<div class="section2">
    <div class="container">
        
            <div class="mainResponseDiv">
                <div class="sectionDiv">
                    @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="responseDiv">
                        Response received we will get back to you...
                    </div>
                    <div class="responseImage">
                        <img src="{{ asset('images/response.png') }}" class="checkImage">
                    </div>
                    </div>
            </div>

    </div>
</div>
            
            @include('partials/footer')