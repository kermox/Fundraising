<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Fundraising/Profile</title>
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,700&display=swap"
          rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <!--Css-->
    <link rel="stylesheet" href="assets/scss/main.css">
</head>
<body>

<header id="whiteNavigation" class="navigation navigation-white">
    <div class="nav-place-keeper"></div>
    <nav class="navbar navbar-expand-lg w-100" id="whiteNavigationNavbar">
        <div class="container">
            <!--Logo-->
            <a class="navbar-brand" href="#">Logo</a>
            <!-- Hamburger-->
            <button class="navbar-toggler d-flex flex-column justify-content-center align-items-center"
                    type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-element"></span>
                <span class="navbar-toggler-element"></span>
                <span class="navbar-toggler-element"></span>
            </button>
            <!--Navigation -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!--Navigation Links-->
                <ul class="navbar-nav w-100 d-flex flex-column flex-lg-row justify-content-start justify-content-lg-end align-items-center ">
                    <li class="nav-item d-flex d-lg-block justify-content-center mr-0 mr-lg-4">
                        <a class="nav-link d-flex justify-content-center align-items-center" href="#"
                           data-toggle="collapse" data-target=".navbar-collapse.show">About
                            Us</a>
                    </li>
                    <li class="nav-item d-flex d-lg-block justify-content-center mr-0 mr-lg-4">
                        <a class="nav-link d-flex justify-content-center align-items-center" href="#"
                           data-toggle="collapse" data-target=".navbar-collapse.show">Success
                            stories</a>
                    </li>
                    <li class="nav-item d-flex d-lg-block justify-content-center mr-0 mr-lg-4">
                        <a class="nav-link d-flex justify-content-center align-items-center" href="#"
                           data-toggle="collapse" data-target=".navbar-collapse.show">Contact
                            Us</a>
                    </li>
                    <li class="divider"></li>
                    <li class="nav-item dropdown collapse d-flex d-lg-block flex-column justify-content-center align-items-center px-3">
                        <a class="dropdown-toggle d-flex justify-content-center align-items-center text-decoration-none"
                           href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg class="mr-2" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 0C5.19803 0 0 2.87362 0 9C0 14.9705 4.99961 18 9 18C15.8634 18 18 11.987 18 9C18 4.59213 14.6268 0 9 0ZM6.91299 0.84685C5.97402 1.64764 5.19449 2.97283 4.69134 4.61693C4.03937 4.23071 3.44055 3.75236 2.90906 3.19606C4.00748 2.04449 5.39646 1.23661 6.91299 0.84685ZM2.52283 3.62835C3.11811 4.24843 3.79488 4.77638 4.53189 5.19449C4.25551 6.26811 4.09252 7.45866 4.07126 8.70945H0.588189C0.651969 6.84213 1.33228 5.05984 2.52283 3.62835ZM2.52283 14.3717C1.32874 12.9402 0.651969 11.1579 0.588189 9.29055H4.07126C4.09252 10.5449 4.25551 11.7319 4.53189 12.8055C3.79843 13.2272 3.12165 13.7516 2.52283 14.3717ZM2.90906 14.8075C3.44055 14.2512 4.03937 13.7728 4.69134 13.3866C5.19449 15.0272 5.97402 16.3559 6.91299 17.1567C5.39646 16.7634 4.00748 15.9555 2.90906 14.8075ZM8.70945 17.3976C7.2 17.2063 5.89961 15.5197 5.19803 13.1031C6.28228 12.5539 7.47992 12.2457 8.70945 12.1996V17.3976ZM8.70945 11.622C7.42677 11.6646 6.17953 11.9799 5.04921 12.5327C4.81181 11.5406 4.67008 10.4457 4.64882 9.29055H8.70945V11.622ZM8.70945 8.70945H4.64882C4.67008 7.55433 4.81181 6.45945 5.04921 5.46732C6.18307 6.02008 7.43032 6.33543 8.70945 6.37795V8.70945ZM8.70945 5.80039C7.47638 5.75787 6.28228 5.44606 5.19803 4.89685C5.89961 2.47677 7.2 0.793701 8.70945 0.602362V5.80039ZM15.4772 3.62835C16.6677 5.05984 17.348 6.84213 17.4118 8.70945H13.9323C13.911 7.45512 13.748 6.26811 13.4717 5.19449C14.2051 4.77284 14.8819 4.24843 15.4772 3.62835ZM15.0909 3.19252C14.5594 3.74882 13.9606 4.22717 13.3087 4.61339C12.8055 2.97283 12.026 1.64764 11.087 0.843307C12.6035 1.23661 13.9925 2.04449 15.0909 3.19252ZM9.29055 0.602362C10.8 0.793701 12.1004 2.48031 12.802 4.89685C11.7177 5.44606 10.5236 5.75433 9.29055 5.80039V0.602362ZM9.29055 6.37795C10.5732 6.33543 11.8205 6.02008 12.9508 5.46732C13.1882 6.45945 13.3299 7.55433 13.3512 8.70945H9.29055V6.37795ZM9.29055 9.29055H13.3512C13.3299 10.4457 13.1882 11.5406 12.9508 12.5327C11.8205 11.9764 10.5732 11.661 9.29055 11.622V9.29055ZM9.29055 17.3976V12.1996C10.5236 12.2421 11.7177 12.5539 12.802 13.1031C12.1004 15.5232 10.8 17.2063 9.29055 17.3976ZM11.087 17.1532C12.026 16.3524 12.8055 15.0272 13.3087 13.3831C13.9606 13.7693 14.5594 14.2476 15.0909 14.8039C13.9925 15.9555 12.6035 16.7634 11.087 17.1532ZM15.4772 14.3717C14.8819 13.7516 14.2051 13.2272 13.4717 12.8055C13.748 11.7319 13.911 10.5413 13.9323 9.29055H17.4118C17.348 11.1579 16.6677 12.9402 15.4772 14.3717Z"
                                      fill="white"/>
                            </svg>
                            Eng
                        </a>
                        <div class="dropdown-menu dropdown-menu-right d-flex justify-content-center w-100"
                             aria-labelledby="navbarDropdown">
                            <a class="nav-link dropdown-item rounded d-flex align-items-center justify-content-center py-3 py-lg-1"
                               hreflang="ua" data-toggle="collapse" data-target=".navbar-collapse.show">Ua</a>
                        </div>
                    </li>
                </ul>
                <!--Action button-->
                <div class="h-100 d-flex justify-content-center"><a
                        class="nav-link nav-button d-flex justify-content-center align-items-center px-1 py-2 mt-3 mt-lg-0"
                        href="#" data-toggle="collapse" data-target=".navbar-collapse.show">Start
                    helping</a></div>
            </div>
        </div>
    </nav>
