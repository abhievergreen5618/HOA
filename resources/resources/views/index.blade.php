 @include('partials/header')
<section class="header1 cid-rJ7HHvkYgw mbr-parallax-background" id="header1-a">
  <div class="mbr-overlay" style="opacity: 0.65; background-color: rgb(0, 8, 0);"> </div>
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="mbr-white col-md-10"> 
        <!-- Start WOWSlider.com BODY section -->
        <div id="wowslider-container1">
            <div class="ws_images">
            <ul>
              <li><a href="http://tampa.asapmailbox.com/catalog/index.php?route=product/product&path=68_76&product_id=84"><img src="data1/images/kingstonwhite2e1560970217770480x640480x640.jpg" alt="Installation Available On All Purchases" title="Lake Jovita - Installation Available on All Purchases" id="wows1_0"/></a></li>
              <li><a href="http://tampa.asapmailbox.com/catalog/index.php?route=product/product&path=68_76&product_id=85"><img src="data1/images/monterey.jpg" alt="All Cast Aluminum Styles With Powder Coated Finish" title="Lake Jovita Estates - All Cast Aluminum Styles With Powder Coated Finish" id="wows1_1"/></a></li>
              <li><a href="https://tampa.asapmailbox.com/catalog/index.php?route=product/category&path=64_73"><img src="data1/images/brackets.jpg" alt="Bracket Repairs Are Our Specialty" title="Bracket Repairs Are Our Specialty" id="wows1_2"/></a></li>
              <li><a href="http://tampa.asapmailbox.com/catalog/index.php?route=product/product&path=33_74&product_id=59"><img src="data1/images/kingsport480x640480x640.jpg" alt="Choose Your Components To Match Your HOA's Requirements" title=" Choose Your Components To Match Your HOA's Requirements" id="wows1_3"/></a></li>
              <li><a href="http://tampa.asapmailbox.com/catalog/index.php?route=product/product&path=33_74&product_id=51"><img src="data1/images/traditionalblacke15609702722061512x2016.jpg" alt="Baked On Powder Coated Finishes In White, Black or Bronze" title="Baked On Powder Coated Finishes In White, Black or Bronze" id="wows1_4"/></a></li>
              <li><a href="/catalog/"><img src="data1/images/rialto480x640480x640.jpg" alt="Free Written Quotes For HOA Mailbox And/Or Sign Projects" title="Free Written Quotes For HOA Mailbox And/Or Sign Projects" id="wows1_5"/></a></li>
              <li><a href="https://tampa.asapmailbox.com/catalog/image/cache/catalog/Screen_Shot_2022-05-24_at_10.54.22_AM-removebg-preview-228x228.png"><img src="data1/images/woodpostwhite240x320240x320.jpg" alt="New Mailboxes Including Installation From $199" title="New Mailboxes Including Installation From $199" id="wows1_6"/></a></li>
            </ul>
            </div>
          <div class="ws_shadow"></div>
        </div>
        <script type="text/javascript" src="{{ asset('engine1/wowslider.js') }}"></script> 
        <script type="text/javascript" src="{{ asset('engine1/script.js') }}"></script> 
        <!-- End WOWSlider.com BODY section -->
        <H3 align="center" style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif';"><strong>Search For Your HOAs Mailbox</strong><br>
        <span style="font-size: 1.2rem;">Get Availability And Pricing Instantly!</span></h3>
        <div class="row"> </div>
      </div>
    </div>
  </div>
  <div class="form cid-u4Ks1zgKTr" id="formbuilder-g">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto mbr-form"> 
          <form action="{{ route('search-hoa') }}" method="POST" data-rcpha_sitekey="" data-rcpha_secretkey="" class="mbr-form form-with-styler">
            @csrf
            <div class="form-row">
              <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some problem!</div>
            </div>
            <div class="dragArea form-row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <hr>
              </div>
              <div data-for="name" class="col-lg-12 col-md-12 col-sm-12 form-group" style="margin:0;">
                <input type="text" name="searchText" placeholder="HOA NAME" data-form-field="name" class="form-control display-7 firstForm" value="" id="name-formbuilder-g">
                @error('searchText')
                <div class="text-danger">{{ $message }}</div>
                @enderror </div>
                <div class="suggestions-container1"></div>
              <div class="col-auto">
                <button type="submit" class="w-100 btn btn-primary display-7">Search</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--<section class="mbr-section article content9 cid-rJ1TRq1dbZ1" id="content9-4">
  <div class="container">
      <div class="inner-container" style="width: 100%;">
        <div style="max-width: 280px; margin: auto;"><img src="assets/images/logo-280x64.png" style="width: 100%; height: auto;" alt="ASAP Mailbox Installations and Repair Logo"/>
        <div style="text-align: center; font-size: 12px;">dba My HOA Mailboxes</div>
      </div><br>   
      <div class="display-5 link2" style="text-align: center;"><b>Call My HOA Mailboxes Toll Free At</b> <a href="tel:18772727624" title="Click or Tap Here To Call Us"><b>(877-272-7624)</b></a></div>
      <div class="display-5 link2" style="text-align: center;"> </div>
      <br>
      <div class="display-5" style="text-align: center;"><strong>ADD YOUR CONTENT/SCRIPT CODE HERE AND OR BELOW THIS HEADER</strong></div>
      <br>
    </div>
    <div class="display-5 link2"><strong>Property Managers</strong>, <strong>HOAs</strong>, <strong>Builders</strong> &amp; <strong>Home Owners</strong>! <span style="color: #FF0000;"><b>ASAP Mailbox and More</b></span> supplies and installs all types of residential curbside mailboxes and all styles of cluster box units (CBU’s) We are a one-stop source for everything related to installing a new mailbox.  From removal of the existing mailbox, to the installation of the new one in concrete, to the address numbering, <b>WE HANDLE EVERYTHING!</b><br>
      <br>
    </div>
  </div>
  </div>
