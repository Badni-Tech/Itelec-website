@extends('layouts.app')

@section('title', 'training')

@section('content')

<div class="training-layout">
    <div class="training-main">
        <section class="training-start">
            <div class="training-start-left">
                <a href="/">All trainings</a>
                <img src="{{ asset('images/cisco-trainins.png') }}" alt="">
                <h1>{{ $course->title }}</h1>
                <p>{{  $course->description  }}</p>
                <div><i class="bi bi-star-fill"></i>4.9 Rating • <i class="bi bi-people"></i>140 Graduator</div>
            </div>
        </section>

        <section class="training-details">
            <div class="details-collapse">
                <h2>Training program</h2>
                <span>~40 Hours</span>
                <div class="collapse">
                    <details>
                        <summary>Networking essentials (20%)</summary>
                        <p>Networking Basics | OSI & TCP/IP models | LAN & Switches | Physical Layer|  Mediums | Ethernet Frame | MAC address | Switch Operations | Cisco IOS CLI | Basic conf | Duplex Speed | ARP | LAB</p>
                    </details>
                    <details>
                        <summary>IP Connectivity (20 %)</summary>
                        <p>Networking Basics | OSI & TCP/IP models | LAN & Switches | Physical Layer|  Mediums | Ethernet Frame | MAC address | Switch Operations | Cisco IOS CLI | Basic conf | Duplex Speed | ARP | LAB</p>
                    </details>
                    <details>
                        <summary>Network Access (25 %)</summary>
                        <p>Networking Basics | OSI & TCP/IP models | LAN & Switches | Physical Layer|  Mediums | Ethernet Frame | MAC address | Switch Operations | Cisco IOS CLI | Basic conf | Duplex Speed | ARP | LAB</p>
                    </details>
                    <details>
                        <summary>Network Access v2.0 (10 %)</summary>
                        <p>Networking Basics | OSI & TCP/IP models | LAN & Switches | Physical Layer|  Mediums | Ethernet Frame | MAC address | Switch Operations | Cisco IOS CLI | Basic conf | Duplex Speed | ARP | LAB</p>
                    </details>
                    <details>
                        <summary>Networking essentials 20%</summary>
                        <p>Networking Basics | OSI & TCP/IP models | LAN & Switches | Physical Layer|  Mediums | Ethernet Frame | MAC address | Switch Operations | Cisco IOS CLI | Basic conf | Duplex Speed | ARP | LAB</p>
                    </details>
                    <details>
                        <summary>Security Fundamentals (15 %)</summary>
                        <p>Networking Basics | OSI & TCP/IP models | LAN & Switches | Physical Layer|  Mediums | Ethernet Frame | MAC address | Switch Operations | Cisco IOS CLI | Basic conf | Duplex Speed | ARP | LAB</p>
                    </details>
                </div>
            </div>
        </section>

        <section class="training-overview">
            <h2>Training overview</h2>
            <div class="training-overview-infos">
                <div class="infos-left">
                    <h3>Who needs this training</h3>
                    <span><i class="bi bi-check-circle-fill checkmark"></i> Expert instructors with industry</span>
                    <span><i class="bi bi-check-circle-fill checkmark"></i> Interactive workshops for hands-on learning</span>
                    <span><i class="bi bi-check-circle-fill checkmark"></i> Expert instructors</span>
                    <span><i class="bi bi-check-circle-fill checkmark"></i> Networking opportunities</span>
                </div>
                <div class="infos-right">
                    <h3>What you'll learn</h3>
                    <span><i class="bi bi-check-circle-fill checkmark"></i> Expert instructors with industry</span>
                    <span><i class="bi bi-check-circle-fill checkmark"></i> Expert instructors with industry</span>
                    <span><i class="bi bi-check-circle-fill checkmark"></i> Expert instructors with industry</span>
                    <span><i class="bi bi-check-circle-fill checkmark"></i> Expert instructors with industry</span>
                </div>
            </div>
        </section>
    </div>

    <div class="training-start-right">
        <img src="{{ asset('images/media.png') }}" alt="">
        <h2>About Training</h2>
        <span><i class="bi bi-calendar-event"></i> Duration: {{  $course->duration  }}  -  Flexible scheduling</span>
        <span><i class="bi bi-clock"></i> Total: {{  $course->total  }} Hours</span>
        <span><i class="bi bi-hand-index"></i> 100% Practical</span>
        <span><i class="bi bi-patch-check"></i> Certificate of completion</span>
        
        <h2>Instructor</h2>
        <div class="tutor">
            <img src="{{ asset('images/student-avatar.png') }}" alt="">
            <div>
                <h3>{{  $course->instructor  }}</h3>
                <p>{{  $course->instructor_des  }}</p>
            </div>
        </div>

        <div class="price-section">
            <p class="price">Start from</p>
            <span class="price1">4,000 DA </span>
            <span class="price2"> {{  $course->price  }}</span>
        </div>
        <span class="time-left">21 hours left at this price!</span>
        <a href="/">Register Now !</a>
        <p class="group">Next group start on 15 August</p>
    </div>