</header>
<section class="content-header">
    <div class="container py-4">
        <h2 class="mb-4">Cindy should live and become the great scientist as she was dreaming to be</h2>
        <div class="row">
            <div class="col-12 col-lg-8 iframe-wrapper px-2 mb-2 mb-lg-0">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/WILNIXZr2oc?controls=0"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
            <div class="col-12 col-lg-4 info">
                <p class="raised">
                    <span class="amount">$10 200 </span> raised by 112 people
                </p>
                <div class="percentage-bar mb-2">
                    <div class="percentage-amount"></div>
                </div>
                <a href="#" class="goal text-decoration-none d-flex align-items-center">25% of $25 000 goal
                    <span class="ml-2 pb-1">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M7 13.125C8.62445 13.125 10.1824 12.4797 11.331 11.331C12.4797 10.1824 13.125 8.62445 13.125 7C13.125 5.37555 12.4797 3.81763 11.331 2.66897C10.1824 1.52031 8.62445 0.875 7 0.875C5.37555 0.875 3.81763 1.52031 2.66897 2.66897C1.52031 3.81763 0.875 5.37555 0.875 7C0.875 8.62445 1.52031 10.1824 2.66897 11.331C3.81763 12.4797 5.37555 13.125 7 13.125ZM7 14C8.85652 14 10.637 13.2625 11.9497 11.9497C13.2625 10.637 14 8.85652 14 7C14 5.14348 13.2625 3.36301 11.9497 2.05025C10.637 0.737498 8.85652 0 7 0C5.14348 0 3.36301 0.737498 2.05025 2.05025C0.737498 3.36301 0 5.14348 0 7C0 8.85652 0.737498 10.637 2.05025 11.9497C3.36301 13.2625 5.14348 14 7 14Z"
                                  fill="#1CB867"/>
                            <path d="M7.81374 5.76453L5.80999 6.01565L5.73824 6.34815L6.13199 6.42078C6.38924 6.48203 6.43999 6.57478 6.38399 6.83115L5.73824 9.86565C5.56849 10.6505 5.83011 11.0198 6.44524 11.0198C6.92211 11.0198 7.47599 10.7993 7.72711 10.4965L7.80411 10.1325C7.62911 10.2865 7.37361 10.3478 7.20386 10.3478C6.96324 10.3478 6.87574 10.1789 6.93786 9.8814L7.81374 5.76453Z"
                                  fill="#1CB867"/>
                            <path d="M7 4.8125C7.48325 4.8125 7.875 4.42075 7.875 3.9375C7.875 3.45425 7.48325 3.0625 7 3.0625C6.51675 3.0625 6.125 3.45425 6.125 3.9375C6.125 4.42075 6.51675 4.8125 7 4.8125Z"
                                  fill="#1CB867"/>
                        </svg>
                    </span>
                </a>
                <a href="#" class="make-donation btn w-100 mt-3">Make donation</a>
                <div class="info-box mt-4">
                    <span class="label w-50">Quick donations</span>
                    <div class="d-flex flex-wrap justify-content-around py-3">
                        <div class="dollars-wrapper my-1 py-1 py-lg-0">
                            <a href="#" class="dollars d-flex align-items-center justify-content-center w-100">$
                                120</a>
                        </div>
                        <div class="dollars-wrapper my-1 py-1 py-lg-0">
                            <a href="#" class="dollars d-flex align-items-center justify-content-center w-100">$
                                120</a>
                        </div>
                        <div class="dollars-wrapper my-1 py-1 py-lg-0">
                            <a href="#" class="dollars d-flex align-items-center justify-content-center w-100">$
                                120</a>
                        </div>
                        <div class="dollars-wrapper my-1 py-1 py-lg-0">
                            <a href="#" class="dollars d-flex align-items-center justify-content-center w-100">$
                                120</a>
                        </div>
                        <div class="dollars-wrapper my-1 py-1 py-lg-0">
                            <a href="#" class="dollars d-flex align-items-center justify-content-center w-100">$
                                120</a>
                        </div>
                        <div class="dollars-wrapper my-1 py-1 py-lg-0">
                            <a href="#" class="dollars d-flex align-items-center justify-content-center w-100">$
                                120</a>
                        </div>
                    </div>
                </div>
                <div class="info-box mt-4">
                    <span class="label w-50">Share</span>
                    <div class="d-flex justify-content-around align-items-center">
                        <a href="#" class="info-box-link d-flex justify-content-center py-4">
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.0011 2.16882C7.01892 2.16882 2.16884 7.01891 2.16884 13.0011C2.16884 18.4069 6.12951 22.8876 11.3089 23.7033V16.133H8.55726V13.0011H11.3089V10.6145C11.3089 7.89749 12.9263 6.39924 15.3996 6.39924C16.5848 6.39924 17.8263 6.61049 17.8263 6.61049V9.27441H16.4569C15.1136 9.27441 14.6933 10.1107 14.6933 10.9677V12.9989H17.6952L17.2153 16.1308H14.6933V23.7012C19.8727 22.8897 23.8333 18.408 23.8333 13.0011C23.8333 7.01891 18.9833 2.16882 13.0011 2.16882Z"
                                      fill="#395998"/>
                            </svg>
                        </a>
                        <a href="#" class="info-box-link d-flex justify-content-center py-4">
                            <svg width="27" height="22" viewBox="0 0 27 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                    <path d="M26.9474 2.67891C25.9558 3.11859 24.8903 3.41575 23.772 3.54943C24.9136 2.86522 25.7901 1.78175 26.2028 0.490803C25.1176 1.13479 23.9303 1.58852 22.6922 1.83238C21.6837 0.757961 20.2469 0.0864868 18.6567 0.0864868C15.6035 0.0864868 13.128 2.56186 13.128 5.61491C13.128 6.04828 13.1769 6.47017 13.2712 6.87491C8.67642 6.64428 4.60274 4.44333 1.87589 1.09849C1.40011 1.91501 1.12747 2.8648 1.12747 3.87786C1.12747 5.79596 2.10358 7.48807 3.58695 8.47954C2.709 8.45204 1.85037 8.21492 1.08274 7.78796C1.08242 7.81112 1.08242 7.83428 1.08242 7.85754C1.08242 10.5362 2.98811 12.7707 5.51716 13.2786C4.70304 13.5 3.84908 13.5324 3.02053 13.3733C3.724 15.5697 5.76579 17.1681 8.18495 17.2128C6.29284 18.6955 3.90895 19.5794 1.31884 19.5794C0.872526 19.5794 0.432526 19.5532 0 19.5022C2.44663 21.0708 5.35263 21.9861 8.47474 21.9861C18.6439 21.9861 24.2046 13.5618 24.2046 6.25607C24.2046 6.01628 24.1994 5.77786 24.1886 5.5408C25.271 4.75837 26.2052 3.78924 26.9474 2.67891Z"
                                          fill="#55ACEE"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="26.9474" height="22" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <a href="#" class="info-box-link d-flex justify-content-center py-4">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M0.075 5.3325C0.226227 4.66986 0.597983 4.07822 1.12938 3.65446C1.66078 3.23071 2.32033 2.99995 3 3H21C21.6797 2.99995 22.3392 3.23071 22.8706 3.65446C23.402 4.07822 23.7738 4.66986 23.925 5.3325L12 12.621L0.075 5.3325ZM0 7.0455V17.7015L8.7045 12.3645L0 7.0455ZM10.1415 13.245L0.2865 19.2855C0.52999 19.7989 0.91429 20.2326 1.39467 20.5362C1.87505 20.8397 2.43176 21.0005 3 21H21C21.5681 21.0001 22.1246 20.8389 22.6048 20.5351C23.0849 20.2313 23.4688 19.7975 23.712 19.284L13.857 13.2435L12 14.379L10.1415 13.2435V13.245ZM15.2955 12.366L24 17.7015V7.0455L15.2955 12.3645V12.366Z"
                                      fill="#818181"/>
                            </svg>
                        </a>
                        <a href="#" class="info-box-link d-flex justify-content-center py-4">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 0C5.37253 0 0 5.37253 0 12C0 18.6275 5.37253 24 12 24C18.6275 24 24 18.6275 24 12C24 5.37253 18.6275 0 12 0Z"
                                      fill="#40B3E0"/>
                                <path d="M17.839 6.90284L15.6956 17.7093C15.6956 17.7093 15.3959 18.4587 14.5716 18.099L9.62551 14.307L7.82701 13.4378L4.79945 12.4185C4.79945 12.4185 4.33482 12.2537 4.28982 11.894C4.24482 11.5343 4.81445 11.3395 4.81445 11.3395L16.8497 6.61821C16.8497 6.61821 17.8389 6.18359 17.8389 6.90303"
                                      fill="white"/>
                                <path d="M9.24543 17.5878C9.24543 17.5878 9.10106 17.5743 8.92106 17.0047C8.74134 16.4351 7.827 13.4376 7.827 13.4376L15.0962 8.82132C15.0962 8.82132 15.5159 8.56651 15.5009 8.82132C15.5009 8.82132 15.5758 8.86632 15.3509 9.07613C15.1262 9.28604 9.64059 14.217 9.64059 14.217"
                                      fill="#D2E5F1"/>
                                <path d="M11.522 15.7608L9.5657 17.5445C9.5657 17.5445 9.4127 17.6605 9.24545 17.5878L9.62008 14.2747"
                                      fill="#B5CFE4"/>
                            </svg>
                        </a>
                        <a href="#" class="info-box-link d-flex justify-content-center py-4">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.22199 19.778C4.68587 20.2426 5.23696 20.6109 5.84361 20.8618C6.45026 21.1127 7.10051 21.2412 7.75699 21.24C8.41362 21.2412 9.06401 21.1126 9.67082 20.8617C10.2776 20.6108 10.8289 20.2425 11.293 19.778L14.121 16.949L12.707 15.535L9.87899 18.364C9.31546 18.925 8.55266 19.24 7.75749 19.24C6.96232 19.24 6.19952 18.925 5.63599 18.364C5.0745 17.8008 4.7592 17.0379 4.7592 16.2425C4.7592 15.4472 5.0745 14.6843 5.63599 14.121L8.46499 11.293L7.05099 9.87902L4.22199 12.707C3.2858 13.6455 2.76004 14.9169 2.76004 16.2425C2.76004 17.5681 3.2858 18.8396 4.22199 19.778ZM19.778 11.293C20.7137 10.3543 21.2391 9.08294 21.2391 7.75752C21.2391 6.43211 20.7137 5.16074 19.778 4.22202C18.8395 3.28583 17.5681 2.76007 16.2425 2.76007C14.9169 2.76007 13.6454 3.28583 12.707 4.22202L9.87899 7.05102L11.293 8.46502L14.121 5.63602C14.6845 5.07501 15.4473 4.76005 16.2425 4.76005C17.0377 4.76005 17.8005 5.07501 18.364 5.63602C18.9255 6.19929 19.2408 6.96219 19.2408 7.75752C19.2408 8.55286 18.9255 9.31575 18.364 9.87902L15.535 12.707L16.949 14.121L19.778 11.293Z"
                                      fill="black"/>
                                <path d="M8.46401 16.95L7.04901 15.536L15.536 7.04999L16.95 8.46499L8.46401 16.95Z"
                                      fill="black"/>
                            </svg>
                        </a>
                        <a href="#" class="info-box-link d-flex justify-content-center py-4">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                    <g filter="url(#filter0_f)">
                                        <path d="M0.588043 23.4397L2.19007 17.5943C1.20504 15.8839 0.680028 13.9409 0.685444 11.9546C0.685444 5.73028 5.7514 0.669739 11.9757 0.669739C14.9958 0.669739 17.8319 1.84424 19.959 3.9767C22.0915 6.10915 23.266 8.94526 23.2606 11.96C23.2606 18.1842 18.1945 23.2449 11.9703 23.2449H11.9649C10.076 23.2449 8.21948 22.7686 6.56871 21.8701L0.588043 23.4397ZM6.85017 19.8242L7.19112 20.0299C8.63084 20.885 10.2816 21.3342 11.9649 21.3396H11.9703C17.1392 21.3396 21.3499 17.1342 21.3499 11.96C21.3499 9.45402 20.3757 7.09968 18.6059 5.32434C16.836 3.54909 14.4762 2.57489 11.9703 2.57489C6.79601 2.57489 2.58518 6.78031 2.58518 11.9545C2.58518 13.7244 3.07769 15.4509 4.01948 16.9448L4.24137 17.302L3.29425 20.7605L6.85017 19.8242Z"
                                              fill="black" fill-opacity="0.24"/>
                                    </g>
                                    <path d="M1.10016 22.8363L2.62887 17.2612C1.68623 15.626 1.19035 13.7715 1.19102 11.884C1.19102 5.95079 6.02315 1.12408 11.9509 1.12408C14.832 1.12408 17.5314 2.24657 19.5625 4.2777C21.5936 6.30892 22.7109 9.01364 22.7109 11.8893C22.7109 17.8225 17.8788 22.6492 11.951 22.6492H11.9456C10.1442 22.6492 8.37496 22.1949 6.80347 21.3396L1.10016 22.8364V22.8363Z"
                                          fill="url(#paint0_linear)"/>
                                    <path d="M0.710022 23.2264L2.29215 17.4537C1.31936 15.7646 0.800792 13.8456 0.806209 11.884C0.806209 5.73699 5.80932 0.739197 11.9564 0.739197C14.9389 0.739197 17.7397 1.89904 19.8405 4.00506C21.9465 6.11109 23.1064 8.91199 23.1011 11.8893C23.1011 18.0363 18.098 23.0341 11.9509 23.0341H11.9457C10.0838 23.0333 8.25171 22.5666 6.61645 21.6763L0.710022 23.2265V23.2264ZM6.89436 19.6559L7.23111 19.859C8.65299 20.7036 10.2832 21.1472 11.9457 21.1525H11.951C17.0556 21.1525 21.2142 16.9993 21.2142 11.8893C21.2142 9.4145 20.2521 7.0893 18.5042 5.33608C16.7563 3.58287 14.4258 2.62072 11.951 2.62072C6.84095 2.62072 2.68241 6.77394 2.68241 11.884C2.68241 13.6319 3.16876 15.337 4.09888 16.8122L4.31805 17.165L3.38261 20.5806L6.89436 19.6559Z"
                                          fill="white"/>
                                    <path d="M9.16611 7.21765C8.95758 6.75259 8.73841 6.74185 8.54071 6.73652C8.38037 6.7312 8.19332 6.7312 8.00617 6.7312C7.81912 6.7312 7.51973 6.80068 7.2632 7.07859C7.00658 7.3566 6.29031 8.0301 6.29031 9.40389C6.29031 10.7722 7.28991 12.0978 7.42887 12.2848C7.56782 12.472 9.35849 15.3744 12.1861 16.4916C14.538 17.4217 15.0191 17.2345 15.5269 17.1864C16.04 17.1383 17.1732 16.5129 17.4084 15.8608C17.6382 15.2087 17.6382 14.6528 17.5687 14.5352C17.4993 14.4176 17.3122 14.3482 17.0342 14.2091C16.7563 14.0702 15.3879 13.3967 15.1314 13.3005C14.8748 13.2043 14.6877 13.1615 14.506 13.4394C14.3188 13.7174 13.7844 14.3428 13.624 14.5299C13.4636 14.717 13.2979 14.7383 13.0199 14.5994C12.742 14.4604 11.844 14.1664 10.7804 13.2149C9.95186 12.4773 9.39061 11.5632 9.23017 11.2853C9.06983 11.0074 9.21421 10.8576 9.35316 10.7188C9.47606 10.5958 9.63108 10.3927 9.77013 10.2323C9.90909 10.072 9.95718 9.95439 10.048 9.76725C10.1389 9.5802 10.0961 9.41986 10.0267 9.2809C9.95718 9.14185 9.412 7.76815 9.16611 7.21765Z"
                                          fill="white"/>
                                </g>
                                <defs>
                                    <filter id="filter0_f" x="-5.41196" y="-5.33026" width="34.6725"
                                            height="34.7699"
                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                                 result="shape"/>
                                        <feGaussianBlur stdDeviation="3" result="effect1_foregroundBlur"/>
                                    </filter>
                                    <linearGradient id="paint0_linear" x1="11.9051" y1="22.8349" x2="11.9051"
                                                    y2="1.12278" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#20B038"/>
                                        <stop offset="1" stop-color="#60D66A"/>
                                    </linearGradient>
                                    <clipPath id="clip0">
                                        <rect width="23.9066" height="24" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="location d-flex align-items-center py-3">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="svg-path"
                      d="M19 9C19 8.08075 18.8189 7.1705 18.4672 6.32122C18.1154 5.47194 17.5998 4.70026 16.9497 4.05025C16.2997 3.40024 15.5281 2.88463 14.6788 2.53284C13.8295 2.18106 12.9193 2 12 2C11.0807 2 10.1705 2.18106 9.32122 2.53284C8.47194 2.88463 7.70026 3.40024 7.05025 4.05025C6.40024 4.70026 5.88463 5.47194 5.53284 6.32122C5.18106 7.1705 5 8.08075 5 9C5 10.387 5.41 11.677 6.105 12.765H6.097C8.457 16.46 12 22 12 22L17.903 12.765H17.896C18.6164 11.6414 18.9995 10.3347 19 9ZM12 12C11.2044 12 10.4413 11.6839 9.87868 11.1213C9.31607 10.5587 9 9.79565 9 9C9 8.20435 9.31607 7.44129 9.87868 6.87868C10.4413 6.31607 11.2044 6 12 6C12.7956 6 13.5587 6.31607 14.1213 6.87868C14.6839 7.44129 15 8.20435 15 9C15 9.79565 14.6839 10.5587 14.1213 11.1213C13.5587 11.6839 12.7956 12 12 12Z"
                      fill="black"/>
            </svg>
            <span class="pl-2">Chicago, IL</span>
        </div>
    </div>
