@include('partials/header')
            
            <div class="section2">
                <div class="cntainer ">
                    
            <div class="headingText">
                <div class="sectionHeading">
                    <p class="slider-text">Florida Homeowners Associations & Condo Directory</p>
                </div>
            </div>
           
            <div class="container-fluid">
                <div class="content-section">
                    <div class="section1">
                        <div class="sectiondata">
                            <p>Florida Community Network Homeowners and Condominium Directory, consists of about
                                50,000 associations, with 200,000 board members, representing approximately 10
                                million Florida households. The site was developed to assist home/condo owners,
                                buyers, sellers, real estate professionals, financial institutions, title companies,
                                real estate attorneys, etc. with an easy way to contact their property manager or
                                board members.</p>

                            <p>The site consists of contact information for the property managers and board members,
                                map of where each HOA/Condo is located, amenities, descriptions of the community,
                                association fees, sub-association directory of master-planned communities, website
                                links for associations and property managers. This site also includes a detailed
                                fact sheet for each association, including corporate name, origination date of the
                                association, master association name, sub-association name, dwelling types in the
                                neighborhood, alias names, and reviews, etc.
                            </p>

                        </div>
                    </div>

                    <div class="col-lg-8 mx-auto mbr-form">
                        <form class="FormDiv" method="POST" action="{{ route('search') }}">
                            @csrf
                            <div class="inputNameDiv">
                                <b>Search Anything(County,Community,HOA vs NON)</b>
                                <input type="text" class="searchValue" name="searchValue">
                            </div>
                            <div class="buttonDiv">
                                <button class="search-btn">Search</button>
                            </div>
                        </form>
                    </div>

                    <div class="section">
                        <div class="sectiondata">
                            <p>Search our site to quickly locate any community within a county. Use the search box
                                and begin typing the community name. This information is available free to
                                homeowners, potential buyers, sellers, Realtors, property manager, real estate
                                attorneys, mortgage brokers, financial institutions and vendors. If you have any
                                questions, please feel free to contact us.</p>
                        </div>
                    </div>

                    <div class="sectionCounty">
                        <div class="countyTable">
                            <table class="CommunitytableData table table-striped">
                                <thead class="tableHead">
                                    <tr class="table-primary">
                                        <th class="CommunitytableHeading">County</th>
                                        <th class="CommunitytableHeading">Community Name</th>
                                        <th class="CommunitytableHeading">HOA OR NON</th>
                                        <th class="CommunitytableHeading"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($item)
                                    @forelse ($item as $community)
                                    <tr>
                                        <td class="CommunitytableData">{{ $community->county }}</td>
                                        <td class="CommunitytableData">{{ $community->community }}</td>
                                        <td class="CommunitytableData">{{ $community->hoa_or_non }}</td>
                                        <td class="CommunitytableData linkItem">
                                            <a class="nav-link" href="{{ url('board-members/' . $community->id ) }}">Board Members</a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4">No community data found for {{ $county }}</td>
                                    </tr>
                                    @endforelse
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="section">
                        <div class="sectiondata">
                            <strong>What You Should Know About HOA’s In Florida</strong>
                            <p>How much do you know about HOA's in Florida? Do you understand the HOA covenants and
                                restrictions? What about HOA dues, fees, or special assessments? HOA's or homeowner
                                associations in Florida are usually commonplace in most new, single-family home
                                developments, and generally in every condominium or townhome communities. The HOA is the
                                ruling and administration organization in the complex, subdivision, or development, and
                                is usually comprised of an HOA board that is made up of volunteer homeowners.</p>
                        </div>
                        <div class="sectiondata">
                            <strong>How Florida Homeowner Associations Work</strong>
                            <p>The central concept regarding a homeowners’ association (HOA) is that the residents of
                                the community elect volunteer homeowners to the board of directors of the HOA. The board
                                of director’s act as the governing body that oversees essential issues that come up in
                                the community. The primary responsibilities of the board include representing the
                                community resident’s best interests in protecting the value of their homes, by the
                                enactment and enforcement of covenants and restrictions which are the rules that the
                                community has agreed to abide by. Additionally, the HOA board is responsible for the
                                assessment and collection of HOA fees, which are used to pay for the maintenance of the
                                common areas and any other designated areas that are outlined in the covenants and
                                deeds.</p>
                        </div>
                        <div class="sectiondata">
                            <strong>HOA Fees and Dues</strong>
                            <p>Homeowner association dues are usually determined by the amenities available in the
                                community and maintenance of the common areas. Amenities include such things as a gated
                                entrance, clubhouse, community pool, tennis court, children’s playground, etc.
                                Maintenance of the common areas include lakes, ponds, right of ways, medians, exterior
                                painting, parking areas, sidewalks, streetlights (in communities that include private
                                streets), and roofs. In some communities, group rates are negotiated for trash pickup,
                                cable and internet services. This may be part of your dues. Generally, dues are
                                collected monthly or quarterly in most HOA’s, dues collected annually are less common.
                                Not paying your dues to the HOA can lead to a lien being placed on your property which
                                if not resolved may result in your property being foreclosed.</p>
                        </div>
                        <div class="sectiondata">
                            <strong>HOA Membership is Mandatory</strong>
                            <p>If you’re wondering whether you can get out of a homeowner’s association membership, you
                                cannot. In Florida, generally, when you purchase a home, condo, townhouse, or villa that
                                is overseen by a homeowner’s association, your membership in the association is
                                automatic. There is no choice involved as the purchase of your property creates a
                                contract with the HOA. The agreement states that you agree to follow the rules and
                                regulations of the HOA as well as pay all of the dues, fees, and any special assessments
                                that may arise.</p>
                        </div>
                        <div class="sectiondata">
                            <strong>Homeowners Association Common Rules and Regulations</strong>
                            <p>Communities with homeowner associations contain rules and regulations in documents called
                                covenants and restrictions. You should ask for a copy of the covenants and restrictions
                                for the community before you execute a purchase agreement. Additionally, you can
                                contract your purchase with the contingency that the covenants and restrictions must
                                meet your approval and understanding.</p>
                        </div>
                        <div class="sectiondata">
                            <strong>Condominium Association Fees</strong>
                            <p>Owners of condominiums are also subject to association fees. In Florida, condominium
                                associations are governed by Florida Statute §718. In Florida, you may cancel your
                                purchase contract through a “cooling off” provision within 7 days for a new condo or 3
                                days for a resale condo. This provision gives potential condo buyers time to review the
                                condo fees, dues and budget.</p>

                            <p>Condominium association fees generally pay for maintenance of the grounds and common
                                areas, exterior of the building, insurance, swimming pool, clubhouse, or other
                                amenities. In many instances, the condo fee includes services such as garbage and water.
                            </p>
                        </div>
                        <div class="sectiondata">
                            <strong>What You Should Know About HOA's in Florida A Few Final Thoughts</strong>
                            <p>The best defense a homeowner has against their homeowners’ association is to be informed
                                of your rights and obligations. To learn about your HOA, begin by reading the documents
                                that control the HOA’s power. These include the Bylaws, Declarations of Restrictive
                                Covenants, Articles of Incorporation and any Rules and Regulations. In Florida, HOA’s
                                are governed by Chapter 720 of the Florida Statutes. Although there is no agency that
                                enforces the Florida HOA statutes, the Department of Business and Professional
                                Regulation deals with elections and recalls. This leaves the homeowner with one option
                                and that is to litigate against the HOA, however, before filing a suit, pre-suit
                                mediation must occur.</p>

                            <p>Homeowners should also be aware that if a new state law is enacted, it cannot be
                                retroactively applied to change the HOA governing documents. Your HOA Bylaws,
                                Declarations of Restrictive Covenants, and Rules are contracts. There are several
                                exceptions to this, first if your governing documents state that they are “subject to
                                Florida Statute Chapter 720 as amended from time to time,” or Florida Statute Chapter
                                617 and or 607, in the event that the association was created before Florida Statute
                                Chapter 720 was enacted. Obtaining a copy of the Florida law at the time that the HOA
                                documents were recorded can be found at the county courthouse where the property is
                                located.</p>
                        </div>
                    </div>
                </div>
                
            </div>
           
                </div>
            </div>
           @include('partials/footer')