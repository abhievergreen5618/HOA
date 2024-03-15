
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
<H3 align="center" style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif';"><b>Search For Your HOA</b></h3>
<div class="row">
</div>
</div>
</div>
</div>


<div class="form cid-u4Ks1zgKTr" id="formbuilder-g">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto mbr-form"> 
        <!--Formbuilder Form-->
        <form action="{{ route('search-hoa') }}" method="POST" data-rcpha_sitekey="" data-rcpha_secretkey="" class="mbr-form form-with-styler" data-verified="https://hoa.evergreenbraindev.com/public/search-hoa">
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
            @enderror
            </div>
            <div class="suggestions-container1"></div>
            <div class="col-auto">
              <button type="submit" class="w-100 btn btn-primary display-7">Search</button>
            </div>
          </div>
        </form>
        <!--Formbuilder Form--> 
      </div>
    </div>
  </div>
</div>
</section>



<section class="mbr-section article content9 cid-rJ1TRq1dbZ" id="content9-4">
<div class="container">
  <div class="inner-container" style="width: 100%;">
	<br>
   <div class="display-5 link2" style="text-align: center;"><b>Call My HOA Mailboxes Toll Free At</b> <a href="tel:18772727624" title="Click or Tap Here To Call Us"><b>(877-272-7624)</b></a></div>
   <div class="display-5 link2" style="text-align: center;">
   </div><br>
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
        <!--Formbuilder Form-->
        <!--<form action="https://hoa.evergreenbraindev.com/public/search-hoa" method="POST" data-rcpha_sitekey="" data-rcpha_secretkey="" class="mbr-form form-with-styler" data-verified="https://hoa.evergreenbraindev.com/public/search-hoa">-->
            <form class="FormDiv" method="POST" action="{{ route('search-hoa') }}" data-rcpha_sitekey="" data-rcpha_secretkey="" class="mbr-form form-with-styler">
                @csrf
          <div class="form-row">
            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some problem!</div>
          </div>
          <div class="dragArea form-row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <h4 class="mbr-fonts-style display-5"><strong>Search For Your HOA</strong></h4>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
              <hr>
            </div>
            <div data-for="name" class="col-lg-12 col-md-12 col-sm-12 form-group" style="margin:0;">
              <input type="text" name="searchText" placeholder="HOA NAME" data-form-field="name" class="form-control display-7 secondForm" value="" id="name-formbuilder-g" >
               @error('searchText')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="suggestions-container2"></div>

            <div class="col-auto">
              <button type="submit" class="w-100 btn btn-primary display-7">Search</button>
            </div>
          </div>
        </form>
        <!--Formbuilder Form--> 
      </div>
    </div>
  </div>
</section>




<!--<div class="section2">-->
<!--    <div class="container">-->
<!--            <div class="headingText">-->
                <!--<div class="sectionHeading">-->
                <!--    <p class="slider-text">Florida Homeowner & Condo Associations Directory</p>-->
                <!--</div>-->
<!--            </div>-->
<!--             <div class="section2">-->
            <!--<div class="container mt-5">-->
<!--            <div class="container">-->
                