</section>
<section class="profile-nav">
    <div class="container">
        <ul class="nav d-flex flex-wrap" id="pills-tab" role="tablist">
            <li class="py-4">
                <a class="py-4 py-lg-4 px-4 text-decoration-none active" id="nav-genetal-tab" data-toggle="tab"
                   href="#nav-general"
                   role="tab" aria-controls="nav-general" aria-selected="true"> General </a>
            </li>
            <li class="py-4">
                <a class="py-4 py-lg-4 px-4 text-decoration-none" id="nav-diagnosis-tab" data-toggle="tab"
                   href="#nav-diagnosis"
                   role="tab" aria-controls="nav-diagnosis" aria-selected="false">Diagnosis</a>
            </li>
            <li class="py-4">
                <a class="py-4 py-lg-4 px-4 text-decoration-none" id="nav-documents-tab" data-toggle="tab"
                   href="#nav-documents"
                   role="tab" aria-controls="nav-documents" aria-selected="false">Documents <sup>12</sup></a>
            </li>
            <li class="py-4">
                <a class="py-4 py-lg-4 px-4 text-decoration-none " id="nav-contacts-tab" data-toggle="tab"
                   href="#nav-contacts"
                   role="tab" aria-controls="nav-contacts" aria-selected="false">Contacts</a>
            </li>
        </ul>
    </div>
