@extends('project.layout.master')
@section('content')

<div class="abt-tp">
  <div class="container">
    <div class="col-md-12 no-padding">
      <div class="col-md-4 no-padding">
        <h2>Services & Sectors</h2>
      </div>
      <div class="col-md-8 no-padding">
        <div class="breadcrumb">
          <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li>Services & Sectors</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="ser parallax-three clearfix">
  <div class="container">
    <div class="col-md-12 no-padding">
      <div class="ser-tittle"><h2>Services</h2><p>Our firm characterizes its services as either non-contentious or contentious. </p></div>
      <div class="row">
        <div class="col-md-7">
          <h4>Non-Contentious work</h4>
          <p>Our firm offers services as per consultation agreement, which covers all non-contentious work, requested by our clients. During the contract period, our professionals have been trained to avoid any risks that our client could go through and to avoid disputes and provide smart and cost efficient tools for dispute prevention. Contentious work in which no litigation/lawsuit is involved. Usually includes services such as: </p>
          <div class="ser-rgt">
            <ul>
              <li> Providing and drafting legal advice.</li>
              <li> Potential Lawsuit legal advice.</li>
              <li> Drafting and reviewing correspondences and legal notices.</li>
              <li> Drafting and reviewing contracts and agreements.</li>
              <li> Representation in meetings and negotiation.</li>
              <li> Legal representation in Governmental Bodies.</li>
              <li> Mediation.</li>
              <li> Legal translation.</li>
              <li> Advise and notify updates on current relevant laws and governmental regulations.</li>
            </ul>
          </div>
        </div>

        <div class="col-md-5">
          <h4>Contentious work</h4>
          <p>When however a dispute arises we are indeed the best placed to advice. We have advised clients in a significant number of litigations and Arbitrations, and we take pride in having obtained numerous successful decisions and awards. Our firm provides Contentious services such as </p>
          <div class="ser-rgt">
            <ul>
              <li>Litigation / Court cases.</li>
              <li>Arbitration.</li>
              <li>IPR registration.</li>
              <li>Company establishment and registration.</li>
              <li>Legal services of all kinds.</li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>


<div class="sector">
  <div class="container">
    <div class="col-md-12 no-padding">
      <ul class="clearfix">
        <li><a href="" data-modal="#modal0" class="modal__trigger"><h2>Sectors</h2></a></li>
        <li><h3>Our aim is to provide legal services at a professional level, offering effective solutions in the following areas:</h3></li>

        @foreach($services as $service)
        <li id="sector-{{$service->id}}"><a href="" data-modal="#modal{{$service->id}}" class="modal__trigger"><img src="{{$service->imageUrl()}}"><h4>{{$service->title}}</h4></a></li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
<div id="modal0" class="krew-modal modal__bg" role="dialog" aria-hidden="true">
  <div class="modal__dialog">
    <div class="modal__content clearfix">
      <h1>Sectors</h1>
      <div class="col-md-12 no-padding">
       <div class="row">
        <div class="col-md-6">
          <ul>
            @foreach($services as $service)
            <li>{{$service->title}}</li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>


    <!-- modal close button -->
    <a href="" class="modal__close demo-close">
      <svg class="" viewBox="0 0 24 24">
        <path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z" />
        <path d="M0 0h24v24h-24z" fill="none" />
      </svg>
    </a>

  </div>
</div>
</div>

@foreach($services as $service)
<div id="modal{{$service->slug}}" class="krew-modal modal__bg" role="dialog" aria-hidden="true">
  <div class="modal__dialog">
    <div class="modal__content sa">
      <h1>{{$service->title}}</h1>
      <p>{!!$service->content!!}</p>
      <!-- modal close button -->
      <a href="" class="modal__close demo-close">
        <svg class="" viewBox="0 0 24 24">
          <path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z" />
          <path d="M0 0h24v24h-24z" fill="none" />
        </svg>
      </a>

    </div>
  </div>
</div>
@endforeach

