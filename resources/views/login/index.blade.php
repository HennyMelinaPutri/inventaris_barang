 @extends('layout/apk')

 @section('konten')
     <style>
         .form-signin {
             max-width: 330px;
             padding: 1rem;
         }

         .form-signin .form-floating:focus-within {
             z-index: 2;
         }

         .form-signin input[type="email"] {
             margin-bottom: -1px;
             border-bottom-right-radius: 0;
             border-bottom-left-radius: 0;
         }

         .form-signin input[type="password"] {
             margin-bottom: 10px;
             border-top-left-radius: 0;
             border-top-right-radius: 0;
         }
     </style>

     <div>
         <div class="form-signin w-100 m-auto">
             <form action="/login/admin" method="POST">
                 @csrf
                 <h1 class="h3 mb-3 fw-bold">Login</h1>
                 <div class="form pt-2">
                     <label for="email" class="form-label fw-medium">Email</label>
                     <input name="email" type="email" value="{{ Session::get('email') }}" class="form-control"
                         id="floatingInput" placeholder="name@example.com">
                 </div>
                 <div class="form pt-3">
                     <label for="password" class="form-label fw-medium">Password</label>
                     <input name="password" type="password" class="form-control" id="floatingPassword"
                         placeholder="Password">
                 </div>
                 <button name="submit" class="btn btn-primary w-100 py-2 mt-4 fw-bold" type="submit">Login</button>
             </form>
         </div>
     </div>
 @endsection
