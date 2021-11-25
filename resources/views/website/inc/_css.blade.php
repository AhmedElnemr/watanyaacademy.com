<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
{{--{!! SEOMeta::generate() !!}
{!! OpenGraph::generate() !!}
{!! Twitter::generate() !!}
{!! JsonLd::generate() !!}--}}
{{--
<meta name="description" content="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
<meta name="keyword" content="education html template, university template, college template, school template, online education template, tution center template">
--}}
<!-- FAV ICON(BROWSER TAB ICON) -->
<link rel="shortcut icon" href="{{ setting() ? GetImg(setting()->fave_icon) : asset('website')."/images/fav.ico"}}" type="image/x-icon">
<!-- GOOGLE FONT -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
<!-- FONTAWESOME ICONS -->
<link rel="stylesheet" href="{{asset('website')}}/css/font-awesome.min.css">
<!-- ALL CSS FILES -->
<link href="{{asset('website')}}/css/materialize.css" rel="stylesheet">
<link href="{{asset('website')}}/css/bootstrap.css" rel="stylesheet">
<link href="{{asset('website')}}/css/bootstrap-rtl.min.css" rel="stylesheet" />
<link href="{{asset('website')}}/css/owl.carousel.min.css" rel="stylesheet"/>
<link href="{{asset('website')}}/css/owl.theme.default.min.css" rel="stylesheet"/>
<link href="{{asset('website')}}/css/style.css?t={{time()}}" rel="stylesheet" />
<!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
<link href="{{asset('website')}}/css/style-mob.css?t={{time()}}" rel="stylesheet" />

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="{{asset('website')}}/js/html5shiv.js"></script>
	<script src="{{asset('website')}}/js/respond.min.js"></script>
	<![endif]-->


@toastr_css

@stack('web_css')
