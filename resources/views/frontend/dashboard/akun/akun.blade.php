<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Akun | PPID Kota Tasikmalaya</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('image/logo_tasik.svg') }}">


    <link href="{{ asset('soft/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('soft/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ asset('soft/assets/css/soft-ui-dashboard.css?v=1.0.7') }}" rel="stylesheet" />
</head>


<body class="g-sidenav-show" style="background-color: #f8f9fa;">
    @include('frontend.dashboard.akun.content')

    @include('components.dashboard_sidenav')
    @yield('sidenav_dashboard')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ps ps--active-y"
        style="min-height: 80vh">


        @yield('content')
    </main>


    <script src="{{ asset('soft/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('soft/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('soft/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('soft/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('soft/assets/js/plugins/chartjs.min.js') }}"></script>
    <script>
        function checkPasswordMatch() {
            var newPassword = document.getElementById("newPassword").value;
            var reNewPassword = document.getElementById("re-newPassword").value;
            var submitButton = document.getElementById('change_password_submit');

            if (newPassword === reNewPassword) {
                submitButton.disabled = false;
                submitButton.classList.remove("bg-secondary");
                submitButton.classList.add("bg-gradient-primary");
            } else {
                submitButton.disabled = true;
                submitButton.classList.remove("bg-gradient-primary");
                submitButton.classList.add("bg-secondary");
            }
        }

        var reNewPasswordInput = document.getElementById("re-newPassword");
        reNewPasswordInput.addEventListener("input", checkPasswordMatch);
    </script>
    <script>
        function toggleIcon(plusIcon, minusIcon) {
            plusIcon.classList.toggle('d-none');
            minusIcon.classList.toggle('d-none');
        }

        const toggleIconOnTrigger = (trigger, plusIcon, minusIcon) => {
            trigger.addEventListener('click', () => {
                toggleIcon(plusIcon, minusIcon);
            });
        };

        const plusIcon = document.querySelector('.plus-icon');
        const minusIcon = document.querySelector('.minus-icon');
        const plusIconInformation = document.querySelector('.plus-icon-information');
        const minusIconInformation = document.querySelector('.minus-icon-information');

        const passwordTrigger = document.getElementById('changePasswordLink');
        const informationTrigger = document.getElementById('changeInformationLink');

        toggleIconOnTrigger(passwordTrigger, plusIcon, minusIcon);
        toggleIconOnTrigger(informationTrigger, plusIconInformation, minusIconInformation);
    </script>


    <script>
        const detailAkunTab = document.querySelector('.nav-link[aria-selected="true"]');
        const pengaturanTab = document.querySelector('.nav-link[aria-selected="false"]');
        const informationSection = document.getElementById('information');
        const settingSection = document.getElementById('setting');

        detailAkunTab.addEventListener('click', () => {
            informationSection.classList.remove('d-none');
            settingSection.classList.add('d-none');
            detailAkunTab.setAttribute('aria-selected', 'true');
            pengaturanTab.setAttribute('aria-selected', 'false');
        });

        pengaturanTab.addEventListener('click', () => {
            settingSection.classList.remove('d-none');
            informationSection.classList.add('d-none');
            pengaturanTab.setAttribute('aria-selected', 'true');
            detailAkunTab.setAttribute('aria-selected', 'false');
        });
    </script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="{{ asset('soft/assets/js/soft-ui-dashboard.min.js?v=1.0.7') }}"></script>




</body>

</html>
