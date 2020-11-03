@extends('layouts.app')

@section('content')
    <style>
        .carousel-item {
            height: 80vh;
            min-height: 350px;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
  <div class="row">
      <div class="col-md-7">
        <h1 class="display-4">Webdoc – Online consultation with doctors based in India</h1>
        <p>
            As India's largest group of private hospitals, Hirslanden offers the medical expertise of its doctors in consultations taking place by telephone or video (telemedicine). This allows Hirslanden to offer security, convenience and optimal treatment recommendations wherever you might be – including in your own home.

Do you need a consultation with a specialist? Do you have symptoms and are unsure about a medical diagnosis? Would you like a doctor's advice about a medical problem? We can help you with a telemedicine consultation or remote diagnosis. An online consultation gives you fast, easy access to our network of doctors. We would be delighted to advise you about the right specialist for a telemedical consultation and support, and organise an appointment for you.
        </p>
      </div>
      <div class="col-md-5">
          <img class="rounded" width="500" height="300" src="https://images.unsplash.com/photo-1512428559087-560fa5ceab42?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="">
    </div>
  </div>
 <br><br>

 <div class="jumbotron bg-light">
    <h2 class="text-center">Procedure</h2>
    <h3>Step 1: Send us an enquiry using the contact form</h3>
    <p>You contact us with your medical issue and questions. We would be pleased to tell you what information and documents we need. We will then suggest the specialist best suited to deal with your problem. You can learn about the medical background and expertise of this doctor from their online CV</p>
    <h3>Step 2: Make an appointment</h3>
    <p>he second step is to agree an appointment for a telemedical consultation with the relevant physician via a telephone or video call. As the basis for this service we recommend a 30-minute consultation, in which we offer advice, discuss your issue and answer your questions on diagnosis, treatment and medication. As your doctor has prepared for this appointment using the medical documentation you provided, you will receive competent and efficient information on your concerns.</p>
    <h3>Step 3: Meet your doctor online</h3>
    <p>The consultation takes place via a video or telephone call on the date you require. Standard transmission technologies are available for this purpose.</p>
 </div>

 <div class="jumbotron bg-light">
    <h2 class="text-center">Benefits</h2>
    <ul>
        <li>
            Easy access to a network of doctors from the largest group of private hospitals in India – true convenience from your own home
        </li>
        <br>
        <li>
            Time saving: Shortly before the consultation the patient uses a secure connection to contact our doctors; so no time spent waiting or travelling
        </li>
        <br>
        <li>
            The reduction in time resulting for patients allows medical consultations to be held at lower cost
        </li>
        <br>
        <li>
            Patients who are no longer mobile have ready access to the knowledge of Hirslanden's doctors
        </li>
        <br>
        <li>
            Patients can be provided with medical advice and support more efficiently and regularly as online consultations are possible without major effort
        </li>
    </ul>
 </div>

 <div class="jumbotron bg-light text-center">
    <h2>Network of doctors</h2>
    <p>
        Hirslanden has a network of over 2 800 doctors in Switzerland who can provide diagnosis and reliable treatment even for complex illnesses. They offer highly specialised medicine at university level.

We have put together for international patients a selection of doctors, whose qualities include many years of experience and highly specialised knowledge. They also meet extremely high standards in terms of their language skills and cultural understanding. Hirslanden International would be delighted to advise you on selecting a suitable specialist.
    </p>
 </div>

 <footer class="page-footer font-small blue pt-4">
     <div>
        <i class="material-icons">mail_outline</i>
        support@teledoc.com
     </div>

     <div>
        <i class="material-icons">phone</i>
        +91 9987456378
     </div>
 </footer>
@endsection