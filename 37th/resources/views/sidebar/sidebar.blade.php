<div class="sidebar">
    <div class="sidebar-header">
      <div>
       
        <a href="http://themepixels.me/demo/cassie/index.html" class="sidebar-logo">
          {{-- <div class="avatar">
            <img src="../assets/img/img1.jpg" class="rounded-circle" alt="">
          </div> --}}<!-- avatar -->
          <span>Admin</span></a>
        <small class="sidebar-logo-headline">User</small>
      </div>
    </div><!-- sidebar-header -->
    <div id="dpSidebarBody" class="sidebar-body">
      <ul class="nav nav-sidebar">
        <li class="nav-label"><label class="content-label">Side Bar</label></li>
        <li class="nav-item @if(Route::current()->getName() =="email.view"  ||  Route::current()->getName() =="email.box") show @endif">
          <a href="#" class="nav-link with-sub @if(Route::current()->getName() =="email.view" ||  Route::current()->getName() =="email.box") active @endif"><i data-feather="box"></i> Mail</a>
          <ul class="nav nav-sub">
            <li class="nav-sub-item"><a href="email-view" class="nav-sub-link  @if(Route::current()->getName() =="email.view") active @endif">Email Sender</a></li>
            <li class="nav-sub-item"><a href="email-box" class="nav-sub-link  @if(Route::current()->getName() =="email.box") active @endif">Mail Box</a></li>

          </ul>
        </li>
      </ul>

      <ul class="nav nav-sidebar">
        <li class="nav-item"><a href="export-view" class="nav-link  @if(Route::current()->getName() =="export.view") active @endif" ><i class="fa fa-table" aria-hidden="true"></i> Export Data</a></li>
      </ul>
      
      <ul class="nav nav-sidebar">
        <li class="nav-item"><a href="exportParticipantsView" class="nav-link  @if(Route::current()->getName() =="exportParticipants.view") active @endif" ><i class="fa fa-users" aria-hidden="true"></i> Export Participant Data</a></li>
      </ul>
      <ul class="nav nav-sidebar">
        <li class="nav-item"><a href="qr-generator" class="nav-link  @if(Route::current()->getName() =="qr-generator") active @endif" ><i class="fa fa-qrcode" aria-hidden="true"></i> QR Code</a></li>
      </ul>

      <ul class="nav nav-sidebar">
        <li class="nav-item"><a href="dashboard" class="nav-link  @if(Route::current()->getName() =="dashboard") active @endif" ><i class="fa fa-book" aria-hidden="true"></i>Monitoring</a></li>
      </ul>


      <hr class="mg-t-30 mg-b-25">

      <ul class="nav nav-sidebar">
        <li class="nav-item"><a href="logout" class="nav-link"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
      </ul>


    </div><!-- sidebar-body -->
  </div><!-- sidebar -->