</div>
<section class="end">
    <div class="plans">
        <div class="plans-card">
            <h3>August 2026</h3>
            <span><i class="bi bi-geo-alt"></i> On site training</span>
            <span><i class="bi bi-calendar-fill"></i> Starting date: 15 August</span>
            <span><i class="bi bi-calendar-date"></i> Monday, Tuesday, Friday</span>
            <span><i class="bi bi-person"></i> 50 Seats left</span>
            <span><i class="bi bi-cash"></i> 4,OOO DA</span>
            <a href="/">Register Now !</a>
        </div>
        <div class="plans-card">
            <h3>August 2026</h3>
            <span><i class="bi bi-geo-alt"></i> On site training</span>
            <span><i class="bi bi-calendar-fill"></i> Starting date: 15 August</span>
            <span><i class="bi bi-calendar-date"></i> Monday, Tuesday, Friday</span>
            <span><i class="bi bi-person"></i> 50 Seats left</span>
            <span><i class="bi bi-cash"></i> 4,OOO DA</span>
            <a href="/">Register Now !</a>
        </div>
        <div class="plans-card">
            <h3>August 2026</h3>
            <span><i class="bi bi-geo-alt"></i> On site training</span>
            <span><i class="bi bi-calendar-fill"></i> Starting date: 15 August</span>
            <span><i class="bi bi-calendar-date"></i> Monday, Tuesday, Friday</span>
            <span><i class="bi bi-person"></i> 50 Seats left</span>
            <span><i class="bi bi-cash"></i> 4,OOO DA</span>
            <a href="/">Register Now !</a>
        </div>
        <div class="plans-card">
            <h3>August 2026</h3>
            <span><i class="bi bi-geo-alt"></i> On site training</span>
            <span><i class="bi bi-calendar-fill"></i> Starting date: 15 August</span>
            <span><i class="bi bi-calendar-date"></i> Monday, Tuesday, Friday</span>
            <span><i class="bi bi-person"></i> 50 Seats left</span>
            <span><i class="bi bi-cash"></i> 4,OOO DA</span>
            <a href="/">Register Now !</a>
        </div>
    </div>
</section>

