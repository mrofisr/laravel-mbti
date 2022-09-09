<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head', ['title' => 'Mulai Test'])
    <link href="{{ secure_asset('css/carousel-quiz.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('js/carousel-quiz.js') }}" rel="stylesheet">

</head>
<body>
    <div class="flex items-center justify-center">
        <div class="container">
            @csrf
            <form action="/hasil" method="post">
                {{ csrf_field() }}
                <div class="w-full mb-8 overflow-hidden ">
                    <div class="w-full overflow-x-auto">
                    <header class="white-banner" role="banner">
    <div class="container">
        <a href="/"><img class="logo" src=""></a>
    </div>
</header>
<section class="row title">
    <div class="twothirds aligncenter textcenter white-text">
        <h1>How Do You Measure Up?</h1>
        <h2>Cybersecurity Frameworks and Foundational Security Controls</h2>
    </div>
</section>
<section>
    <div class="carousel--wrapper carousel--wrapper--sec">
        <div class="carousel">
            <div class="progress-bar">
                <div class="progress-bar-insider" data-progress=""></div>
            </div>
            <div class="carousel__content" style="width: 1800%; transform: translate(0%, 0px);">
                <div class="carousel--item" style="width: 5.55556%;">
                    <p class="carousel--title carousel--title--sub">Take a few minutes to compare your adoption of CIS
                        Critical Security Controls 1 – 5 with similar sized organizations surveyed by Dimensional
                        Research.</p>
                    <span class="carousel--radios"><button class="btn btn-primary nav--buttons--right mt">Start</button>
                    </span>
                </div>
                <div class="carousel--item" style="width: 5.55556%;">
                    <p class="carousel--title">Company Size?</p>
                    <p class="carousel--title carousel--title--sub">How many employees in your organization?</p>
                    <span class="carousel--radios">
                        <div class="radio-item">
                            <input id="c100" data-text="100 - 1,000" data-value="100-1,000" name="size" type="radio"
                                value="0">
                            <label for="c100">100 - 1,000</label>
                        </div>
                        <div class="radio-item">
                            <input id="c1000" data-text="1,001 - 5,000" data-value="1,001-5000" name="size" type="radio"
                                value="1">
                            <label for="c1000">1,001-5000</label>
                        </div>
                        <div class="radio-item">
                            <input id="c5000" data-text=">5,000" data-value="5,000+" name="size" type="radio" value="2">
                            <label for="c5000">&gt;5,000</label>
                        </div>
                    </span>
                </div>
                <div class="carousel--item violet" style="width: 5.55556%;">
                    <p class="carousel--title">Question 1</p>
                    <p class="carousel--title carousel--title--sub">Does your organization have automated controls to
                        inventory systems and devices connected to the network?
                    </p>
                    <span class="carousel--radios">
                        <div class="radio-item">
                            <input id="q1yes" class="questions" data-text="Yes" name="q1" type="radio">
                            <label for="q1yes">Yes</label>
                        </div>
                        <div class="radio-item">
                            <input id="q1no" data-text="No" name="q1" type="radio">
                            <label for="q1no">No</label>
                        </div>
                    </span>
                </div>
                <div class="carousel--item violet" style="width: 5.55556%;">
                    <p class="carousel--title">Question 2</p>
                    <p class="carousel--title carousel--title--sub">Does your organization have automated controls to
                        differentiate between authorized and unauthorized systems and devices?</p>
                    <span class="carousel--radios">
                        <div class="radio-item">
                            <input id="q2yes" class="questions" data-text="Yes" name="q2" type="radio">
                            <label for="q2yes">Yes</label>
                        </div>
                        <div class="radio-item">
                            <input id="q2no" data-text="No" name="q2" type="radio">
                            <label for="q2no">No</label>
                        </div>
                    </span>
                </div>
                <div class="carousel--item violet" style="width: 5.55556%;">
                    <p class="carousel--title">Question 3</p>
                    <p class="carousel--title carousel--title--sub">Does your organization have automated controls to
                        allow only authorized systems and devices to connect to the network?</p>
                    <span class="carousel--radios">
                        <div class="radio-item">
                            <input id="q3yes" class="questions" data-text="Yes" name="q3" type="radio">
                            <label for="q3yes">Yes</label>
                        </div>
                        <div class="radio-item">
                            <input id="q3no" data-text="No" name="q3" type="radio">
                            <label for="q3no">No</label>
                        </div>
                    </span>
                </div>
                <div class="carousel--item accent-blue" style="width: 5.55556%;">
                    <p class="carousel--title">Question 4</p>
                    <p class="carousel--title carousel--title--sub">Does your organization have automated controls to
                        inventory applications and software connected to the network?</p>
                    <span class="carousel--radios">
                        <div class="radio-item">
                            <input id="q4yes" class="questions" data-text="Yes" name="q4" type="radio">
                            <label for="q4yes">Yes</label>
                        </div>
                        <div class="radio-item">
                            <input id="q4no" data-text="No" name="q4" type="radio">
                            <label for="q4no">No</label>
                        </div>
                    </span>
                </div>
                <div class="carousel--item accent-blue" style="width: 5.55556%;">
                    <p class="carousel--title">Question 5</p>
                    <p class="carousel--title carousel--title--sub">Does your organization have automated controls to
                        differentiate between authorized and unauthorized applications and software?</p>
                    <span class="carousel--radios">
                        <div class="radio-item">
                            <input id="q5yes" class="questions" data-text="Yes" name="q5" type="radio">
                            <label for="q5yes">Yes</label>
                        </div>
                        <div class="radio-item">
                            <input id="q5no" data-text="No" name="q5" type="radio">
                            <label for="q5no">No</label>
                        </div>
                    </span>
                </div>
                <div class="carousel--item accent-blue" style="width: 5.55556%;">
                    <p class="carousel--title">Question 6</p>
                    <p class="carousel--title carousel--title--sub">Does your organization have automated controls to
                        allow only authorized applications and software to install or execute?</p>
                    <span class="carousel--radios">
                        <div class="radio-item">
                            <input id="q6yes" class="questions" data-text="Yes" name="q6" type="radio">
                            <label for="q6yes">Yes</label>
                        </div>
                        <div class="radio-item">
                            <input id="q6no" data-text="No" name="q6" type="radio">
                            <label for="q6no">No</label>
                        </div>
                    </span>
                </div>
                <div class="carousel--item blue" style="width: 5.55556%;">
                    <p class="carousel--title">Question 7</p>
                    <p class="carousel--title carousel--title--sub">Does your organization have automated controls to
                        enforce security configuration standards for laptops, workstations, and servers?</p>
                    <span class="carousel--radios">
                        <div class="radio-item">
                            <input id="q7yes" class="questions" data-text="Yes" name="q7" type="radio">
                            <label for="q7yes">Yes</label>
                        </div>
                        <div class="radio-item">
                            <input id="q7no" data-text="No" name="q7" type="radio">
                            <label for="q7no">No</label>
                        </div>
                    </span>
                </div>
                <div class="carousel--item blue" style="width: 5.55556%;">
                    <p class="carousel--title">Question 8</p>
                    <p class="carousel--title carousel--title--sub">Does your organization have automated controls to
                        perform vulnerability scanning?
                    </p>
                    <span class="carousel--radios">
                        <div class="radio-item">
                            <input id="q8yes" class="questions" data-text="Yes" name="q8" type="radio">
                            <label for="q8yes">Yes</label>
                        </div>
                        <div class="radio-item">
                            <input id="q8no" data-text="No" name="q8" type="radio">
                            <label for="q8no">No</label>
                        </div>
                    </span>
                </div>
                <div class="carousel--item blue" style="width: 5.55556%;">
                    <p class="carousel--title">Question 9</p>
                    <p class="carousel--title carousel--title--sub">Are your tools able to do vulnerability scanning in
                        authenticated mode?</p>
                    <span class="carousel--radios">
                        <div class="radio-item">
                            <input id="q9yes" class="questions" data-text="Yes" name="q9" type="radio">
                            <label for="q9yes">Yes</label>
                        </div>
                        <div class="radio-item">
                            <input id="q9no" data-text="No" name="q9" type="radio">
                            <label for="q9no">No</label>
                        </div>
                    </span>
                </div>
                <div class="carousel--item accent-blue" style="width: 5.55556%;">
                    <p class="carousel--title">Question 10</p>
                    <p class="carousel--title carousel--title--sub">Do your organization’s vulnerability scanning tools
                        use agents?</p>
                    <span class="carousel--radios">
                        <div class="radio-item">
                            <input id="q10yes" class="questions" data-text="Yes" name="q10" type="radio">
                            <label for="q10yes">Yes</label>
                        </div>
                        <div class="radio-item">
                            <input id="q10no" data-text="No" name="q10" type="radio">
                            <label for="q10no">No</label>
                        </div>
                    </span>
                </div>
                <div class="carousel--item accent-blue" style="width: 5.55556%;">
                    <p class="carousel--title">Question 11</p>
                    <p class="carousel--title carousel--title--sub">Does your organization have automated controls to
                        scan systems on the network for vulnerabilities on at least a weekly basis?</p>
                    <span class="carousel--radios">
                        <div class="radio-item">
                            <input id="q11yes" class="questions" data-text="Yes" name="q11" type="radio">
                            <label for="q11yes">Yes</label>
                        </div>
                        <div class="radio-item">
                            <input id="q11no" data-text="No" name="q11" type="radio">
                            <label for="q11no">No</label>
                        </div>
                    </span>
                </div>
                <div class="carousel--item accent-blue" style="width: 5.55556%;">
                    <p class="carousel--title">Question 12</p>
                    <p class="carousel--title carousel--title--sub">Does your organization have automated controls to
                        verify that important vulnerabilities with patches available are addressed within two weeks?</p>
                    <span class="carousel--radios">
                        <div class="radio-item">
                            <input id="q12yes" class="questions" data-text="Yes" name="q12" type="radio">
                            <label for="q12yes">Yes</label>
                        </div>
                        <div class="radio-item">
                            <input id="q12no" data-text="No" name="q12" type="radio">
                            <label for="q12no">No</label>
                        </div>
                    </span>
                </div>
                <div class="carousel--item violet" style="width: 5.55556%;">
                    <p class="carousel--title">Question 13</p>
                    <p class="carousel--title carousel--title--sub">Does your organization have automated controls to
                        minimize use of accounts having administrative privileges?
                    </p>
                    <span class="carousel--radios">
                        <div class="radio-item">
                            <input id="q13yes" class="questions" data-text="Yes" name="q13" type="radio">
                            <label for="q13yes">Yes</label>
                        </div>
                        <div class="radio-item">
                            <input id="q13no" data-text="No" name="q13" type="radio">
                            <label for="q13no">No</label>
                        </div>
                    </span>
                </div>
                <div class="carousel--item violet" style="width: 5.55556%;">
                    <p class="carousel--title">Question 14</p>
                    <p class="carousel--title carousel--title--sub">Does your organization have automated controls to
                        change default passwords for applications, operating systems, routers, firewalls, wireless
                        access points, and other systems?
                    </p>
                    <span class="carousel--radios">
                        <div class="radio-item">
                            <input id="q14yes" class="questions" data-text="Yes" name="q14" type="radio">
                            <label for="q14yes">Yes</label>
                        </div>
                        <div class="radio-item">
                            <input id="q14no" data-text="No" name="q14" type="radio">
                            <label for="q14no">No</label>
                        </div>
                    </span>
                </div>
                <div class="carousel--item violet" style="width: 5.55556%;">
                    <p class="carousel--title">Question 15</p>
                    <p class="carousel--title carousel--title--sub">Does your organization have automated controls for
                        multi-factor authentication for administrative access?</p>
                    <span class="carousel--radios">
                        <div class="radio-item">
                            <input id="q15yes" class="questions" data-text="Yes" name="q15" type="radio">
                            <label for="q15yes">Yes</label>
                        </div>
                        <div class="radio-item">
                            <input id="q15no" data-text="No" name="q15" type="radio">
                            <label for="q15no">No</label>
                        </div>
                    </span>
                </div>
                <div class="carousel--item" style="width: 5.55556%;">
                    <p class="carousel--title">Automated Controls Comparison</p>
                    <div class="btn btn-primary carousel--btn" onclick="calc_results(this);">
                        Calculate Results
                    </div>
                </div>
            </div>
            <div class="carousel__nav">
                <a class="nav--buttons nav--buttons--left" href="#" style="display: none;">←</a> <a
                    class="nav--buttons nav--buttons--right" href="#" style="display: none;">→</a>
            </div>
        </div>
    </div>
</section>
<section class="row gray pad textcenter" id="auto-con-calc" style="display: none;"></section>
<section class="row gray">
    <div class="container">
        <div class="onehalf aligncenter textcenter lightgray">
            <h3>Check out the entire Dimensional Research Survey Report</h3><a class="btn btn-primary"
                href="http://lookbook.tenable.com/foundational-controls-adoption/survey-report" target="_blank">Read the
                Report Now</a>
        </div>
    </div>
</section>
                    </div>
                </div>
            </form>
        </div>
        <footer class="footer bg-white fixed bottom-0 w-full z-10">
            <div class="container mx-auto">
                <div class="border-t-2 border-gray-300 flex flex-col items-center">
                    <div class="sm:w-2/3 text-center py-6">
                        <p class="text-sm text-green-700 font-bold mb-2">
                            © {{ date('Y') }} by TI UIN Walisongo
                        </p>
                    </div>
                </div>
            </div>
        </footer>
</body>

</html>
