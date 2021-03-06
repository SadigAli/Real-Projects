@php
$setting = App\Models\Setting::all()->first();
@endphp


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Nant.az</title>
    <link rel="stylesheet" href="./css/loading.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="icon" href="./img/colored_logo_nant.png">
</head>

<body onload="setTimeout(myFunction, 1500);">
    <div class="loading">
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <div class="refresh">
        <!-- ----- Header----- -->
        <header>
            <div class="container">
                <img class="header_logo" src="{{ asset('storage/images/' . $setting->logo) }}">
                <nav>
                    <div class="nav1">

                        <a href="{{ $setting->linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="{{ $setting->facebook }}" target="_blank" class="icon"><i class="fab
                                    fa-facebook-f"></i></a>
                        <a href="{{ $setting->instagram }}" target="_blank" class="icon"><i class="fab
                                    fa-instagram"></i></a>
                        <a href="{{ $setting->youtube }}" target="_blank" class="icon"><i
                                class="fab fa-youtube"></i></a>
                        <form action="/locale" method="POST">
                            @csrf
                            <select class="hidden" name="lang">
                                @if (App::getLocale() == 'en')
                                    <option value="az">Aze</option>
                                    <option value="en" selected>Eng</option>0
                                    <option value="ru">Ru</option>
                                @elseif(App::getLocale() == 'az')
                                    <option value="az" selected>Aze</option>
                                    <option value="en">Eng</option>
                                    <option value="ru">Ru</option>
                                @else
                                    <option value="az">Aze</option>
                                    <option value="en">Eng</option>
                                    <option value="ru" selected>Ru</option>
                                @endif
                            </select>
                        </form>
                    </div>
                    <div class="nav2">
                        <form action="/locale" method="POST">
                            @csrf
                            <select class="hidden" name="lang">
                                @if (App::getLocale() == 'en')
                                    <option value="az">Aze</option>
                                    <option value="en" selected>Eng</option>0
                                    <option value="ru">Ru</option>
                                @elseif(App::getLocale() == 'az')
                                    <option value="az" selected>Aze</option>
                                    <option value="en">Eng</option>
                                    <option value="ru">Ru</option>
                                @else
                                    <option value="az">Aze</option>
                                    <option value="en">Eng</option>
                                    <option value="ru" selected>Ru</option>
                                @endif
                            </select>
                        </form>
                        <ul>
                            <li><a href="/">{{ __('home.home') }}</a></li>
                            <li><a href="/haqqimizda">{{ __('home.about') }}</a></li>
                            <li><a href="/qalareya">{{ __('home.gallery') }}</a></li>
                            <li><a href="/partnyorlar">{{ __('home.partners') }}</a></li>
                            <li><a href="/vakansiyalar">{{ __('home.vacancy') }}</a></li>
                            <li><a class="elaqe" href="/elaqe">{{ __('home.contact') }}</a></li>
                        </ul>
                        <img class="menubar" src="{{ asset('./img/right-menu-bars.svg') }}" alt="">
                        <input type="text" placeholder="Search...">
                    </div>
                </nav>
            </div>
        </header>


        <!-- -------- Tarix --------- -->
        <div class="tarix">
            <div class="container2">
                <div class="azerbaycan">
                    <div style="margin-top: 170px;" class="content nant-content">
                        <h3>{{ __('home.company_nant') }}</h3>
                        <br>
                        {{-- <p>
                            "NANT" MMC 2002-ci ild?? t??sis olunmu??dur. ??irk??timizin ??sas profili ??rzaq m??hsullar??n??n Az??rbaycana idxal?? v?? distribusiyas??d??r. NANT MMC Rusiyan??n, Indoneziyan??n, C??nub Koreyan??n, Yunan??stan??n, Ukraynan??n, apar??c?? istehsal ??irk??tl??rinin r??smi distribyutorudur.M??qs??dimiz idxal etdiyimiz m??hsullar?? Az??rbaycan??n b??t??n b??lg??l??rind?? yerl??????n h??r bir sat???? n??qt??sin?? ??atd??rmaqd??r. Bunun ??c??n g??cl?? sat???? v?? mer??endayzing komandam??z m??vcuddur.
                        </p> --}}

                        <p>{{ $setting->{'about_us_' . App::getLocale()} }}</p>

                    </div>
                    <div class="map">
                        @for ($i = 0; $i < $regions->count(); $i++)
                            <div class="area-{{ $i + 1 }}">
                                <img src="{{ asset($regions[$i]->image) }}" alt="">
                                <div class="icon {{ Str::lower($regions[$i]->name_en) }}">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                <!-- Pop-up box -->
                @foreach ($regions as $region)
                    <div id="{{ Str::lower($region->name_en) }}" class="popup-parent">
                        <div class="popup">
                            @if ($region->name_en!='Baku')
                                <h1>{{ $region->{'name_' . App::getLocale()} }} {{ __('home.region') }}</h1>
                                @else
                                <h1>{{ __('home.center') }}</h1>
                            @endif
                            <div class="melumat" style="flex-wrap: wrap">
                                    @foreach ($region->districts as $district)
                                        <div class="col-md-12" style="width: 33%">
                                            <p><i class="fas fa-check-circle"></i><span class="m??dir">{{ $district->name_az }}</span></p>
                                        </div>
                                    @endforeach
                            </div>
                            <button class="close close{{ $region->name_en }}" draggable="true">&times;</button>
                        </div>
                    </div>
                @endforeach
                <div id="karabag" class="popup-parent">
                    <div class="popup">
                        <h1>Qaraba?? {{ __('home.region') }}</h1>
                        <div class="melumat">
                            <p><i class="fas fa-exclamation-circle"></i></p>
                            <p>{{ __('home.karabakh') }}!</p>
                        </div>
                        <button class="close closeKarabakh" draggable="true">&times;</button>
                    </div>
                </div>
                <div id="naxcivan" class="popup-parent">
                    <div class="popup">
                        <h1>{{ $region->{'name_'.App::getLocale()} }} {{ __('home.region') }}</h1>
                        <div class="melumat">
                            <p><i class="fas fa-users"></i></p>
                            <p>{{ __('home.sub') }}</p>
                        </div>
                        <button class="close closeNakhchivan" draggable="true">&times;</button>
                    </div>
                </div>

                <h1>{{ __('home.about') }}</h1>
                @for ($i = 0; $i < $abouts->count(); $i++)
                    @if ($i % 2 == 0)
                        <div class="history_row_1 nant" style="margin-top: -25px">
                            <div class="main">
                                <div class="image" style="margin-top: 50px">
                                    <img src="{{ asset('storage/images/abouts/' . $abouts[$i]->image) }}">
                                </div>
                                {{-- <div class="year">{{ $abouts[$i]->year }}</div> --}}
                            </div>
                            <div class="content">
                                <h3>{{ $abouts[$i]->{'title_' . App::getLocale()} }}</h3>
                                <br>
                                <p>{!! $abouts[$i]->{'description_' . App::getLocale()} !!}</p>
                            </div>
                        </div>
                        @if ($i == 1)
                            <div class="dotted_line_1"></div>
                        @elseif ($i != $abouts->count()-1)
                            <div class="dotted_line_3"></div>
                        @endif
                    @else
                        <!-- -------- Pobeda --------- -->
                        @if ($i != $abouts->count() - 1)
                            <div class="history_row_2 pobeda" style="margin-top: -140px">
                                <div class="main">
                                    <div class="image">
                                        <img class="pobeda_mehsul_1"
                                            src="{{ asset('storage/images/abouts/' . $abouts[$i]->image) }}" alt="">
                                    </div>
                                    {{-- <div class="year">{{ $abouts[$i]->year }}</div> --}}
                                </div>
                                <div class="content">
                                    <h3>{{ $abouts[$i]->{'title_' . App::getLocale()} }}</h3>
                                    <br>
                                    @if (Str::length($abouts[$i]->{'description_' . App::getLocale()}) < 600)
                                        <p>{!! $abouts[$i]->{'description_' . App::getLocale()} !!}</p>
                                    @else
                                        <p>{!! Str::substr($abouts[$i]->{'description_' . App::getLocale()}, 0, 600) !!}</p>
                                    @endif
                                </div>
                            </div>
                        @else
                            <div class="history_row_2 pobeda" style="margin-top: -140px;margin-bottom:50px">
                                <div class="main">
                                    <div class="image">
                                        <img class="pobeda_mehsul_1"
                                            src="{{ asset('storage/images/abouts/' . $abouts[$i]->image) }}" alt="">
                                    </div>
                                    {{-- <div class="year">{{ $abouts[$i]->year }}</div> --}}
                                </div>
                                <div class="content">
                                    <h3>{{ $abouts[$i]->{'title_' . App::getLocale()} }}</h3>
                                    <br>
                                    @if (Str::length($abouts[$i]->{'description_' . App::getLocale()}) < 600)
                                        <p>{!! $abouts[$i]->{'description_' . App::getLocale()} !!}</p>
                                    @else
                                        <p>{!! Str::substr($abouts[$i]->{'description_' . App::getLocale()}, 0, 600) !!}</p>
                                    @endif
                                </div>
                            </div>
                        @endif
                        @if ($i != $abouts->count() - 1)
                            <div class="dotted_line_2"></div>
                        @endif
                    @endif
                @endfor

            </div>
        </div>


        <!-- -------- FOOTER --------- -->
        <footer>
            <div class="container3">
                <div class="footer_col_1">
                    <h2>{{ __('home.contact') }}</h2>
                    <section class="contact" id="contact">
                        <div class="content">
                            <div class="contactInfo">
                                <div class="contactInfoBx">

                                    <div class="box">
                                        <div class="icon">
                                            <i class="fas
                                                    fa-map-marker-alt"></i>
                                        </div>
                                        <div class="text">
                                            <h3>{{ __('home.adress') }}</h3>
                                            <p>{{ $setting->{'adress_' . App::getLocale()} }}</p>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="text">
                                            <h3>{{ __('home.phone') }}</h3>
                                            <p>{{ $setting->phone_1 }}</p>
                                            <p>{{ $setting->phone_2 }}</p>
                                            <p>{{ $setting->phone_3 }}</p>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="icon">
                                            <i class="far fa-envelope"></i>
                                        </div>
                                        <div class="text">
                                            <h3>Email</h3>
                                            <p>{{ $setting->email }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="footer_col_2">
                    <h2>{{ __('home.about') }}</h2>
                    <ul>
                        <li><a href="/">{{ __('home.home') }}</a></li>
                        <li><a href="/haqqimizda">{{ __('home.about') }}</a></li>
                        <li><a href="/qalareya">{{ __('home.gallery') }}</a></li>
                        <li><a href="/partnyorlar">{{ __('home.partners') }}</a></li>
                        <li><a href="/vakansiyalar">{{ __('home.vacancy') }}</a></li>
                        <li><a class="elaqe" href="/elaqe">{{ __('home.contact') }}</a></li>
                    </ul>
                </div>
                <div class="footer_col_3">
                    <div class="footer_logo">
                        <a href="#"><img src="{{ asset('storage/images/' . $setting->logo) }}"></a>
                    </div>
                    <div class="social">
                        <a href="{{ $setting->linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="{{ $setting->facebook }}" target="_blank" class="icon"><i class="fab
                                    fa-facebook-f"></i></a>
                        <a href="{{ $setting->instagram }}" target="_blank" class="icon"><i class="fab
                                    fa-instagram"></i></a>
                        <a href="{{ $setting->youtube }}" target="_blank" class="icon"><i
                                class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div class="copy">
                    <div class="hr"></div>
                    <p>{{ $setting->{'copyright_' . App::getLocale()} }}</p>
                </div>
            </div>
        </footer>
    </div>

    <script>
        var ref = document.querySelector(".refresh");
        var load = document.querySelector(".loading");
        ref.style.display = "none";

        function myFunction() {
            ref.style.display = "block";
            load.style.display = "none";
        }
    </script>
    <script src="./script/index.js"></script>
    <script src="./script/map.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).on('click', '.nav2 ul li', function() {
            $(this).addClass('active').siblings().removeClass('active');
        })
        $('form select').change(function() {
            $(this).parent().trigger('submit');
        });
    </script>
</body>

</html>