<section class="students">
    <h2>What our students think about us</h2>
    <div class="students-tests">
        <div class="student-test">
            <p>"Shadcn UI Kit for Figma has completely transformed our design process. It’s incredibly intuitive and saves us so much time. The components are beautifully crafted and customizable.”</p>
            <div class="student-info">
                <img src="{{ asset('images/student-avatar.png') }}" alt="comptia">
                <div>
                    <p>arslan</p>
                    <p>developer</p>
                </div>
            </div>
        </div>
        <div class="student-test">
            <p>"Shadcn UI Kit for Figma has completely transformed our design process. It’s incredibly intuitive and saves us so much time. The components are beautifully crafted and customizable.”</p>
            <div class="student-info">
                <img src="{{ asset('images/student-avatar.png') }}" alt="comptia">
                <div>
                    <p>arslan</p>
                    <p>developer</p>
                </div>
            </div>
        </div>
        <div class="student-test">
            <p>"Shadcn UI Kit for Figma has completely transformed our design process. It’s incredibly intuitive and saves us so much time. The components are beautifully crafted and customizable.”</p>
            <div class="student-info">
                <img src="{{ asset('images/student-avatar.png') }}" alt="comptia">
                <div>
                    <p>arslan</p>
                    <p>developer</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <a href="#">Register Now!</a>
    </div>
</section>

<section class="popular">
    <div class="popular-start">
        <h2>Our most popular trainings</h2>
    </div>
    <div class="popular-info">
        <div class="popular-info-item">
            <img class="popular-item" src="{{ asset('images/popular-image.png') }}" alt="">
            <span class="popular-sticky-item">cisco</span>
            <h3>Getting Started with shadcn/ui: A Complete Guide</h3>
            <p>Whether you want to learn fundamental skills, boost your career with an international certification, or change your career.</p>
            <span class="duration"><i class="bi bi-clock"></i> Duration: 7 days</span><br>
            <a href="{{ url('/') }}">Learn more <i class="bi bi-chevron-right"></i></a>
        </div>
        <div class="popular-info-item">
            <img class="popular-item" src="{{ asset('images/popular-image.png') }}" alt="">
            <span class="popular-sticky-item">cisco</span>
            <h3>Getting Started with shadcn/ui: A Complete Guide</h3>
            <p>Whether you want to learn fundamental skills, boost your career with an international certification, or change your career.</p>
            <span class="duration"><i class="bi bi-clock"></i> Duration: 7 days</span><br>
            <a href="{{ url('/') }}">Learn more <i class="bi bi-chevron-right"></i></a>
        </div>
        <div class="popular-info-item">
            <img class="popular-item" src="{{ asset('images/popular-image.png') }}" alt="">
            <span class="popular-sticky-item">cisco</span>
            <h3>Getting Started with shadcn/ui: A Complete Guide</h3>
            <p>Whether you want to learn fundamental skills, boost your career with an international certification, or change your career.</p>
            <span class="duration"><i class="bi bi-clock"></i> Duration: 7 days</span><br>
            <a href="{{ url('/') }}">Learn more <i class="bi bi-chevron-right"></i></a>
        </div>
        <div class="popular-info-item">
            <img class="popular-item" src="{{ asset('images/popular-image.png') }}" alt="">
            <span class="popular-sticky-item">cisco</span>
            <h3>Getting Started with shadcn/ui: A Complete Guide</h3>
            <p>Whether you want to learn fundamental skills, boost your career with an international certification, or change your career.</p>
            <span class="duration"><i class="bi bi-clock"></i> Duration: 7 days</span><br>
            <a href="{{ url('/') }}">Learn more <i class="bi bi-chevron-right"></i></a>
        </div>
    </div>
</section>

