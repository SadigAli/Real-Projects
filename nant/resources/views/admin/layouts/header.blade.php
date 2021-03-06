@php
    $messages = App\Models\Message::all()
    ->where('read', false)
    ->take(3)
    ->sortDesc();

    $applies = App\Models\Apply::all()
    ->where('read', false)
    ->take(3)
    ->sortDesc();
@endphp
<div id="theme-settings" class="settings-panel">
    <i class="settings-close mdi mdi-close"></i>
    <p class="settings-heading">SIDEBAR SKINS</p>
    <div class="sidebar-bg-options selected" id="sidebar-default-theme">
      <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
    </div>
    <div class="sidebar-bg-options" id="sidebar-dark-theme">
      <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
    </div>
    <p class="settings-heading mt-2">HEADER SKINS</p>
    <div class="color-tiles mx-0 px-4">
      <div class="tiles light"></div>
      <div class="tiles dark"></div>
    </div>
  </div>
  <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
    <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
      <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="index.html"><img src="{{ asset('assets/images/logo-mini.svg') }}" alt="logo" /></a>
      <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
        <i class="mdi mdi-menu"></i>
      </button>
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
            <i class="mdi mdi-bell-outline"></i>
            @if ($applies->count() != 0)<span class="count count-varient1">{{ $applies->count() }}</span>@endif
          </a>
          <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list" aria-labelledby="notificationDropdown">
            <h6 class="p-3 mb-0">Applies</h6>
            @foreach ($applies as $apply)
            <a href="/admin-user/apply/detail/{{ $apply->id }}" class="dropdown-item preview-item">
                <div class="preview-item-content">
                    <p class="mb-0" style="font-weight: 500"> {{ $apply->person->name}} {{ $apply->person->lastname}}<span class="text-small text-muted"> applies for vacancy</span>
                    </p>
                </div>
            </a>
        @endforeach
            <div class="dropdown-divider"></div>
            <p class="p-3 mb-0"><a href="/admin-user/apply">View all activities</a></p>
          </div>
        </li>
        <li class="nav-item dropdown d-none d-sm-flex">
          <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown">
            <i class="mdi mdi-email-outline"></i>
            @if ($messages->count() != 0)
                <span class="count count-varient2">{{ $messages->count() }} </span>
            @endif
          </a>
          <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list" aria-labelledby="messageDropdown">
            <h6 class="p-3 mb-0">Messages</h6>
            @if ($messages->count() == 0)
                        <div class="preview-item">
                            <div class="preview-item-content flex-grow">No unread messages</div>
                        </div>
                    @else
                        @foreach ($messages as $message)
                            <a href="message/detail/{{ $message->id }}" class="dropdown-item preview-item">
                                <div class="preview-item-content flex-grow">
                                    <span class="badge badge-pill badge-success">{{ $message->name }}</span>
                                    <p class="text-small text-muted ellipsis mb-0">
                                        {{ Str::substr($message->message, 0, 25) }}</p>
                                </div>
                                {{-- <p class="text-small text-muted align-self-start">
                                    {{ date('d/m h:i', strtotime($message->time)) }} </p> --}}
                            </a>
                        @endforeach
                        <h6 class="p-3 mb-0">
                            <a href="/admin-user/message">See all messages</a>
                        </h6>
                    @endif
          </div>
        </li>
        <li class="nav-item nav-search border-0 ml-1 ml-md-3 ml-lg-5 d-none d-md-flex">
          <form class="nav-link form-inline mt-2 mt-md-0">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search" />
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
            </div>
          </form>
        </li>
      </ul>
      <ul class="navbar-nav navbar-nav-right ml-lg-auto">
        <li class="nav-item dropdown d-none d-xl-flex border-0">
          <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown">
            @if (App::getLocale()=='en')
                <i class="mdi mdi-earth"></i> English </a>
            @else
                <i class="mdi mdi-earth"></i> Az??rbaycanca </a>
            @endif
          <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
            <a class="dropdown-item" href="#"> French </a>
            <a class="dropdown-item" href="#"> Az??rbaycanca </a>

          </div>
        </li>
        <li class="nav-item nav-profile dropdown border-0">
          <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
            <img class="nav-profile-img mr-2" alt="" src="{{ asset('assets/images/faces/face1.jpg') }}" />
            <span class="profile-name">Henry Klein</span>
          </a>
          <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
            <a class="dropdown-item" href="#">
              <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
            <a class="dropdown-item" href="#">
              <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </nav>