</section>
<section class="form cid-u4Ks1zgKTr" id="formbuilder-g">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto mbr-form"> 
        <form class="FormDiv" method="POST" action="{{ route('search-hoa') }}" data-rcpha_sitekey="" data-rcpha_secretkey="" class="mbr-form form-with-styler">
        @csrf
        <div class="form-row">
          <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some problem!</div>
        </div>
        <div class="dragArea form-row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div align="center">
            <h4 class="mbr-fonts-style display-5" style="font-size: 1.5rem;"><strong>Search For Your HOAs Mailbox</strong><br>
            <span style="font-size: 1rem;">Get Availability And Pricing Instantly!</span>
            </h4>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12">
            <hr>
          </div>
          <div data-for="name" class="col-lg-12 col-md-12 col-sm-12 form-group">
            <input type="text" name="searchText" placeholder="HOA NAME" data-form-field="name" class="form-control display-7" value="" id="name-formbuilder-g">
            @error('searchText')
            <div class="text-danger">{{ $message }}</div>
            @enderror </div>
          <div class="col-auto">
            <button type="submit" class="w-100 btn btn-primary display-7">Search</button>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</section>-->


<style>
    .suggestions-container1 {
        display: none;
        /* Add other styling as needed */
    }

    .suggestions-container1.show {
        display: block;
    }
    
    .suggestions-container2 {
        display: none;
        /* Add other styling as needed */
    }

    .suggestions-container2.show {
        display: block;
    }
</style>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
 $(document).ready(function() {
        // Assuming you have a container for suggestions
        var suggestionsContainer1 = $('.suggestions-container1');

        // Event listener for input changes
        $('.firstForm').on('input', function() {
            var searchText = $(this).val();

            $.ajax({
                url: '{{ route("search-hoa-suggestions") }}',
                method: 'POST',
                data: { searchText: searchText, _token: '{{ csrf_token() }}' },
                success: function(data) {
                    // Clear previous suggestions
                    suggestionsContainer1.html('');

                    // Populate suggestions
                    data.forEach(function(suggestion1) {
                        // Append suggestion as list items
                        suggestionsContainer1.append('<div class="suggestion-item1">' + suggestion1 + '</div>');
                    });

                    // Toggle visibility based on suggestions
                    suggestionsContainer1.toggleClass('show', data.length > 0);
                }
            });
        });
        
         // Event listener for suggestion item clicks
        suggestionsContainer1.on('click', '.suggestion-item1', function() {
            // Get the clicked suggestion text
            var selectedSuggestion1 = $(this).text();

            // Set the input value to the selected suggestion
            $('.firstForm').val(selectedSuggestion1);

            // Clear the suggestions container
            suggestionsContainer1.html('');

            // Hide the suggestions container after selecting a suggestion
            suggestionsContainer1.removeClass('show');
        });
        
   });
</script>


@include('partials/footer') 