{{--}}
<div id="modal" class="krew-modal modal__bg" role="dialog" aria-hidden="true">
  <div class="modal__dialog">
    <div class="modal__content sa">
      <h1>Arbitration</h1>
      <p>We take pride with the awards that we achieved in the Arbitration disputes that we handled, both local and international through our experienced lawyers specializing in Arbitration, our firm offers services and areas such as but not limited to;</p>

      <ul>
        <li>Drafting Arbitration agreements.</li>
        <li>Providing and drafting legal advice to all matters related to Arbitration.</li>
        <li>Commercial Arbitration.</li>
        <li>Construction Arbitration disputes.</li>
        <li>Sport Arbitration.</li>
        <li>Representing clients before Arbitration disputes.</li>
        <li>Execution of the Arbitration Award in the Enforcement courts.</li>
        <li>Recourse Annulment/ Invalidation of an Arbitration Award.</li>
        <li>Handling Arbitration disputes in many Arbitration institutions such as;</li>
        <li>International Chamber of Commerce (ICC)</li>
        <li>Qatar International Court and Dispute Resolution Centre (QICRRC).</li>
        <li>GCC Commercial Arbitration Centre.</li>
        <li>Dubai International Financial Centre (DIFC).</li>
        <li>London Court of International Arbitration (LCIA).</li>
        <li>The Court of Arbitration for Sport (CAS).</li>
      </ul>

      <!-- modal close button -->
      <a href="" class="modal__close demo-close">
        <svg class="" viewBox="0 0 24 24">
          <path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z" />
          <path d="M0 0h24v24h-24z" fill="none" />
        </svg>
      </a>

    </div>
  </div>
</div>

<div id="modal1" class="krew-modal modal__bg" role="dialog" aria-hidden="true">
  <div class="modal__dialog">
    <div class="modal__content scc ">
      <div class="clearfix">
        <h1>Corporate & Commercial</h1>
        <p>We provide unique legal corporate and commercial services to companies and institutions from small to large organizations. We make sure our clients are more than satisfied with these services. Our vision is to offer informed advice and a professional legal representation that allows policy makers and boards to achieve their goals while minimizing risks associated with the law. Areas and services we provide such as;</p>
        <div class="row">
          <ul class="col-md-6">
            <li>Investments, Licensing and Franchising.</li>
            <li>Agency and Distribution.</li>
            <li>Manufacturing Agreements.</li>
            <li>Supply Contracts.</li>
            <li>Joint Ventures.</li>
            <li> Shareholdings.</li>
            <li>Mergers & Acquisitions.</li>
            <li>Corporate Transactions.</li>
            <li>Risk Management.</li>
            <li>Company establishment and registration.</li>

          </ul>

          <ul class="col-md-6">

            <li>Article of Associations and Memorandum of Agreements.</li>
            <li>Corporate Restructuring.</li>
            <li>Patents, Trademark, Copy Right (IPR).</li>
            <li>Insurance.</li>
            <li>Taxes.</li>
            <li>Alternative Dispute Resolution (ADR) such as Negotiation, Mediation and Arbitration.</li>
            <li>Litigation.</li>
            <li>Corporate and commercial legal advice of all kinds.</li>
            <li>Drafting all types of Commercial & Corporate contracts and agreements.</li>

          </ul>
        </div>
      </div>

      <!-- modal close button -->
      <a href="" class="modal__close demo-close">
        <svg class="" viewBox="0 0 24 24">
          <path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z" />
          <path d="M0 0h24v24h-24z" fill="none" />
        </svg>
      </a>

    </div>
  </div>
</div>

<div id="modal2" class="krew-modal modal__bg" role="dialog" aria-hidden="true">
  <div class="modal__dialog">
    <div class="modal__content sbf">
      <h1>Banking & Finance</h1>
      <p>Banking and Finance is an important aspect for companies and organizations, within this we take special measures to ensure the satisfaction of our clients through our professionals and auditors by providing a one of a kind service. We provide services in areas such as but not limited to;</p>
      <ul>
        <li>Real Estate finance.</li>
        <li>Project finance.</li>
        <li>Islamic Finance.</li>
        <li>Corporate finance.</li>
        <li>Anti money laundering.</li>
        <li>Banking.</li>
        <li>Loans.</li>
        <li>Litigation in matters related to banking and finance.</li>

      </ul>

      <!-- modal close button -->
      <a href="" class="modal__close demo-close">
        <svg class="" viewBox="0 0 24 24">
          <path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z" />
          <path d="M0 0h24v24h-24z" fill="none" />
        </svg>
      </a>

    </div>
  </div>
</div>