</section>
<section class="profile-tabs pb-5">
    <div class="container">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-general" role="tabpanel" aria-labelledby="nav-general-tab">
                <div class="row py-4">
                    <div class="article-content pt-3 pb-5 pb-lg-3 col-12 col-lg-8">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi
                            ut
                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                            esse
                            <span class="font-weight-bold">cillum dolore eu fugiat nulla pariatur</span>
                            . Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum.

                        <blockquote class="py-3" cite="http://www.idontknow.com/">
                            <div class="row">
                                <div class="blockquote-icon d-flex justify-content-center pr-0 pl-4">
                                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.45927 11.011C8.91452 8.34925 12.6298 7 17.5 7H19.25V11.9332L17.843 12.215C15.4455 12.6945 13.7778 13.6377 12.8853 15.022C12.4196 15.7677 12.1555 16.6216 12.1188 17.5H17.5C17.9641 17.5 18.4093 17.6844 18.7375 18.0126C19.0656 18.3408 19.25 18.7859 19.25 19.25V31.5C19.25 33.4302 17.6803 35 15.75 35H5.25002C4.78589 35 4.34077 34.8156 4.01258 34.4874C3.68439 34.1592 3.50002 33.7141 3.50002 33.25V24.5L3.50527 19.3917C3.48952 19.1975 3.15702 14.595 6.45927 11.011ZM35 35H24.5C24.0359 35 23.5908 34.8156 23.2626 34.4874C22.9344 34.1592 22.75 33.7141 22.75 33.25V24.5L22.7553 19.3917C22.7395 19.1975 22.407 14.595 25.7093 11.011C28.1645 8.34925 31.8798 7 36.75 7H38.5V11.9332L37.093 12.215C34.6955 12.6945 33.0278 13.6377 32.1353 15.022C31.6696 15.7677 31.4055 16.6216 31.3688 17.5H36.75C37.2141 17.5 37.6593 17.6844 37.9875 18.0126C38.3156 18.3408 38.5 18.7859 38.5 19.25V31.5C38.5 33.4302 36.9303 35 35 35Z"
                                              fill="#BFE6D2"/>
                                    </svg>
                                </div>
                                <div class="blockquote-text col">
                                    But I must explain to you how all this mistaken idea of denouncing pleasure and
                                    praising
                                    pain was born and I will give you a complete account of the system, and expound the
                                    actual
                                    teachings of the great explorer of the truth, the master-builder of human happiness.
                                </div>
                            </div>
                        </blockquote>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip
                        ex ea <a href="#" class="article-link">commodo consequat</a>. Duis aute irure dolor in
                        reprehenderit
                        in
                        voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                        deserunt mollit anim id est laborum.
                        <div class="img-container d-flex justify-content-center py-5">
                            <img class="img-fluid" src="assets/img/article-img.png" alt="Girl temperature measuring">
                        </div>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip
                        ex ea <a href="#" class="article-link">commodo consequat</a>. Duis aute irure dolor in
                        reprehenderit
                        in
                        voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                        deserunt mollit anim id est laborum.
                    </div>
                    <div class="latest-donations py-3 col-12 col-lg-4">
                        <div class="latest-donations-header">
                            <h6><a href="#">Latest donations(<span class="num">112</span>)</a></h6>
                        </div>
                        <div class="latest-donations-body py-2">
                            <div class="latest-donations-body-item py-2">
                                <div class="row">
                                    <div class="donations-num col-2 pr-0 pr-lg-auto">
                                        <span>112</span>
                                    </div>
                                    <div class="col-8">
                                        <div class="user">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 2C6.579 2 2 6.579 2 12C2 17.421 6.579 22 12 22C17.421 22 22 17.421 22 12C22 6.579 17.421 2 12 2ZM12 7C13.727 7 15 8.272 15 10C15 11.728 13.727 13 12 13C10.274 13 9 11.728 9 10C9 8.272 10.274 7 12 7ZM6.894 16.772C7.791 15.452 9.287 14.572 11 14.572H13C14.714 14.572 16.209 15.452 17.106 16.772C15.828 18.14 14.015 19 12 19C9.985 19 8.172 18.14 6.894 16.772Z"
                                                      fill="#DADADA"/>
                                            </svg>
                                            <a class="username" href="#">Anonymous</a>
                                            <br>
                                            <p class="time">2 hours ago</p>
                                        </div>
                                        <div class="message">
                                            God bless You, girl!
                                        </div>
                                    </div>
                                    <div class="donation-sum col-2 pl-0 pr-lg-auto">
                                        <span>$300</span>
                                    </div>
                                </div>
                            </div>
                            <div class="latest-donations-body-item py-2">
                                <div class="row">
                                    <div class="donations-num col-2 pr-0 pr-lg-auto">
                                        <span>111</span>
                                    </div>
                                    <div class="col-8">
                                        <div class="user">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 2C6.579 2 2 6.579 2 12C2 17.421 6.579 22 12 22C17.421 22 22 17.421 22 12C22 6.579 17.421 2 12 2ZM12 7C13.727 7 15 8.272 15 10C15 11.728 13.727 13 12 13C10.274 13 9 11.728 9 10C9 8.272 10.274 7 12 7ZM6.894 16.772C7.791 15.452 9.287 14.572 11 14.572H13C14.714 14.572 16.209 15.452 17.106 16.772C15.828 18.14 14.015 19 12 19C9.985 19 8.172 18.14 6.894 16.772Z"
                                                      fill="#DADADA"/>
                                            </svg>
                                            <a class="username" href="#">Anonymous</a>
                                            <br>
                                            <p class="time">2 hours ago</p>
                                        </div>
                                        <div class="message">
                                            Everything will be fine!
                                        </div>
                                    </div>
                                    <div class="donation-sum col-2 pl-0 pr-lg-auto">
                                        <span>$300</span>
                                    </div>
                                </div>
                            </div>
                            <div class="latest-donations-body-item py-2">
                                <div class="row">
                                    <div class="donations-num col-2 pr-0 pr-lg-auto">
                                        <span>110</span>
                                    </div>
                                    <div class="col-8">
                                        <div class="user">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 2C6.579 2 2 6.579 2 12C2 17.421 6.579 22 12 22C17.421 22 22 17.421 22 12C22 6.579 17.421 2 12 2ZM12 7C13.727 7 15 8.272 15 10C15 11.728 13.727 13 12 13C10.274 13 9 11.728 9 10C9 8.272 10.274 7 12 7ZM6.894 16.772C7.791 15.452 9.287 14.572 11 14.572H13C14.714 14.572 16.209 15.452 17.106 16.772C15.828 18.14 14.015 19 12 19C9.985 19 8.172 18.14 6.894 16.772Z"
                                                      fill="#DADADA"/>
                                            </svg>
                                            <a class="username" href="#">Anonymous</a>
                                            <br>
                                            <p class="time">2 hours ago</p>
                                        </div>
                                        <div class="message">
                                        </div>
                                    </div>
                                    <div class="donation-sum col-2 pl-0 pr-lg-auto">
                                        <span>$300</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="latest-donations-footer py-3">
                            <a href="#" class="see-all d-flex align-items-center w-100 justify-content-center">See all
                                <svg class="ml-2" width="14" height="14" viewBox="0 0 14 14" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path d="M9.18752 7L3.50003 12.6875V14L10.5 7L3.50003 0V1.31249L9.18752 7Z"
                                              fill="#0E6B3B"/>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-diagnosis" role="tabpanel" aria-labelledby="nav-diagnosis-tab">...</div>
            <div class="tab-pane fade" id="nav-documents" role="tabpanel" aria-labelledby="nav-documents-tab">...</div>
            <div class="tab-pane fade" id="nav-contacts" role="tabpanel" aria-labelledby="nav-contacts-tab">...</div>
        </div>
    </div>