<style>
    .training-layout {
        display: flex;
        gap: 40px;
        padding: 40px 60px 0;
        align-items: flex-start;
        max-width: 1400px;
        margin: 0 auto;
    }

    .training-main {
        flex: 1;
        max-width: 65%;
    }
    

    .training-start-right {
        position: sticky;
        top: 50px;                   
        width: 340px;
        min-width: 320px;
        background-color: white;
        display: flex;
        flex-direction: column;
        border: solid 1px #E5E5E5;
        border-radius: 10px;
        height: fit-content;
        box-shadow: 0 4px 20px rgba(0,0,0,0.06);
        margin-bottom: 40px;
    }

    .training-start-right > *:not(:first-child) {
        padding: 16px 20px;
    }

    .training-start-right img:first-child {
        width: 100%;
        border-radius: 10px 10px 0 0;
    }

    .training-start-right .tutor {
        display: flex;
        gap: 10px;
        align-items: center;
    }
    .training-start-right .tutor p {
        color: #6F6F6F;
        margin: 0;
        font-size: 13px;
    }
    .training-start-right .tutor h3 {
        margin: 0;
        font-size: 15px;
    }
    .training-start-right .tutor img {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        object-fit: cover;
    }

    .training-start-right h2 {
        font-size: 16px;
        font-weight: 600;
        margin: 0;
    }

    .training-start-right span {
        font-size: 14px;
        font-weight: 400;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .training-start-right .price1 {
        font-size: 16px;
        color: #6F6F6F;
        text-decoration: line-through;
    }
    .training-start-right .price2 {
        font-size: 26px;
        color: #1D4ED8;
        font-weight: 700;
    }
    .training-start-right .price {
        font-size: 13px;
        color: #747474;
        margin: 0;
    }
    .training-start-right .price-section {
        display: flex;
        gap: 14px;
        align-items: center;
    }
    .training-start-right .time-left {
        color: #FF8D28;
        font-size: 14px;
        text-align: center;
        justify-content: center;
    }
    .training-start-right a {
        background-color: #1D4ED8;
        width: 80%;
        color: white;
        align-self: center;
        text-align: center;
        border-radius: 10px;
        padding: 12px;
        text-decoration: none;
        font-weight: 500;
        margin-bottom: 8px;
    }
    .training-start-right .group {
        text-align: center;
        color: #0A0A0A;
        font-size: 14px;
        margin: 0 0 16px 0;
    }

    .training-start {
        background-color: #E4EEFF;
        background-image: url('/images/star.png');
        background-position: top right;
        background-repeat: no-repeat;
        padding: 40px;
        border-radius: 12px;
        margin-bottom: 40px;
    }

    .training-start-left {
        display: flex;
        flex-direction: column;
        gap: 18px;
    }
    .training-start-left img {
        width: 150px;
        height: auto;
    }
    .training-start-left a {
        font-weight: 500;
        color: #1D4ED8;
        text-decoration: none;
    }
    .training-start-left h1 {
        font-size: 28px;
        font-weight: 600;
        margin: 0;
        line-height: 1.3;
    }
    .training-start-left p {
        font-size: 16px;
        font-weight: 400;
        margin: 0;
        line-height: 1.6;
        color: #333;
    }

    .training-details {
        margin-bottom: 40px;
    }
    .details-collapse {
        background-color: #F7F7F7;
        border: solid 1px #E5E5E5;
        padding: 20px;
        border-radius: 10px;
    }
    .details-collapse h2 {
        font-size: 22px;
        margin: 0 0 4px 0;
    }
    .details-collapse > span {
        font-size: 14px;
        color: #666;
    }
    .details-collapse details {
        padding: 16px 0;
        border-bottom: 1px solid #E5E5E5;
    }
    .details-collapse details:last-child {
        border-bottom: none;
    }
    .details-collapse summary {
        font-size: 16px;
        color: #0A0A0A;
        list-style: none;
        cursor: pointer;
        font-weight: 500;
    }
    .details-collapse summary::-webkit-details-marker {
        display: none;
    }
    .details-collapse details p {
        padding-top: 10px;
        font-size: 14px;
        color: #414141;
        margin: 0;
        line-height: 1.5;
    }

    .training-overview {
        margin-bottom: 20px;
    }
    .training-overview h2 {
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 30px;
    }
    .training-overview h3 {
        font-size: 18px;
        font-weight: 500;
        margin-bottom: 16px;
    }
    .training-overview-infos {
        display: flex;
        gap: 50px;
    }
    .infos-left, .infos-right {
        display: flex;
        flex-direction: column;
        gap: 18px;
        flex: 1;
    }
    .training-overview span {
        font-size: 15px;
        color: #434343;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .checkmark {
        color: #1D4ED8;
    }

    .end {
        padding: 40px 60px;
        max-width: 1400px;
        margin: 0 auto;
    }
    .plans {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        gap: 20px;
    }
    .plans-card {
        display: flex;
        flex-direction: column;
        border: solid 1px #E5E5E5;
        border-radius: 10px;
        padding: 20px;
        gap: 14px;
        background: white;
    }
    .plans-card h3 {
        font-size: 18px;
        font-weight: 600;
        margin: 0 0 8px 0;
    }
    .plans-card span {
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .plans-card a {
        text-align: center;
        background-color: #1D4ED8;
        padding: 10px;
        border-radius: 8px;
        color: white;
        text-decoration: none;
        margin-top: 8px;
        font-weight: 500;
    }

    .students {
        padding: 40px 60px;
        max-width: 1400px;
        margin: 0 auto;
    }
    .students h2 {
        font-size: 24px;
        margin-bottom: 30px;
    }
    .students-tests {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 24px;
        margin-bottom: 30px;
    }
    .student-test {
        background: #F9F9F9;
        padding: 24px;
        border-radius: 12px;
        border: 1px solid #E5E5E5;
    }
    .student-test > p {
        font-size: 15px;
        line-height: 1.6;
        margin-bottom: 20px;
        color: #333;
    }
    .student-info {
        display: flex;
        align-items: center;
        gap: 12px;
    }
    .student-info img {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        object-fit: cover;
    }
    .student-info p {
        margin: 0;
        font-size: 14px;
    }
    .student-info p:first-child {
        font-weight: 600;
    }
    .students .container a {
        display: block;
        max-width: 320px;
        margin: 0 auto;
        background-color: #1D4ED8;
        color: white;
        text-align: center;
        padding: 12px;
        border-radius: 10px;
        text-decoration: none;
        font-weight: 500;
    }

    .popular {
        padding: 40px 60px 60px;
        max-width: 1400px;
        margin: 0 auto;
    }
    .popular h2 {
        font-size: 24px;
        margin-bottom: 30px;
    }
    .popular-info {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        gap: 24px;
    }
    .popular-info-item {
        border: 1px solid #E5E5E5;
        border-radius: 12px;
        overflow: hidden;
        background: white;
        position: relative;
    }
    .popular-info-item img.popular-item {
        width: 100%;
        height: 160px;
        object-fit: cover;
    }
    .popular-sticky-item {
        position: absolute;
        top: 12px;
        left: 12px;
        background: #1D4ED8;
        color: white;
        font-size: 12px;
        padding: 4px 10px;
        border-radius: 20px;
    }
    .popular-info-item h3 {
        font-size: 16px;
        padding: 16px 16px 8px;
        margin: 0;
    }
    .popular-info-item p {
        font-size: 14px;
        color: #555;
        padding: 0 16px;
        margin: 0 0 12px;
        line-height: 1.5;
    }
    .popular-info-item .duration {
        padding: 0 16px;
        font-size: 13px;
        color: #666;
    }
    .popular-info-item a {
        display: inline-block;
        padding: 12px 16px 16px;
        color: #1D4ED8;
        text-decoration: none;
        font-weight: 500;
        font-size: 14px;
    }

    @media (max-width: 900px) {
        .training-layout {
            flex-direction: column;
            padding: 20px;
            gap: 30px;
        }
        .training-main {
            max-width: 100%;
        }
        .training-start-right {
            position: static;
            width: 100%;
            min-width: 100%;
            order: -1;
        }
        .training-overview-infos {
            flex-direction: column;
            gap: 30px;
        }
        .end, .students, .popular {
            padding: 20px;
        }
        .plans {
            grid-template-columns: 1fr;
        }
    }
</style>

@endsection