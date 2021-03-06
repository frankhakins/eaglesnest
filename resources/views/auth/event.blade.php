<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Stadium MIS  :: Register </title>
      <!-- Meta tags -->
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="keywords" content="Job search, company recruitment"
         />
      <script>
         addEventListener("load", function () { setTimeout(hideURLbar, 0); }, false); function hideURLbar() { window.scrollTo(0, 1); }
      </script>
      <!-- Meta tags -->
      <!--stylesheets-->
      <link href="{{ asset('auth/css/style.css') }}" rel='stylesheet' type='text/css' media="all">
      <!--//style sheet end here-->
      <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
   </head>
   <body>
      <div class="mid-class">
         <div class="art-right-w3ls">

            <h2>Register for Event - 
                 <a href="#" style="color: #EF3C3C">
                     <b> {{$event->title}} </b>
                </a>
            </h2>
            <form action="{{ route('registerEvent') }}" method="post">
                            @csrf
               <div class="main">
               @if(session()->get('error'))
                     <div class="alert alert-danger " >
                     <font color="red">
                        {{ session()->get('error') }}
                        </font>
                     </div>
               @endif

               @if(session()->get('success'))
                     <div class="alert alert-success " >
                     <font color="blue">
                        {{ session()->get('success') }}
                        </font>
                     </div>
               @endif
                  <div class="form-left-to-w3l">
                     <input type="text" name="email" placeholder="email" required autocomplete="email" autofocus>
                     <input type="hidden" name="event" value="{{$event->id}}">    
                  </div>
                  <div class="form-left-to-w3l ">
                     <input type="text" name="full_name" placeholder="Full Name" required >
                                 
                     <div class="clear"></div>
                  </div>

                  <div class="form-left-to-w3l ">
                     <input type="number" name="num" placeholder="Ticket count" required min="0" max="{{$event->num}}" >
                                 
                     <div class="clear"></div>
                  </div>
               </div>
               
               <!-- <div class="right-side-forget">
                  <a href="{{route('reset')}}" class="for">Forgot password...?</a>
               </div> -->
               <div class="clear"></div>
               <div class="btnn">
                  <button type="submit" style="background-color: #EF3C3C; border-radius: 12px;">Register For Event</button>
               </div>
            </form>
            <!-- <div class="w3layouts_more-buttn" >
               <h3>Don't Have an account..?
                  <a href="https://foteinotalento.com/sign-up">Sign Up Here
                  </a>
               </h3>
            </div> -->

         </div>
         <!-- <div class="art-left-w3ls" style="background: white">
            <h1 class="header-w3ls" style="color: #761b18;">
            Welcome to Stadium MIS
            </h1>
         </div> -->
      </div>
      <footer class="bottem-wthree-footer">
         <p>
            © 2020 Stadium MIS LTD All Rights Reserved | 
         </p>
      </footer>
   </body>
</html>