<!--                <div class="row">-->
<!--                    <div class="container">-->
<!--                        <div class="inner-container">-->
<!--                            <div class="part1"><p>Call My HOA Mailboxes Toll Free At <a href="" class="contactno">(877-272-7624)</a></p></div>-->
<!--                            <div class="part2"><p>ADD YOUR CONTENT/SCRIPT CODE HERE AND OR BELOW THIS HEADER</p></div>-->
<!--                        </div>-->
<!--                        <div class="part3"><p><strong>Property Managers, HOAs, Builders & Home Owners!</strong> <span class="main"><b>ASAP Mailbox and More</b></span> supplies and installs all types of residential curbside mailboxes and all styles of cluster box units (CBU’s) We are a one-stop source for everything related to installing a new mailbox. From removal of the existing mailbox, to the installation of the new one in concrete, to the address numbering, <strong>WE HANDLE EVERYTHING!</strong></p></div>-->
<!--                    </div>-->
<!--                </div>-->
                
                
                <!--<div class="row">-->
                <!--    <div class="col-md-6">-->
                <!--        <img src="images/bnr.png" class="img-fluid" alt="...">-->
                <!--    </div>-->
                <!--    <div class="col-md-6">-->
                <!--            <p>Welcome to Florida Community Network Homeowners and Condominium Directory, consisting of-->
                <!--                about 50,000 associations, with 200,000 board members, representing approximately 10-->
                <!--                million Florida households. The site was developed to assist home/condo owners, buyers,-->
                <!--                sellers, real estate professionals, financial institutions, title companies, real estate-->
                <!--                attorneys, etc. with an easy way to contact their property manager or board members.</p>-->
                <!--            <p>The site consists of contact information for the property managers and board members, map-->
                <!--                of where each HOA/Condo is located, amenities, descriptions of the community,-->
                <!--                association fees, sub-association directory of master-planned communities, website links-->
                <!--                for associations and property managers. This site also includes a detailed fact sheet-->
                <!--                for each association, including corporate name, origination date of the association,-->
                <!--                master association name, sub-association name, dwelling types in the neighborhood, alias-->
                <!--                names, and reviews, etc.</p>-->
                <!--        </div>-->
                <!--    </div>-->

<!--                   <div class="col-lg-8 mx-auto mbr-form">-->
<!--    <form class="FormDiv" method="POST" action="{{ route('search-hoa') }}">-->
<!--        @csrf-->
<!--        <div class="inputNameDiv">-->
<!--            <b>HOA Name</b><br />-->
<!--            <div><hr></div>-->
<!--            <input type="text" class="searchValue" name="searchText" placeholder="HOA Name">-->
<!--            @error('searchText')-->
<!--                <div class="text-danger">{{ $message }}</div>-->
<!--            @enderror-->
<!--        </div>-->
<!--        <div class="buttonDiv">-->
<!--            <button class="search-btn">Search</button>-->
<!--        </div>-->
<!--    </form>-->
<!--</div>-->


<!--<div class="section3 mt-5">-->
<!--    <div class="container">-->
<!--                    <div class="sectionCounty">-->
<!--                        <div class="countyTable">-->
                            <!--<table class="tableData table table-striped">-->
                            <!--    <thead class="tableHead">-->
                            <!--        <tr class="table-primary">-->
                            <!--            <th class="tableData"><u>County</u></th>-->
                            <!--            <th class="tableData"> </th>-->
                            <!--        </tr>-->
                            <!--    </thead>-->
                            <!--    <tbody>-->
                            <!--        @foreach ($communityData->unique('county') as $item)-->
                            <!--        <tr>-->
                            <!--            <td class="tableData">{{ $item->county }}</td>-->
                            <!--            <td class="tableData linkItem"><a class="nav-link"-->
                            <!--                    href="{{ url('communityList/' . $item->county) }}">Communities</a>-->
                            <!--            </td>-->
                            <!--        </tr>-->
                            <!--        @endforeach-->
                            <!--    </tbody>-->
                            <!--</table>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    </div>-->
