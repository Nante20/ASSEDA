<div class="header">
    <ul class="nav user-menu">

         <li class="nav-item dropdown has-arrow">
             <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
               <span class="user-img"
               ><img
                       class="rounded-circle"
                       src="{{ asset('back_auth/assets/profile/'.\Illuminate\Support\Facades\Auth::user()->image) }}"
                       width="31"
                       alt="Administrateur"
                   /></span>
             </a>
             <div class="dropdown-menu">
                 <div class="user-header">
                     <div class="avatar avatar-sm">
                         <img
                             src="{{ asset('back_auth/assets/profile/'.\Illuminate\Support\Facades\Auth::user()->image) }}"
                             alt="User Image"
                             class="avatar-img rounded-circle"
                         />
                     </div>
                     <div class="user-text">
                         <h6>{{ \Illuminate\Support\Facades\Auth::user()->name }}</h6>
                         <p class="text-muted mb-0">Administrateur</p>
                     </div>
                 </div>
                 <a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a>
                 <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>

                 <form action="{{ route('logout') }}" method="POST">
                     @csrf
                     <button class="btn dropdown-item">Deconnexion</button>


                 </form>

             </div>
         </li>
     </ul>
     <div class="top-nav-search">
         <form>
             <input type="text" class="form-control" placeholder="Search here" />
             <button class="btn" type="submit">
                 <i class="fas fa-search"></i>
             </button>
         </form>
     </div>
 </div>