<div id="modal3" class="krew-modal modal__bg" role="dialog" aria-hidden="true">
  <div class="modal__dialog">
    <div class="modal__content sec">
      <h1>Engineering & Construction </h1>
      <p>The importance of contracts of the International Federation of Consulting Engineers is derived from the models of contracts approved by global organizations concerned with the issues faced by engineers in the execution of construction contracts. As a result, the development of this industry and the need to find pre-contractual foundations to overcome these issues. The implementation of such contracts, which affect the process of contracting with the employers of projects, reflected positively on the development and construction.</p>
      <p>Our firm provides legal services and adequate legal protection to our clients in projects and the implementation of such contracts, including but not limited to;</p>

      <ul>
        <li>Working with project managers, engineers and contractors in the projects in all legal related matters.</li>
        <li>Drafting and reviewing all types of construction contracts.</li>
        <li>Providing legal services to all parties such as; employers, main contractors and subcontractors.</li>
        <li>FIDIC contracts.</li>
        <li>Supplying contracts.</li>
        <li>Infrastructures.</li>
        <li>Operation and maintenance contracts.</li>
        <li>Design related contracts.</li>
        <li>Legal advice in all matters related to construction potential disputes.</li>
        <li>Construction and engineering disputes (Litigation / Arbitration).</li>
      </ul>

      <!-- modal close button -->
      <a href="" class="modal__close demo-close">
        <svg class="" viewBox="0 0 24 24">
          <path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z" />
          <path d="M0 0h24v24h-24z" fill="none" />
        </svg>
      </a>

    </div>
  </div>
</div>

<div id="modal6" class="krew-modal modal__bg" role="dialog" aria-hidden="true">
  <div class="modal__dialog">
    <div class="modal__content slr">
      <h1>Labour & Employment</h1>
      <p>Labour law is one of the important aspects in the relationship between an Employer and Employees and their organization, in which they have to make sure they are aware of all their rights and duties towards each other within the law. We provide special services to all clients within Qatar’s Labour Law such as;</p>
      <ul>
        <li>Legal advice on Employers and Employees rights in all matters.</li>
        <li>Drafting, reviewing Employment Contracts and Agreements.</li>
        <li>Administrative Law and Employment Rights.</li>
        <li>Labour and Employment Litigation.</li>
      </ul>

      <!-- modal close button -->
      <a href="" class="modal__close demo-close">
        <svg class="" viewBox="0 0 24 24">
          <path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z" />
          <path d="M0 0h24v24h-24z" fill="none" />
        </svg>
      </a>

    </div>
  </div>
</div>

<div id="modal7" class="krew-modal modal__bg" role="dialog" aria-hidden="true">
  <div class="modal__dialog">
    <div class="modal__content pre">
      <h1>Property and Real Estate</h1>
      <p>The real estate business is one of the most vital sectors that always improves and develops the investment in Qatar, we provide adequate legal protection to our clients and insure their benefits. </p>
      
      <p>Our services cover areas such as but not limited to;</p>
      
      <ul>
        <li>Rental and leasing.</li>
        <li>Sale of property.</li>
        <li>Residential properties.</li>
        <li>Commercial properties.</li>
        <li>Retail properties.</li>
        <li>Land and real estate mortgages.</li>
        <li>Property and real estate investments.</li>
        <li>Property and real estate Auctions. </li>
        <li>Property and real Estate developments.</li>
        <li>Construction of properties.</li>
        <li>Contracting and subcontracting.</li>
        <li>Drafting and reviewing all kinds of contracts.</li>
        <li>Land law.</li>
        <li>Wills and Trusts.</li>
        <li>Litigation.</li> 
      </ul>
      

      <!-- modal close button -->
      <a href="" class="modal__close demo-close">
        <svg class="" viewBox="0 0 24 24">
          <path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z" />
          <path d="M0 0h24v24h-24z" fill="none" />
        </svg>
      </a>

    </div>
  </div>
</div>

<div id="modal4" class="krew-modal modal__bg" role="dialog" aria-hidden="true">
  <div class="modal__dialog">
    <div class="modal__content sml">
      <h1>Maritime Law </h1>
      <p>We achieved judgments for our clients whether they are located in or aboard the country, the maritime sector is important for those client who are involved frequently with Cargos and Shipments etc. We represent our clients locally and internationally and provide services in matters involving but not limited to;</p>

      <ul>
        <li>Collision.</li>
        <li>Cargo loss.</li>
        <li>Workers compensation.</li>
        <li>Insurance coverage related maters.</li>
        <li>Delayed Shipments.</li>
        <li>Damaged Shipments.</li>
        <li>Maritime commercial disputes.</li>
      </ul>

      <!-- modal close button -->
      <a href="" class="modal__close demo-close">
        <svg class="" viewBox="0 0 24 24">
          <path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z" />
          <path d="M0 0h24v24h-24z" fill="none" />
        </svg>
      </a>

    </div>
  </div>