<!--                    </div>-->
                    
                    <!--<div class="container mt-5 mb-5">-->
                        
                    
                    <!--<div class="section4">-->
                    <!--    <img src="images/fulll.jpg" class="img-fluid" alt="...">-->
                      
                    <!--    <div class="section2Heading">-->
                    <!--        <p>HOA terms, What they mean, and how an HOA works in Florida:</p>-->
                    <!--    </div>-->
                    <!--    <div class="sectionContent">-->
                    <!--        <div class="contentContainer">-->
                    <!--            <p><strong>What exactly is a Homeowners Association (HOA)?:</strong> A homeowners'-->
                    <!--                Association (HOA) is a group of people elected by the residents of the community who-->
                    <!--                create the board of directors for the Association. The main job of the board of-->
                    <!--                directors is to represent the best interests of the residents of the community. The-->
                    <!--                board enforces the rules, known as covenants and restrictions. They are also in-->
                    <!--                charge of collecting homeowners' fees to help pay for the upkeep of common areas of-->
                    <!--                the community and maintain all amenities.</p>-->
                    <!--            <p>Under the Declaration of Florida law, the board must promote the Homeowners' health,-->
                    <!--                safety, and welfare and their fiduciary duty to act in the association's best-->
                    <!--                interest along with its members. The obligations and powers of the board are-->
                    <!--                outlined in the State of Florida's Corporations Code and the HOAs governing-->
                    <!--                documents.-->
                    <!--            </p>-->
                    <!--        </div>-->
                    <!--        <div class="contentContainer">-->
                    <!--            <p><strong>What are HOA Bylaws?:</strong> The HOA Bylaws contain guidelines for the-->
                    <!--                operation and-->
                    <!--                management of the Association. In the Bylaws, you find provisions related to:-->
                    <!--            </p>-->
                    <!--            <ul>-->
                    <!--                <li>Membership</li>-->
                    <!--                <li>Purpose of the Board</li>-->
                    <!--                <li>Officer designation</li>-->
                    <!--                <li>Term of office</li>-->
                    <!--                <li>Powers and duties</li>-->
                    <!--                <li>Meeting rules and schedules</li>-->
                    <!--                <li>A Quorum for action by Officers</li>-->
                    <!--                <li>Nomination and Election of Officers</li>-->
                    <!--                <li>Removal of members</li>-->
                    <!--                <li>Finance</li>-->
                    <!--                <li>Liability of Officers</li>-->
                    <!--                <li>Insurance</li>-->
                    <!--            </ul>-->
                    <!--        </div>-->
                    <!--        <div class="contentContainer">-->
                    <!--            <p><strong>What encompasses a "Common Area?":</strong> The common area of joint interest-->
                    <!--                development-->
                    <!--                (CID) constitutes everything within the community development except the units or-->
                    <!--                lots owned by the homeowners, also known as "separate interest." Examples of typical-->
                    <!--                common areas within CIDs are:-->
                    <!--            </p>-->
                    <!--            <ul>-->
                    <!--                <li>Planned Development</li>-->
                    <!--                <li>Condominiums</li>-->
                    <!--                <li>Everything outside the owner's lots or parcels</li>-->
                    <!--                </li>-->
                    <!--                <li>Everything located on the outside of the Unit's interior perimeter walls,-->
                    <!--                    floors, and ceilings</li>-->
                    <!--                <li>Sidewalks</li>-->
                    <!--                <li>Hallways</li>-->
                    <!--                <li>Non-public streets</li>-->
                    <!--                <li>Elevators</li>-->
                    <!--                <li>Community Amenities</li>-->
                    <!--                <li>Roofs/Windows/Stairways</li>-->
                    <!--                <li>Development walls</li>-->
                    <!--                <li>Community amenities</li>-->
                    <!--                <li>Entrance/Exit gates</li>-->
                    <!--            </ul>-->
                    <!--            <p>To fully understand what is considered a common area in your development, read your-->
                    <!--                HOAs governing documents or Florida real property codes.</p>-->
                    <!--        </div>-->
                    <!--        <div class="contentContainer">-->
                    <!--            <p><strong>What is the Declaration of Covenants, Conditions, and Restrictions?:</strong>-->
                    <!--                A Declaration of CC&R is the legal document that lists all rules and guidelines-->
                    <!--                for the community you must agree to live by in exchange for living there.</p>-->
                    <!--            <p><strong>What are Governing Documents?: </strong>To help you understand, here is a-->
                    <!--                list of the "governing documents" that govern the common interest developments and-->
                    <!--                homeowners:</p>-->
                    <!--            <ul>-->
                    <!--                <li>Declaration of Covenants, Conditions & Restrictions (CC&Rs)</li>-->
                    <!--                <li>Bylaws</li>-->
                    <!--                <li>Articles of Incorporation</li>-->
                    <!--                <li>Plats of Survey and Easement Agreements</li>-->
                    <!--                <li>Rules and Regulations</li>-->
                    <!--                <li>Policies</li>-->
                    <!--            </ul>-->
                    <!--        </div>-->
                    <!--        <div class="contentContainer">-->
                    <!--            <p><strong>What does "HOA" stand for?: </strong>The "HOA" acronym stems from the term-->
                    <!--                "Homeowners Association." HOA is typically used to reference the following types of-->
                    <!--                common-interest development communities:</p>-->
                    <!--            <ul>-->
                    <!--                <li>Condominiums (includes villas and townhomes)</li>-->
                    <!--                <li>Cooperatives</li>-->
                    <!--                <li>Single-family homes</li>-->
                    <!--            </ul>-->
                    <!--            <div class="HOAroles">-->
                    <!--                <p><strong>Specific Roles of HOA Board Members:</strong> Apart from the general-->
                    <!--                    duties of the HOA board, its members also take on specific roles. Here are the-->
                    <!--                    primary responsibilities of each position.</p>-->
                    <!--                <ul>-->
                    <!--                    <li><strong>President:</strong>The HOA President serves as the leader of the-->
                    <!--                        board. They also represent the community as a whole. Therefore, the-->
                    <!--                        president works closely with other board members, homeowners, vendors, HOA-->
                    <!--                        property managers, etc. The president's primary responsibilities include-->
                    <!--                        presiding over board meetings and facilitating the decision-making process;-->
                    <!--                        signing contracts, checks, and other legal documents; serving as a spokesman-->
                    <!--                        for the HOA; and taking charge of the day-to-day operations.</li>-->
                    <!--                    <li><strong>Vice-President:</strong> The HOA Vice President takes charge in the-->
                    <!--                        absence of the HOA President. However, the vice president only has this-->
                    <!--                        authority if the president is unavailable. Depending on the association, the-->
                    <!--                        vice president may have additional duties. For instance, the vice president-->
                    <!--                        can serve as the head of the architectural review committee, maintenance-->
                    <!--                        committee, and other HOA committees. The vice president can also liaise with-->
                    <!--                        the members of these committees.</li>-->
                    <!--                    <li><strong>Treasurer:</strong> The HOA Treasurer oversees the financial-->
                    <!--                        operations of the association. The treasurer is responsible for developing-->
                    <!--                        the budget, monitoring income and expenses, collecting assessments, issuing-->
                    <!--                        payments to vendors, preparing financial reports, and facilitating an audit-->
                    <!--                        at the end of a fiscal year. If there is a finance committee, the treasurer-->
                    <!--                        can also serve as the head.</li>-->
                    <!--                    <li><strong>Secretary:</strong>The HOA secretary creates the board meeting-->
                    <!--                        agenda (with the president), records the minutes of board meetings, and-->
                    <!--                        ensures quorum. They also send notices for board meetings, ensure compliance-->
                    <!--                        with the governing documents, maintain bank information and other essential-->
                    <!--                        documents, and store homeowner and maintenance records.</li>-->
                    <!--                </ul>-->
                    <!--            </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                            
                            
                    <!--        <div class="contentContainer">-->
                    <!--             <div class="board_member">-->
                    <!--                <img src="images/ful2.jpg" class="img-fluid" alt="...">-->
                    <!--            </div>-->
                    <!--            <div class="BoardMemberContainer">-->
                    <!--                <h2>Knowing and Upholding HOA Board Member Duties</h2>-->
                    <!--                <p>Since the success of a community can depend on the abilities of the HOA board,-->
                    <!--                    homeowners must elect only the most capable people. Thus, it's crucial to have a-->
                    <!--                    solid understanding of the duties of HOA board members. Homeowners can also use-->
                    <!--                    this knowledge to ensure that HOA board members uphold their legal-->
                    <!--                    responsibilities to the community.</p>-->
                    <!--            </div>-->
                    <!--            <div class="BoardMemberSubContainer">-->
                    <!--                <h3>Some Benefits of Becoming a Board Member</h3>-->
                    <!--                <p>As a homeowner, you have a significant stake in the cleanliness and safety of-->
                    <!--                    your community. Maybe you own a home or condo that's part of an association that-->
                    <!--                    shares common amenities, such as a community pool, sports facilities, a-->
                    <!--                    clubhouse, a country club, a golf course, gated entrances, and more. Becoming a-->
                    <!--                    volunteer in your condo or homeowners association can help to ensure that your-->
                    <!--                    community will be adequately maintained and looked after. Become a volunteer-->
                    <!--                    board member with your homeowner's association, and participate in the-->
                    <!--                    decision-making process. HOA committee positions are volunteer positions;-->
                    <!--                    however, knowing your community is well taken care of gives board members a-->
                    <!--                    sense of accomplishment.</p>-->
                    <!--                <ul>-->
                    <!--                    <li><strong>You have a vested interest in your property:</strong> One of the top-->
                    <!--                        priorities of every homeowner is to protect the value of their home. Being-->
                    <!--                        involved with an HOA will put you in a better position to make and implement-->
                    <!--                        rules in your HOA neighborhood. Some of these regulations will directly-->
                    <!--                        affect property value, especially if they require decisions about the-->
                    <!--                        association's budget, reserve fund, and routine maintenance.</li>-->
                    <!--                    <li><strong>Correct problems:</strong>If you notice issues in your community,-->
                    <!--                        such as a lack of maintenance or maybe a problem with unruly neighbors, you-->
                    <!--                        can take charge and help correct those issues by being a part of the board-->
                    <!--                    </li>-->
                    <!--                    <li><strong>Meet more of your expectations: </strong>For example, did you have-->
                    <!--                        certain expectations when you bought your home or condo in the community?-->
                    <!--                        Are your expectations being met? By serving on an HOA board, you can achieve-->
                    <!--                        your expectations of a perfect community much sooner by working with your-->
                    <!--                        neighbors.</li>-->
                    <!--                    <li><strong>Gain a better understanding of the by-laws:</strong>Volunteering as-->
                    <!--                        a board member will make you well-versed in your association's HOA by-laws,-->
                    <!--                        rules, and regulations. It will also give you a good grasp of operating-->
                    <!--                        finances and budgeting.</li>-->
                    <!--                    <li><strong>Have fun experiences: </strong>Taking on some of your association's-->
                    <!--                        tasks does not have to be boring. It can be fun, especially when you get to-->
                    <!--                        socialize, work with your neighbors and come up with creative ideas to make-->
                    <!--                        your community run better. In addition, many HOA communities hold-->
                    <!--                        get-togethers for their residents, allowing the community to become more-->
                    <!--                        social.</li>-->
                    <!--                    <li><strong>Give back to the community:</strong>One way to give back to your-->
                    <!--                        neighbors and community is to serve on your homeowner's association's board,-->
                    <!--                        allowing you to make good decisions that will positively impact all-->
                    <!--                        residents.</li>-->
                    <!--                    <li><strong>Meet your neighbors:</strong> An HOA meeting is the best place to-->
                    <!--                        meet your neighbors and learn more about them. It allows you to socialize-->
                    <!--                        and make friends with others in your community. </li>-->
                    <!--                </ul>-->
                    <!--            </div>-->

                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
