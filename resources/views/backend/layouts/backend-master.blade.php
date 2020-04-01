<!DOCTYPE html>
<html lang="en">

<!-- Tieu Long Lanh Kute -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- META SECTION -->
    <title>Electro - Admin</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="shortcut icon" href="{{ url('/') }}/public/img/fav.png">
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="{{ url('/') }}/public/admin/css/theme-default.css" />
    <!-- EOF CSS INCLUDE -->
</head>

<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container">

        <!-- START PAGE SIDEBAR -->
        @include('backend.layouts.backend-sidebar')
        <!-- END PAGE SIDEBAR -->

        <!-- PAGE CONTENT -->
        <div class="page-content">

            <!-- START X-NAVIGATION VERTICAL -->
            @include('backend.layouts.backend-header')
            <!-- END X-NAVIGATION VERTICAL -->

            <!-- PAGE CONTENT WRAPPER -->
            @yield('backend-main')
            <!-- END PAGE CONTENT WRAPPER -->
        </div>
        <!-- END PAGE CONTENT -->
    </div>
    <!-- END PAGE CONTAINER -->
    <!-- MESSAGE BOX-->
    <div class="message-box animated fadeIn" data-sound="alert" id="mb-remove-row">
        <div class="mb-container">
            <div class="mb-middle">
                <div class="mb-title"><span class="fa fa-times"></span> Xác nhận <strong>xóa</strong> ?</div>
                <div class="mb-content">
                    <p>Nếu bạn muốn xóa mục này</p>
                    <p>Hãy ấn XÓA</p>
                </div>
                <div class="mb-footer">
                    <div class="pull-right">
                        <button class="btn btn-warning btn-lg mb-control-yes">Xóa</button>
                        <button class="btn btn-default btn-lg mb-control-close">Hủy</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MESSAGE BOX-->

    <!-- MESSAGE BOX-->
    <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
        <div class="mb-container">
            <div class="mb-middle">
                <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                <div class="mb-content">
                    <p>Are you sure you want to log out?</p>
                    <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                </div>
                <div class="mb-footer">
                    <div class="pull-right">
                        <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                        <button class="btn btn-default btn-lg mb-control-close">No</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MESSAGE BOX-->

    <!-- START PRELOADS -->
    <audio id="audio-alert" src="{{ url('/') }}/public/admin/audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="{{ url('/') }}/public/admin/audio/fail.mp3" preload="auto"></audio>
    <!-- END PRELOADS -->
    <!-- START SCRIPTS -->
    <!-- START PLUGINS -->
    <script src="{{ url('/') }}/public/admin/js/plugins/jquery/jquery.min.js"></script>
    <script src="{{ url('/') }}/public/admin/js/plugins/jquery/jquery-ui.min.js"></script>
    <script src="{{ url('/') }}/public/admin/js/plugins/bootstrap/bootstrap.min.js"></script>

    <script src="{{ url('/') }}/public/admin/js/plugins/bootstrap/bootstrap-datepicker.js"></script>
    <script src="{{ url('/') }}/public/admin/js/plugins/bootstrap/bootstrap-file-input.js"></script>
    <script src="{{ url('/') }}/public/admin/js/plugins/bootstrap/bootstrap-select.js"></script>
    <script src="{{ url('/') }}/public/admin/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
    <!-- END PLUGINS -->

    <!-- START THIS PAGE PLUGINS-->
    <script src="https://www.google-analytics.com/analytics.js"></script>
    <script src='{{ url('/') }}/public/admin/js/plugins/icheck/icheck.min.js'></script>
    <script src="{{ url('/') }}/public/admin/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script src="{{ url('/') }}/public/admin/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('/') }}/public/admin/js/plugins/scrolltotop/scrolltopcontrol.js"></script>
    <script src="{{ url('/') }}/public/admin/js/demo_tables.js"></script>
    <script src="{{ url('/') }}/public/admin/js/plugins/morris/raphael-min.js"></script>
    <script src="{{ url('/') }}/public/admin/js/plugins/morris/morris.min.js"></script>
    <script src="{{ url('/') }}/public/admin/js/plugins/rickshaw/d3.v3.js"></script>
    <script src="{{ url('/') }}/public/admin/js/plugins/rickshaw/rickshaw.min.js"></script>
    <script src='{{ url('/') }}/public/admin/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
    <script src='{{ url('/') }}/public/admin/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>
    <script src='{{ url('/') }}/public/admin/js/plugins/bootstrap/bootstrap-datepicker.js'></script>
    <script src="{{ url('/') }}/public/admin/js/plugins/owl/owl.carousel.min.js"></script>

    <script src="{{ url('/') }}/public/admin/js/plugins/moment.min.js"></script>
    <script src="{{ url('/') }}/public/admin/js/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- END THIS PAGE PLUGINS-->

    <!-- START TEMPLATE -->
    {{-- <script src="{{ url('/') }}/public/admin/js/settings.js"></script> --}}

    <script src="{{ url('/') }}/public/admin/js/plugins.js"></script>
    <script src="{{ url('/') }}/public/admin/js/actions.js"></script>

    <script src="{{ url('/') }}/public/admin/js/demo_dashboard.js"></script>
    <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->

    <!-- COUNTERS // NOT INCLUDED IN TEMPLATE -->
    <!-- GOOGLE -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-36783416-1', 'aqvatarius.com');
          ga('send', 'pageview');
    </script>
    <!-- END GOOGLE -->

    <!-- YANDEX -->
    <script>
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter25836617 = new Ya.Metrika({id:25836617,
                            webvisor:true,
                            accurateTrackBounce:true});
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript>
        <div><img src="http://mc.yandex.ru/watch/25836617" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- END YANDEX -->
    <!-- END COUNTERS // NOT INCLUDED IN TEMPLATE -->

</body>

</html>