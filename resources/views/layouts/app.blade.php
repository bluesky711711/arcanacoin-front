<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>dashboard</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"  />
    <link rel="stylesheet" type="text/css" href="/css/hover-min.css"  />
    <link rel="stylesheet" type="text/css" href="/css/animate.css"  />
    <link rel="stylesheet" type="text/css" href="/css/themify-icons.css"  />
    <link rel="stylesheet" type="text/css" href="/css/side_menu.css"  />
    <link rel="stylesheet" type="text/css"  href="/css/bootstrap-slider.css">
	  <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css"  />
    <link rel="stylesheet" type="text/css" href="fonts/Sitefonts/stylesheet.css"  />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/style2.css" />
		<script src="/js/jquery-2.1.4.min.js"></script>
</head>

<body class="dashbody">
    <div id="ui" class="ui ui-aside-compact">
        <!--header start-->
        <header id="header" class="ui-header">
            <div class="navbar-header">
                <a href="/" class="navbar-brand">
                    <span class="logo"><img src="images/coin_logo.png" alt="logo" class="img-responsive" style="height:40px;display:inline"/><img src="images/coin_logo_next.png" alt="logo" class="img-responsive" style="height:40px;display:inline;z-index:1000"/></span>
                    <span class="logo-compact"><img src="images/coin_logo.png" alt="admin_logo" style="height:50px"></span>
                </a>
            </div>
            <div class="navbar-collapse nav-responsive-disabled">
                <ul class="nav navbar-nav">
                    <li><a class="toggle-btn" data-toggle="ui-nav" href="javascript:void(0)"><i class="fa fa-navicon"></i></a></li>
                </ul>

                <div class="admin_title">
                    <h4>{{$page_name}}</h4>
                </div>

                <div class="admin_head_right">
                	<span>{{Auth::user()->name}} <img src="images/avator.jpg" alt="admin_img" class="img-responsive" style="height:40px"/></span>
                </div>

            </div>
        </header>
        <!--header end-->

        <!--sidebar start-->
        <aside id="aside" class="ui-aside">
            <ul class="nav" ui-nav="">
                <li>
                    <a href="/dashboard"><img src="/images/menu_dashboard.png" alt="menu_icons" class="img-responsive" /> <span>Dashboard</span></a>
                    <ul style="display: none;" class="nav nav-sub nav-sub--open">
                        <li class="active nav-sub-header"><a href="/dashboard"><span>Dashboard</span></a></li>
                    </ul>
                </li>
								<li>
                    <a href="/deposit"><img src="/images/menu_transaction.png" alt="menu_icons" class="img-responsive" /> <span>Deposit</span></a>
                    <ul style="display: none;" class="nav nav-sub nav-sub--open">
                        <li class="active nav-sub-header"><a href="/deposit"><span>Buy Coins</span></a></li>
                    </ul>
                </li>
								<li>
                    <a href="/transactions"><img src="/images/menu_wallet.png" alt="menu_icons" class="img-responsive" /> <span>Transactions</span></a>
                    <ul style="display: none;" class="nav nav-sub nav-sub--open">
                        <li class="active nav-sub-header"><a href="/transactions"><span>Transactions</span></a></li>
                    </ul>
                </li>
								<li>
										<a href="/viewreferral"><img src="/images/menu_rewards.png" alt="menu_icons" class="img-responsive" /> <span>Referral</span></a>
										<ul style="display: none;" class="nav nav-sub nav-sub--open">
												<li class="active nav-sub-header"><a href="/viewreferral"><span>Referral</span></a></li>
										</ul>
								</li>
								<li>
										<a href="/profile"><img src="/images/menu_profile.png" alt="menu_profile" class="img-responsive" style="width:24px;height:24px"/> <span>Profile</span></a>
										<ul style="display: none;" class="nav nav-sub nav-sub--open">
												<li class="active nav-sub-header"><a href="/profile"><span>Profile</span></a></li>
										</ul>
								</li>
                <li>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><img src="images/menu_logout.png" alt="menu_icons" class="img-responsive" /><span>Logout</span></a>
                    <ul style="display: none;" class="nav nav-sub nav-sub--open">
                        <li class="active nav-sub-header">
                          <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span>Logout</span></a>
                        </li>
                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
            <div class="side_footer">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
                <span>Share our Social  link</span>
            </div>
        </aside>
        <!--sidebar end-->
        @yield('content')
    </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/bootstrap-slider.min.js"></script>
<script>
    function getTimeRemaining(endtime) {
        var t = Date.parse(endtime) - Date.parse(new Date());
        var seconds = Math.floor((t / 1000) % 60);
        var minutes = Math.floor((t / 1000 / 60) % 60);
        var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
        var days = Math.floor(t / (1000 * 60 * 60 * 24));
        return {
            'total': t,
            'days': days,
            'hours': hours,
            'minutes': minutes,
            'seconds': seconds
        };
    }

    function initializeClock(id, endtime) {
        var clock = document.getElementById(id);
        var daysSpan = clock.querySelector('.days');
        var hoursSpan = clock.querySelector('.hours');
        var minutesSpan = clock.querySelector('.minutes');
        var secondsSpan = clock.querySelector('.seconds');

        function updateClock() {
            var t = getTimeRemaining(endtime);

            daysSpan.innerHTML = t.days;
            hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
            minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
            secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

            if (t.total <= 0) {
                clearInterval(timeinterval);
            }
        }

        updateClock();
        var timeinterval = setInterval(updateClock, 1000);
    }

    var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
		if (document.querySelector('.days')){
			initializeClock('clockdiv', deadline);
		}
</script>
<script src="/js/side_menu.js"></script>

</html>
