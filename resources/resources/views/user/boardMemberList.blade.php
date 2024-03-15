@include('partials/header')


        <div class="section2">
            <div class="container">
                
            <div class="headingText">
                   @if(isset($community))
        <div class="sectionHeading">
            <p>{{ $community->community }}</p>
        </div>
    @else
        <p>Community not found</p>
    @endif

            </div>

            <div class="container-fluid">
                <div class="content-section">
                    <div class="section1">
                        @if(isset($community))

                        <div class="section">
                            
                            <p>{{ $community->community }} in {{ $community->county }} County - HOA contact,
                                board members, property manager contact, amenities, HOA fees, estoppel, docs, HOA rules
                                and regulations, description, and features and more! Before purchasing in an HOA
                                community, you will want to research their rules and deed restrictions, reserve funds,
                                budget, bylaws, and association documents. In addition, you should acquire a copy of the
                                HOA's operating financial statement to understand how the HOA fees are being allocated
                                and ensure the reserve fund is adequately funded.</p>

                            <p>{{ $community->community }} currently has an active association
                                with a board of directors. The association was established on 08281992 and is located in
                                the county of ALACHUA. Please scroll down the page to see the current property manager
                                and board of directors for BLUES CREEK. You can also ask the homeowners or condo
                                association, board members, or property manager questions using the <strong>red “Ask the
                                    Property Manager or Board Members a Question” button.</strong>
                            </p>
                            <p>{{ $community->status_type }} STATUS & TYPE</p>
                            <p>COMMUNITY STATUS: THIS COMMUNITY HAS AN ACTIVE ASSOCIATION</p>
                            <p>COMMUNITY TYPE: {{ $community->community_type }}</p>
                            <p>COMMUNITY LEGAL NAME: {{ $community->community_legal_name }}</p>
                            <p>ALSO KNOWN AS: {{ $community->also_known }}</p>
                            <p>TYPE OF CORPORATION: DOMNP</p>
                            <p>ORIGINAL CORPORATION FILING DATE: {{ $community->date }}</p>
                            <p>COMMUNITY ID NUMBER: {{ $community->id_number }}</p>
                            <p>For maintenance requests, eStoppel, complaints, rules & regulations, HOA fees and
                                documents, amenities, real estate purchase/sales, wind mitigation requests, and
                                architectural/landscape committee, please contact the property manager.</p>
                      
                      @else
                      <p>Not found</p>
                      @endif
                        </div>
                        <div class="sectionMaindata">
                             @if($community)
                            <p>Do you need assistance with any of the following for {{ $community->community }}</p>
                            @else
                            <p>Not found</p>
                            @endif
                        </div>

                    </div>
                    <div class="section flexSection">
                        <div class="leftSection">
                            <ul>
                                <li>Property Manager Contact</li>
                                <li>Board Member Contact</li>
                                <li>Maintenance Requests</li>
                                <li>Architectural & Landscape Review</li>
                                <li>Complaints & Questions</li>
                                <li>HOA/Condo Documents</li>
                                <li>eStoppel Requests</li>
                                <li>Rules & Regulations</li>
                                <li>Declaration of CCR's</li>
                                <li>HOA/Condo Amendments</li>
                            </ul>
                        </div>
                        <div class="rightSection">
                            <ul>
                                <li>Real Estate Purchase/Sales</li>
                                <li>HOA/Condo Fees</li>
                                <li>Wind Mitigation for Insurance</li>
                                <li>Pet Restrictions</li>
                                <li>Rental Restrictions</li>
                                <li>HOA/Condo Applications</li>
                                <li>Lease Applications</li>
                                <li>Address & Homeowners Directory</li>
                                <li>Neighborhood Reviews</li>
                                <li>Community Rentals</li>
                            </ul>
                        </div>
                    </div>
                    <div class="section">
                        <p>For help with any of the above, contact the property manager.</p>
                    </div>

                    <div class="alertDiv">
                        <p data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <i class="fa-solid fa-circle-question"></i> Ask Property Manager or Board a Question - CLICK HERE!
                        </p>
                    </div>
                    <div class="sectionCounty">
                        <div class="countyTable">
                            <table class="CommunitytableData table table-striped">
                                <thead class="tableHead">
                                    <tr class="table-primary">
                                        <th>Property Manager</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Zip</th>
                                        <th>Phone</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($boardMembers as $data)
                                    <tr>
                                        <td class="CommunitytableData">{{ $data->property_manager }}</td>
                                        <td class="CommunitytableData">{{ $data->address }}</td>
                                        <td class="CommunitytableData">{{ $data->city }}</td>
                                        <td class="CommunitytableData">{{ $data->state }}</td>
                                        <td class="CommunitytableData">{{ $data->zip }}</td>
                                        <td class="CommunitytableData">{{ $data->phone }}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4">No data found</td>
                                    </tr>
                                    @endforelse
                                </tbody>

                            </table>
                        </div>
                    </div>

                    <div class="section">
                        <p class="boardHeading"><strong>Board of Directors for BLUES CREEK MASTER OWNERS ASSOCIATION,
                                GAINESVILLE FL:</strong></p>

                    </div>

                    <div class="sectionCounty">
                        <div class="countyTable">
                            <table class="CommunitytableData table">
                                <thead class="tableHead">
                                    <tr class="table-primary">
                                        <th><u>POSITION HELD</u></th>
                                        <th><u>BOARD MEMBER</u></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($boardMembers as $data)
                                    <tr>
                                        <td class="CommunitytableData">{{ $data->position_held }}</td>
                                        <td class="CommunitytableData">{{ $data->board_member }}</td>
                                    </tr> @empty
                                    <tr>
                                        <td colspan="4">No data found</td>
                                    </tr>
                                    @endforelse
                                    <tr>
                                        <td class="CommunitytableData" colspan="2">
                                            <p><strong>Duties of the Officers of the Board of Directors for SPECTRUM
                                                    WEST CONDO ASSOCIATION, FORT LAUDERDALE FL:</strong></p>
                                            <p>The Board of Directors officers are generally President, Vice-President,
                                                Secretary, Treasurer, and Members-at-Large.</p>
                                            <ol>
                                                <li><strong>President: </strong>The President of the Board presides at
                                                    all meetings of
                                                    the Board of Directors. The President is ultimately responsible for
                                                    seeing that orders and resolutions of the Board of Directors are
                                                    carried out. The President generally signs all contracts and other
                                                    written instruments and co-signs all checks and promissory notes.
                                                </li>
                                                <li><strong>Vice-President: </strong> The Vice-President acts in the
                                                    place and stead of the President in the event of his absence and
                                                    exercises other duties as the Board may require.
                                                </li>
                                                <li><strong>Secretary: </strong>The Secretary records the votes and
                                                    keeps the minutes of all meetings and proceedings of the Board. The
                                                    Secretary also signs contracts and other instruments executed in the
                                                    name of or on behalf of the Association. The Secretary is the keeper
                                                    of the corporate seal of the Association and affixes it on all
                                                    papers requiring the seal. The Secretary also serves or causes to be
                                                    served; notices meetings of the Board and the Members; keeps
                                                    appropriate current records showing the Members of the Association
                                                    and their address; and performs other duties as required by the
                                                    Board.
                                                </li>
                                                <li><strong>Treasurer: </strong>The treasurer receives and deposits in
                                                    appropriate bank accounts all monies of the Association and
                                                    disburses such funds as directed by the resolution of the Board of
                                                    Directors. The treasurer signs all checks of the Association; is the
                                                    keeper of the books of account; causes an annual audit of the
                                                    Association books by a public accountant after each fiscal year; and
                                                    prepares an annual budget and a statement of income and expenditures
                                                    to be presented to the membership in compliance with the civil code,
                                                    and delivers a copy of each to the Members.
                                                </li>
                                                <li><strong>Member at Large: </strong>The member at large is the fifth
                                                    member of the Board of Directors and is a voting member of the
                                                    Board. The member at large fulfills duties as assigned by the
                                                    President or by the Board.
                                                </li>
                                            </ol>
                                            <p>Being a volunteer member of an HOA board of directors does come with
                                                duties and responsibilities. The associations C.C.and R.'s (covenants,
                                                conditions and restrictions) and Bylaws set forth the general powers and
                                                duties of the Board and the specific limitations upon the Board's
                                                powers. The Board of Directors of an HOA generally have the power to
                                                adopt and publish "Rules and Regulations" to protect the interests of
                                                the homeowners. Each individual board position comes with certain duties
                                                and responsibilities.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="CommunitytableData" colspan="2">
                                            <p><strong>HOA Board Member's Fiduciary Duties</strong></p>
                                            <p>The everyday business of most developments, such as managing the money
                                                and community maintenance, is usually run by the homeowner association
                                                (HOA) board of directors (aka the "Board"). If you live in a PUD or
                                                joint interest development, serving on the board can help maintain your
                                                community's well-being. But, to operate responsibly and avoid potential
                                                legal liability, you must know your fiduciary obligations as an HOA
                                                board member. Breach these fiduciary duties, and you could face personal
                                                liability for your actions or errors.</p>
                                            <p>State corporate law dictates the fiduciary duties of Florida HOA board
                                                members. Most Florida HOAs are nonprofit corporations formed by filing
                                                articles of incorporation with the State of Florida. Recognizing that a
                                                corporation's board members serve in a position of trust, the state
                                                corporation law imposes a fiduciary duty on the corporation's board of
                                                directors, requiring them to act in its best interest.</p>

                                            <p>Subject to some limitations, this fiduciary duty applies to HOAs, though
                                                they are typically nonprofit corporations and even though HOA board
                                                members are usually volunteers.</p>

                                            <p>A board member's fiduciary duties involve three essential components:</p>
                                            <ul>
                                                <li>The duty of care</li>
                                                <li>The duty of loyalty, and</li>
                                                <li>The duty to act within the scope of its authority.</li>
                                            </ul>
                                            <p><strong>HOA Board Members' Duty of Care: </strong>To meet the duty of
                                                care, an HOA board member must make informed decisions, which might
                                                require some research before acting or voting on an HOA matter. For
                                                example, before fining a homeowner for a rule violation, board members
                                                must familiarize themselves with the association's CC&Rs, and the
                                                details of the situation.</p>
                                            <p>HOA board members must also act reasonably and sensibly, using sound
                                                business judgment and avoiding arbitrary or volatile. For example, board
                                                members can't issue a fine against a homeowner for painting a home red
                                                just because they don't like that color if it is not a violation of HOA
                                                rules about house paint color.</p>
                                            <p><strong>HOA Board Members' Duty of Loyalty: </strong>The duty of loyalty
                                                requires that HOA board members are loyal to the HOA and act fairly and
                                                reasonably, in good faith, in the interest of, and for the benefit of,
                                                the HOA as a whole, rather than making decisions based on any of their
                                                personal interests, or for their personal gain.</p>
                                            <p>HOA board members should also avoid acting where there is a conflict of
                                                interest. For example, board members selecting landscapers for the
                                                common property should not award those contracts for landscaping to
                                                family members or friends. For example, a board member who owns a purple
                                                house should not participate in a board vote on whether or not to allow
                                                pink and purple homes in the development because it is a conflict of
                                                interest.</p>
                                            <p>HOA board members must protect members' confidentiality and not divulge
                                                information provided in confidence. For example, suppose a homeowner
                                                confides in a board member about his impending home foreclosure to
                                                arrange a payment plan for HOA dues. In that case, the board member
                                                should not disclose the information to a friend or neighbor.</p>
                                            <p><strong>HOA Board Members' Duty to Act Within the Scope of Authority:
                                                </strong>This duty requires the HOA board to perform the jobs it's
                                                obligated to do but forbids the board from making decisions or acting on
                                                matters without the proper authority. The power of an HOA comes from its
                                                obligations under state laws and the authority granted to it in the
                                                development's governing documents.</p>
                                            <p>To ensure the board meets the obligations it is charged with, all board
                                                members must know what duties are required. Review Florida state law and
                                                the HOA's governing documents, specifically the articles of
                                                incorporation and bylaws, and your development's CC&Rs to determine the
                                                HOA's obligations and the extent of its authority. For example, if
                                                Florida state laws or governing documents do not grant your HOA board
                                                the authority to adopt new rules and regulations, any restrictions it
                                                adopts about house colors, for example, are most likely invalid.</p>
                                            <p><strong>HOA Board Member's Protection from Personal Liability:
                                                </strong>HOA board members are understandably concerned about their
                                                liability and the possibility of a lawsuit filed against them.
                                                Homeowners upset with the HOA can sue the board members individually and
                                                the HOA for many reasons, for example, if the HOA fails to maintain a
                                                common area properly or discriminates when enforcing a rule.</p>
                                            <p>The best protection against liability is for all board members to take
                                                the job seriously. Board members can avoid a breach of fiduciary duty by
                                                fully informing themselves before making decisions, ensuring they have
                                                the authority to act, and always acting in the best interests of the
                                                HOA.</p>

                                            <p>In addition, some forms of protection from personal liability are
                                                available from your state law, your development's governing documents,
                                                and your HOA's D&O insurance.</p>
                                            <p><strong>About HOA Insurance That Protects Board Members: </strong>Your
                                                HOA's insurance can
                                                also provide significant liability protection for board members. General
                                                liability insurance is not enough, though. Liability insurance protects
                                                the HOA from personal injury or property damage claims. Therefore, your
                                                HOA should have adequate Director's and Officer's (D&O) insurance to
                                                protect board members in claims for the breach of fiduciary duty.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="CommunitytableData" colspan="2">
                                            <p><strong>Why an HOA Property Manager is Important</strong></p>
                                            <p>Managing an HOA, particularly a large association, can be challenging.
                                                While an HOA board is responsible for this undertaking, board members
                                                face some difficulties. They are volunteers with personal and
                                                professional lives, so time is generally limited. Board members also
                                                don’t tend to have the skills needed for the job since they are
                                                volunteers..</p>
                                            <p>That is where an HOA property manager comes in. Also known as a community
                                                association manager or a condo association manager, an HOA property
                                                manager essentially shoulders most of the board’s burden. But, rather
                                                than acting autonomously, the HOA manager works with the board to manage
                                                the community. It is worth noting that the HOA manager is not a part of
                                                the board.</p>
                                            <p><strong>The Duties and Responsibilities of an HOA Property Manager:
                                                </strong>An HOA
                                                property manager does many tasks that keep the community functioning in
                                                good condition. These tasks include common area maintenance, invoicing
                                                and collections, financial management, homeowner and board
                                                communications, enforcing rules, managing vendors, reporting, board
                                                education and assistance, risk management, and administrative duties.
                                            </p>
                                            <p><strong>Common Area Maintenance: </strong>HOA property managers must
                                                ensure all common
                                                areas and amenities remain clean and well-maintained. This means
                                                conducting site inspections, fielding maintenance requests, and hiring
                                                vendors when necessary. Safety is also a top priority, as many things
                                                can happen to residents using common areas. For example, any injuries
                                                that occur on-site could hold the association liable; the association
                                                can be sued since they are ultimately responsible.</p>

                                            <p>Additionally, preventive maintenance is a top priority and is always
                                                more critical than corrective maintenance. By following a preventative
                                                maintenance schedule, managers can keep structures and equipment
                                                functional for longer. It also avoids breakdowns, which can cost the
                                                association a lot more money to fix. If any special projects are
                                                underway, the manager is responsible for carrying out the contracts,
                                                ensuring the project remains on schedule and the HOA stays on budget.
                                            </p>

                                            <p><strong>Invoicing and Collections: </strong>Homeowners associations
                                                collect regular fees
                                                from homeowners and use those fees to pay expenses. The HOA property
                                                manager is responsible for sending out invoices to homeowners ahead of
                                                time and making collection efforts. This includes any collections done
                                                online and offline. The manager should also track and manage
                                                delinquencies to keep the association and its members in good standing.
                                                This could mean imposing late fees, offering payment plans, placing a
                                                lien, and initiating foreclosure proceedings.</p>

                                            <p><strong>Homeowner and Board Communication: </strong>Communication plays a
                                                significant role
                                                in the success of an HOA community. The HOA manager is responsible for
                                                keeping an open line of communication, whether with residents or the HOA
                                                board members. This includes sending out notices on time, expediting the
                                                creation and distribution of newsletters, and ensuring residents have
                                                easy access to relevant information. It also means answering phones and
                                                emails for any concerns coming from homeowners.</p>

                                            <p><strong>Enforcing Rules: </strong>Every HOA property manager should
                                                understand the
                                                association’s bylaws and CC&Rs, allowing them to enforce the rules
                                                consistently, thoroughly, and accurately. For example, part of the job
                                                description is performing frequent inspections for violations, sending
                                                out violation notices, and organizing disciplinary hearings. The
                                                property manager does not have the final say on these matters. Property
                                                managers guide the board. They must defer to the board’s decision and
                                                implement it accordingly.</p>

                                            <p>Additionally, an HOA property manager should have more than just a
                                                working knowledge of the state laws. That doesn’t mean they should be
                                                lawyers, but a deep understanding of the federal and state laws that
                                                apply to HOAs is critical in ensuring the association keeps out of legal
                                                trouble. Some examples of federal laws that apply to HOAs include the
                                                Fair Housing Act and the Freedom to Display the American Flag Act.</p>

                                            <p><strong>Vendor Management: </strong>Homeowners associations don’t work
                                                alone. Often, it
                                                is necessary to employ outside help to carry out different functions.
                                                For instance, an HOA would need to hire a contractor or a landscaper for
                                                repairs. In addition, the property manager would be responsible for
                                                preparing requests for proposals (RFPs), helping the board members
                                                choose a vendor, coordinating with existing vendors, and ensuring
                                                vendors do a good job.</p>

                                            <p><strong>Financial Management and Reporting: </strong>For many homeowners
                                                associations,
                                                financial management is the most challenging aspect of HOA management.
                                                An HOA property manager can take over this task. The manager would be in
                                                charge of all accounting and bookkeeping. They would also prepare the
                                                monthly financial statements for the board’s review. Managers can also
                                                help the board plan and stay on budget.
                                            <p>

                                            <p>Reserve studies, though, are often outside of an HOA property manager’s
                                                expertise. For example, the manager would need to hire a professional
                                                but can understand the study. An HOA property manager can also prepare
                                                the taxes for filing.</p>

                                            <p>Educating and Assisting the Board: Board members don’t generally have
                                                the skills and knowledge needed for successful community management.
                                                Fortunately, an HOA property manager can ensure the board understands
                                                and implements best practices. They can also help assess the current
                                                policies of the community and recommend any changes. After all, some
                                                boards create policies on a whim without considering whether or not they
                                                comply with state law and the association’s governing documents. In
                                                addition, some management companies also offer board education and
                                                training programs.</p>

                                            <p><strong>Managing Board Risk: </strong>Homeowners associations assume a
                                                lot of risks. The
                                                property manager’s job is to help mitigate those risks through careful
                                                evaluation, planning, and knowledge. For example, a property manager can
                                                help the board prepare for the worst-case scenario by determining the
                                                possible risks. This also means ensuring the association has the right
                                                insurance policies in place.</p>

                                            <p><strong>Administrative Duties: </strong>Aside from those listed above,
                                                there are several
                                                other tasks property managers have to fulfill that are more
                                                administrative. These include planning and attending board meetings,
                                                reviewing contracts, answering homeowner questions and concerns,
                                                after-hours emergency services, organizing events, and maintaining the
                                                community website and newsletter.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="CommunitytableData" colspan="2"><strong>ADDRESSES IN SPECTRUM WEST
                                                CONDOMINIUM ASSOCIATION, INC.</strong></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>
            
            </div>
        </div>
            @include('./modal/questionModal')
            @include('partials/footer')
            
            