<!--                </div>-->
<!--            </div>-->
<!--            </div>-->
<!--            </div>-->


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
        
        
        // Assuming you have a container for suggestions
        var suggestionsContainer2 = $('.suggestions-container2');
        
         // Event listener for input changes
        $('.secondForm').on('input', function() {
            var searchText = $(this).val();

            $.ajax({
                url: '{{ route("search-hoa-suggestions") }}',
                method: 'POST',
                data: { searchText: searchText, _token: '{{ csrf_token() }}' },
                success: function(data) {
                    // Clear previous suggestions
                    suggestionsContainer2.html('');

                    // Populate suggestions
                    data.forEach(function(suggestion2) {
                        // Append suggestion as list items
                        suggestionsContainer2.append('<div class="suggestion-item2">' + suggestion2 + '</div>');
                    });

                    // Toggle visibility based on suggestions
                    suggestionsContainer2.toggleClass('show', data.length > 0);
                }
            });
        });
        

        // Event listener for suggestion item clicks
        suggestionsContainer2.on('click', '.suggestion-item2', function() {
            // Get the clicked suggestion text
            var selectedSuggestion2 = $(this).text();

            // Set the input value to the selected suggestion
            $('.secondForm').val(selectedSuggestion2);

            // Clear the suggestions container
            suggestionsContainer2.html('');

            // Hide the suggestions container after selecting a suggestion
            suggestionsContainer2.removeClass('show');
        });
        
    });
</script>


    @include('partials/footer')

       