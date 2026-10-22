@extends('layouts.app')

@section('title', 'About')

@section('content')

    <section class="about">
        <div class="about-hero">
            <h1>Empowering Professionals Through Field-Focused Training</h1>
            <div class="about-hero-buttons">
                <x-navbar.navbar-button href="{{ url('/trainings') }}">Explore Trainings</x-navbar.navbar-button>
                <x-navbar.navbar-button href="{{ url('/trainings') }}">Contact us</x-navbar.navbar-button>
            </div>
        </div>
    </section>
    <section class="about-content">
        <div class="about-content-text">
            <div class="about-content-text-left">
                <h2>About us</h2>
                <img src="{{ asset('images/about-images.png') }}" alt="comptia">
            </div>
            <div class="about-content-text-right">
                <p>ITELEC is a premier technical training center founded in 2022 by industry professionals with extensive field experience. We specialize in delivering high-quality, practical training in cutting-edge digital and technical domains including Cybersecurity, Networking, Cloud Computing, Web Development, Artificial Intelligence, and Audiovisual Technologies.</p><br>
                <p>Our mission is clear: to bridge the gap between academic education and industry requirements by providing 100% hands-on, internationally-oriented training programs led by expert instructors. We don’t just teach theory — we prepare fresh graduates and professionals with the real skills, projects, and industry exposure they need to succeed in today’s competitive job market.</p><br>
                <p>Through strong partnerships with active companies in the field, we offer our trainees valuable internship opportunities and direct recruitment pathways, turning ambition into successful careers.</p>
            </div>
        </div>
        <div class="stats">
            <div>
                <h3>5</h3>
                <p>Years in the market</p>
            </div>
            <div>
                <h3>500+</h3>
                <p>Students trained</p>
            </div>
            <div>
                <h3>70%</h3>
                <p>Employment rate</p>
            </div>
            <div>
                <h3>95%</h3>
                <p>Certification success rate</p>
            </div>
        </div>
    </section>
    <section class="created">
        <div class="created-start">
            <h2>How Itelec was created</h2>
            <p>Join hundreds of students and professionals who have transformed their careers and are now working with leading companies across Algeria and beyond.</p>
        </div>
        <div class="diagram">
            <div class="sirius">
                <img src="{{ asset('images/sirius.png') }}" alt="">
                <p>ITELEC is a premier technical training center founded in 2022 by industry professionals with extensive field experience. We specialize in delivering high-quality, practical training in cutting-  edge digital and technical domains including Cybersecurity, Networking, Cloud Computing, Web Development, Artificial Intelligence, and Audiovisual Technologies.</p>
            </div>
            <div class="badni">
                <img src="{{ asset('images/badni.png') }}" alt="">
                <p>ITELEC is a premier technical training center founded in 2022 by industry professionals with extensive field experience. We specialize in delivering high-quality, practical training in cutting-  edge digital and technical domains including Cybersecurity, Networking, Cloud Computing, Web Development, Artificial Intelligence, and Audiovisual Technologies.</p>
            </div>
            <div class="itelec">
                <img src="{{ asset('images/ITELEC.png') }}" alt="">
                <p>ITELEC is a premier technical training center founded in 2022 by industry professionals with extensive field experience. We specialize in delivering high-quality, practical training in cutting-  edge digital and technical domains including Cybersecurity, Networking, Cloud Computing, Web Development, Artificial Intelligence, and Audiovisual Technologies.</p>
            </div>
        </div>
        <style>
            .diagram{
                min-height: 1000px;
                display: flex;
                flex-direction: column;
                background-image: url('/images/Desktop.png');
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
                .sirius{
                    display: flex;
                    flex-direction: column;
                    gap:20px;
                    img{
                        width: 221px;
                        height: auto;
                        padding: 0;
                    }
                    p{
                        max-width: 500px;
                        text-align: left;
                    }
                }
                .badni {
                    margin-left: 850px!important;
                    display: flex;
                    flex-direction: column;
                    gap: 20px;
                    align-self: flex-end;   /* pushes this item to the right edge of the column */
                    img {
                        width: 221px;
                        height: auto;
                        padding: 0;
                    }
                    p {
                        max-width: 500px;
                    }
                }
                .itelec {
                    margin-top: 500px; 
                    display: flex;
                    flex-direction: column;
                    gap: 20px;
                    align-items: center;   /* centers all children (img + p) horizontally */
                    text-align: center;     /* centers the p's text too, since text-align isn't a flex property */
                    img {
                        width: 221px;
                        height: auto;
                        padding: 0;
                    }
                    p {
                        max-width: 500px;
                    }
                }
            }
        </style>

    </section>
    <section class="instructors-section">
        <div class="instructors-start">
            <h2>Our instructors</h2>
            <x-navbar.navbar-button href="{{ url('/trainings') }}">Join our team</x-navbar.navbar-button>
        </div>
        <div class="instructors">
            <div class="instructor">
                <img src=" {{asset('images/user.png')}} " alt="">
                <h3>david david</h3>
                <p>developer</p>
                <i class="bi bi-linkedin"></i>
            </div>
            <div class="instructor">
                <img src=" {{asset('images/user.png')}} " alt="">
                <h3>david david</h3>
                <p>developer</p>
                <i class="bi bi-linkedin"></i>
            </div>
            <div class="instructor">
                <img src=" {{asset('images/user.png')}} " alt="">
                <h3>david david</h3>
                <p>developer</p>
                <i class="bi bi-linkedin"></i>
            </div>
            <div class="instructor">
                <img src=" {{asset('images/user.png')}} " alt="">
                <h3>david david</h3>
                <p>developer</p>
                <i class="bi bi-linkedin"></i>
            </div>
            <div class="instructor">
                <img src=" {{asset('images/user.png')}} " alt="">
                <h3>david david</h3>
                <p>developer</p>
                <i class="bi bi-linkedin"></i>
            </div>
            <div class="instructor">
                <img src=" {{asset('images/user.png')}} " alt="">
                <h3>david david</h3>
                <p>developer</p>
                <i class="bi bi-linkedin"></i>
            </div>
            <div class="instructor">
                <img src=" {{asset('images/user.png')}} " alt="">
                <h3>david david</h3>
                <p>developer</p>
                <i class="bi bi-linkedin"></i>
            </div>
            <div class="instructor">
                <img src=" {{asset('images/user.png')}} " alt="">
                <h3>david david</h3>
                <p>developer</p>
                <i class="bi bi-linkedin"></i>
            </div>
            <div class="instructor">
                <img src=" {{asset('images/user.png')}} " alt="">
                <h3>david david</h3>
                <p>developer</p>
                <i class="bi bi-linkedin"></i>
            </div>
        </div>
        <div class="instructors-end">
            <p>All our <span>instructors</span> are active <span>professionals</span> who <span>work daily in the industry, not just full-time teachers.</span>They bring up-to-date, real-market experience and deep knowledge of current technologies, challenges, and market demands directly into every training session.</p>
            <x-navbar.navbar-button href="{{ url('/trainings') }}">Explore Trainings</x-navbar.navbar-button>
        </div>
    </section>
    <section class="contact-us">
        <div class="contact-left">
            <h2>Contact us</h2>
            <div class="contact-left-info">
                <i class="bi bi-telephone"></i>
                <div class="contact-left-info-right">
                    <p>Call us</p>
                    <span>+1 400 500 600</span>
                </div>
            </div>
            <div class="contact-left-info">
                <i class="bi bi-envelope"></i>
                <div class="contact-left-info-right">
                    <p>Write an email</p>
                    <span>hello@example.com</span>
                </div>
            </div>
            <div class="contact-left-info">
                <i class="bi bi-geo-alt"></i>
                <div class="contact-left-info-right">
                    <p>Visit our office</p>
                    <span>192 Griffin Street, Gilbert, AZ 32521</span>
                </div>
            </div>
            <div>
                <p class="follow-us">Follow us</p>
                <div class="contact-logos">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                </div>

            </div>
        </div>
        <div class="form-section">
            <form action="" class="contact-form">
                <h2>Send us a message</h2>

                <label for="name">Name</label>
                <input name="name" type="text" placeholder="Name">

                <label for="email">Email</label>
                <input name="email" type="email" placeholder="Email">

                <label for="message">Message</label>
                <input name="message" type="text-area" placeholder="Type your message">

                <button>Send message</button>

                <p>We reply in under than 24H</p>
            </form>
        </div>
    </section>
@endsection