</section>
<section class="contact contact-profile mt-5">
    <div class="container d-flex flex-column align-items-center justify-content-center h-100">
        <h3>Have a speciall offer or want to support us?</h3>
        <a href="#" class="btn d-flex align-items-center justify-content-center mt-4">Contact Us</a>
    </div>
</section>
<section class="blog blog-profile my-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-1"></div>
            <div class="col">
                <h3 class="mb-5">Recent events</h3>
            </div>
        </div>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-12 col-lg-5 d-flex align-items-center pb-5">
                <div class="left"><a href="#"><img class="img-fluid" src="assets/img/blog1.png" alt=""></a></div>
                <div class="right d-flex flex-column justify-content-center pl-3 pr-5">
                    <p class="date">August, 12</p>
                    <a href="#" class="content">Lorem Ipsum - це текст-"риба", що використовується в друкарстві та
                        дизайні.</a>
                </div>
            </div>
            <div class="col-12 col-lg-5 d-flex align-items-center pb-5">
                <div class="left"><a href="#"><img class="img-fluid" src="assets/img/blog2.png" alt=""></a></div>
                <div class="right d-flex flex-column justify-content-center pl-3 pr-5">
                    <p class="date">August, 12</p>
                    <a href="#" class="content">Lorem Ipsum - це текст-"риба", що використовується в друкарстві та
                        дизайні.</a>
                </div>
            </div>
            <div class="col-12 col-lg-5 d-flex align-items-center pb-5">
                <div class="left"><a href="#"><img class="img-fluid" src="assets/img/blog3.png" alt=""></a></div>
                <div class="right d-flex flex-column justify-content-center pl-3 pr-5">
                    <p class="date">August, 12</p>
                    <a href="#" class="content">Lorem Ipsum - це текст-"риба", що використовується в друкарстві та
                        дизайні.</a>
                </div>
            </div>
            <div class="col-12 col-lg-5 d-flex align-items-center pb-5">
                <div class="left"><a href="#"><img class="img-fluid" src="assets/img/blog4.png" alt=""></a></div>
                <div class="right d-flex flex-column justify-content-center pl-3 pr-5">
                    <p class="date">August, 12</p>
                    <a href="#" class="content">Lorem Ipsum - це текст-"риба", що використовується в друкарстві та
                        дизайні.</a>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center mt-1">
            <a href="#" class="see-all">Show more <span class="pl-5"><svg width="10" height="20" viewBox="0 0 10 20"
                                                                          fill="none"
                                                                          xmlns="http://www.w3.org/2000/svg"><path
                    class="svg-path" d="M8.12498 10L0 18.125V20L10 10L0 0V1.87498L8.12498 10Z"
                    fill="#0E6B3B"/></svg></span></a>
        </div>
    </div>