</div>

<div id="modal5" class="krew-modal modal__bg" role="dialog" aria-hidden="true">
  <div class="modal__dialog">
    <div class="modal__content liti">
      <h1>Litigation</h1>
      <p>Our team takes special measure when litigation is required, we make sure in going through all the stages before litigation by sending legal notices, negotiation and try settle matters peacefully.</p>
      <ul>
        <li>Litigation and Representation before and during disputes in courts</li>
        <li>We handle cases from any stage of a dispute.</li>
        <li>We ensure our clients are satisfied with and up to date with court hearings decisions and dates.</li>
        <li>We have the honour in representing and gaining the trust of many reputable companies both local and international. Gaining more than satisfying judgments in favour of our clients. We also represent individuals who work in a diverse variety of sectors.</li>

        
      </ul>

      <!-- modal close button -->
      <a href="" class="modal__close demo-close">
        <svg class="" viewBox="0 0 24 24">
          <path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z" />
          <path d="M0 0h24v24h-24z" fill="none" />
        </svg>
      </a>

    </div>
  </div>
</div>

<div id="modal8" class="krew-modal modal__bg" role="dialog" aria-hidden="true">
  <div class="modal__dialog">
    <div class="modal__content sc">
      <h1>Criminal</h1>
      <p>We represent individuals and organizations in criminal related matters within all stages of a dispute in addition to claiming compensation in the civil courts. Some of the services we provide are and related to;</p>
      <ul>
        <li>Violations, criminal offences.</li>
        <li>Financial cheque offences.</li>
        <li>Fraud.</li>
        <li>Robbery.</li>
        <li>Assault, battery and self-defence.</li>
        <li>Criminal negligence.</li>
        <li>False imprisonment and blackmail.</li>
        <li>Representation in Police Departments, Capital Security Department and Public Prosecution.</li>
        <li>Representation and litigation in the Criminal Court and the Traffic Department Court.</li>

      </ul>


      <!-- modal close button -->
      <a href="" class="modal__close demo-close">
        <svg class="" viewBox="0 0 24 24">
          <path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z" />
          <path d="M0 0h24v24h-24z" fill="none" />
        </svg>
      </a>

    </div>
  </div>
</div>

<div id="modal9" class="krew-modal modal__bg" role="dialog" aria-hidden="true">
  <div class="modal__dialog">
    <div class="modal__content ss">
      <h1>Sports</h1>
      <p>Sport is an important sector in the State of Qatar especially after winning the honor of hosting the FIFA World Cup 2022.</p>
      <p>
        Our professional team that consists of certified Arbitrators and lawyers specializing in this Area. Providing legal advices complying with the sport rules and regulations of the Olympic standard and FIFA applied to sportsmen.   
      </p>
      
      <ul>
        <li>Drafting and reviewing contracts and agreements between sport organizations, clubs, athletes and commercial agencies. </li>
        <li>Professional and Youth Players Club Transfers and agreements.</li>
        <li>Sport commercial activities.</li>
        <li>Sponsorship agreements.</li>
        <li>Media and Sports.</li>
        <li>Dispute settlements locally and internationally.</li>
        <li>Dispute representation in the local courts and the Court of Arbitration for Sport (CAS).</li>
      </ul>

      <!-- modal close button -->
      <a href="" class="modal__close demo-close">
        <svg class="" viewBox="0 0 24 24">
          <path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z" />
          <path d="M0 0h24v24h-24z" fill="none" />
        </svg>
      </a>

    </div>
  </div>
</div>
--}}


@endsection

@section('scripts')


<script type="text/javascript" src="{{url('project/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{url('project/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{url('project/js/waypoints.min.js')}}"></script> 
<script src="{{url('project/js/jquery.counterup.min.js')}}"></script> 
<script src="{{url('project/js/owl.carousel.js')}}" type="text/javascript"></script>
<script src="{{url('project/js/jquery.gridder.js')}}"></script> 
<script async src="{{url('project/js/widgets.js')}}" charset="utf-8"></script>
<script type="text/javascript" src="{{url('project/js/main.js')}}"></script>
<script src="{{url('project/js/modal.js')}}" type="text/javascript"></script> 


@endsection