</section>
<footer class="footer ">
    <div class="container h-100 d-flex justify-content-between align-items-center">
        <div class="copyright pl-5">
            <p class="m-0">Logo 2020 (c)</p>
        </div>
        <div class="social-links pr-5">
            <a class="mr-3" href="#">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="insta-logo"
                          d="M22.4058 11.0341C23.2011 11.0341 23.8458 10.3893 23.8458 9.59405C23.8458 8.79876 23.2011 8.15405 22.4058 8.15405C21.6105 8.15405 20.9658 8.79876 20.9658 9.59405C20.9658 10.3893 21.6105 11.0341 22.4058 11.0341Z"
                          fill="white"/>
                    <path class="insta-logo"
                          d="M15.9999 9.83789C14.7812 9.83789 13.5898 10.1993 12.5765 10.8764C11.5631 11.5535 10.7733 12.5158 10.3069 13.6418C9.84056 14.7678 9.71853 16.0067 9.95629 17.202C10.1941 18.3973 10.7809 19.4953 11.6427 20.3571C12.5045 21.2189 13.6024 21.8057 14.7977 22.0435C15.9931 22.2812 17.232 22.1592 18.358 21.6928C19.4839 21.2264 20.4463 20.4366 21.1234 19.4233C21.8005 18.41 22.1619 17.2186 22.1619 15.9999C22.1619 14.3656 21.5127 12.7983 20.3571 11.6427C19.2015 10.4871 17.6342 9.83789 15.9999 9.83789ZM15.9999 19.9999C15.2088 19.9999 14.4354 19.7653 13.7776 19.3258C13.1198 18.8862 12.6071 18.2615 12.3044 17.5306C12.0016 16.7997 11.9224 15.9955 12.0768 15.2195C12.2311 14.4436 12.6121 13.7309 13.1715 13.1715C13.7309 12.6121 14.4436 12.2311 15.2195 12.0767C15.9955 11.9224 16.7997 12.0016 17.5306 12.3044C18.2615 12.6071 18.8862 13.1198 19.3258 13.7776C19.7653 14.4354 19.9999 15.2088 19.9999 15.9999C19.9999 17.0608 19.5785 18.0782 18.8283 18.8283C18.0782 19.5785 17.0608 19.9999 15.9999 19.9999Z"
                          fill="white"/>
                    <path class="insta-logo"
                          d="M16 6.162C19.204 6.162 19.584 6.174 20.849 6.232C21.6098 6.24103 22.3635 6.38073 23.077 6.645C23.5947 6.84469 24.0648 7.15055 24.4571 7.54288C24.8495 7.93521 25.1553 8.40534 25.355 8.923C25.6193 9.63653 25.759 10.3902 25.768 11.151C25.826 12.416 25.838 12.796 25.838 16.001C25.838 19.206 25.826 19.584 25.768 20.849C25.759 21.6098 25.6193 22.3635 25.355 23.077C25.1553 23.5947 24.8495 24.0648 24.4571 24.4571C24.0648 24.8495 23.5947 25.1553 23.077 25.355C22.3635 25.6193 21.6098 25.759 20.849 25.768C19.584 25.826 19.204 25.838 16 25.838C12.796 25.838 12.416 25.826 11.151 25.768C10.3902 25.759 9.63653 25.6193 8.923 25.355C8.40534 25.1553 7.93521 24.8495 7.54288 24.4571C7.15055 24.0648 6.84469 23.5947 6.645 23.077C6.38073 22.3635 6.24103 21.6098 6.232 20.849C6.174 19.584 6.162 19.204 6.162 16C6.162 12.796 6.174 12.416 6.232 11.151C6.24103 10.3902 6.38073 9.63653 6.645 8.923C6.84469 8.40534 7.15055 7.93521 7.54288 7.54288C7.93521 7.15055 8.40534 6.84469 8.923 6.645C9.63653 6.38073 10.3902 6.24103 11.151 6.232C12.416 6.174 12.796 6.162 16 6.162ZM16 4C12.741 4 12.332 4.014 11.052 4.072C10.0568 4.0921 9.07216 4.28077 8.14 4.63C7.34272 4.9383 6.61866 5.40978 6.01422 6.01422C5.40978 6.61866 4.9383 7.34272 4.63 8.14C4.28066 9.07247 4.09198 10.0574 4.072 11.053C4.014 12.333 4 12.74 4 16C4 19.26 4.014 19.668 4.072 20.948C4.0921 21.9432 4.28077 22.9278 4.63 23.86C4.9383 24.6573 5.40978 25.3813 6.01422 25.9858C6.61866 26.5902 7.34272 27.0617 8.14 27.37C9.07247 27.7193 10.0574 27.908 11.053 27.928C12.333 27.986 12.741 28 16 28C19.259 28 19.668 27.986 20.948 27.928C21.9436 27.908 22.9285 27.7193 23.861 27.37C24.6583 27.0617 25.3823 26.5902 25.9868 25.9858C26.5912 25.3813 27.0627 24.6573 27.371 23.86C27.72 22.9275 27.9083 21.9425 27.928 20.947C27.986 19.667 28 19.26 28 16C28 12.74 27.986 12.332 27.928 11.052C27.9079 10.0568 27.7192 9.07216 27.37 8.14C27.0617 7.34272 26.5902 6.61866 25.9858 6.01422C25.3813 5.40978 24.6573 4.9383 23.86 4.63C22.9275 4.281 21.9425 4.09266 20.947 4.073C19.667 4.013 19.26 4 16 4Z"
                          fill="white"/>
                </svg>
            </a>
            <a href="#">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                     width="32px" height="32px" fill="white" viewBox="0 0 60.734 60.733"
                     xml:space="preserve">
<g>
	<path d="M57.378,0.001H3.352C1.502,0.001,0,1.5,0,3.353v54.026c0,1.853,1.502,3.354,3.352,3.354h29.086V37.214h-7.914v-9.167h7.914
		v-6.76c0-7.843,4.789-12.116,11.787-12.116c3.355,0,6.232,0.251,7.071,0.36v8.198l-4.854,0.002c-3.805,0-4.539,1.809-4.539,4.462
		v5.851h9.078l-1.187,9.166h-7.892v23.52h15.475c1.852,0,3.355-1.503,3.355-3.351V3.351C60.731,1.5,59.23,0.001,57.378,0.001z"/>
</g>
                    <g>
</g>
                    <g>
</g>
                    <g>
</g>
                    <g>
</g>
                    <g>
</g>
                    <g>
</g>
                    <g>
</g>
                    <g>
</g>
                    <g>
</g>
                    <g>
</g>
                    <g>
</g>
                    <g>
</g>
                    <g>
</g>
                    <g>
</g>
                    <g>
</g>
</svg>
            </a>
        </div>
    </div>
</footer>

<!--Bootstrap JS-->
<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="node_modules/popper.js/dist/popper.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
<!--Custom script-->
<script src="assets/js/script.js"></script>
</body>
</html>