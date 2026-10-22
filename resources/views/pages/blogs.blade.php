@extends('layouts.app')

@section('title', 'blogs')

@section('content')

    <section class="blogs">
        <div class="blogs-start">
            <div class="blogs-start-text">
                <h1>Blogs</h1>
                <p>Join hundreds of students and professionals who have transformed their careers <span class="start-for-mobile">and are now working with leading companies across Algeria and beyond.</span></p>
            </div>
        </div>
    </section>
    <section class="recent">
        <h2>Recent blogs</h2>
        <div class="recent-blogs">
            <div class="recent-blogs-item">
                <img class="popular-item" src="{{ asset('images/popular-image.png') }}" alt="">
                <span class="popular-sticky-item">cisco</span>
                <h3>Getting Started with shadcn/ui: A Complete Guide</h3>
                <p>Whether you want to learn fundamental skills, boost your career with an international certification, or change your career.</p>
                <a href="{{ url('/') }}">Learn more <i class="bi bi-chevron-right"></i>##DATE##</a>
            </div>
            <div class="recent-blogs-item">
                <img class="popular-item" src="{{ asset('images/popular-image.png') }}" alt="">
                <span class="popular-sticky-item">cisco</span>
                <h3>Getting Started with shadcn/ui: A Complete Guide</h3>
                <p>Whether you want to learn fundamental skills, boost your career with an international certification, or change your career.</p>
                <a href="{{ url('/') }}">Learn more <i class="bi bi-chevron-right"></i>##DATE##</a>
            </div>
            <div class="recent-blogs-item">
                <img class="popular-item" src="{{ asset('images/popular-image.png') }}" alt="">
                <span class="popular-sticky-item">cisco</span>
                <h3>Getting Started with shadcn/ui: A Complete Guide</h3>
                <p>Whether you want to learn fundamental skills, boost your career with an international certification, or change your career.</p>
                <a href="{{ url('/') }}">Learn more <i class="bi bi-chevron-right"></i>##DATE##</a>
                
            </div>

        </div>
    </section>
    <section class="all-blogs">
        <div class="filter-blogs">
            <a href="#" class="active">All categories</a>
            <a href="#">Cyber security</a>
            <a href="#">Networking</a>
            <a href="#">AI</a>
        </div>
        <section class="recent">
            <div class="recent-blogs">
                <div class="recent-blogs-item">
                    <img class="popular-item" src="{{ asset('images/popular-image.png') }}" alt="">
                    <span class="popular-sticky-item">cisco</span>
                    <h3>Getting Started with shadcn/ui: A Complete Guide</h3>
                    <p>Whether you want to learn fundamental skills, boost your career with an international certification, or change your career.</p>
                    <a href="{{ url('/') }}">Learn more <i class="bi bi-chevron-right"></i>##DATE##</a>
                </div>
                <div class="recent-blogs-item">
                    <img class="popular-item" src="{{ asset('images/popular-image.png') }}" alt="">
                    <span class="popular-sticky-item">cisco</span>
                    <h3>Getting Started with shadcn/ui: A Complete Guide</h3>
                    <p>Whether you want to learn fundamental skills, boost your career with an international certification, or change your career.</p>
                    <a href="{{ url('/') }}">Learn more <i class="bi bi-chevron-right"></i>##DATE##</a>
                </div>
                <div class="recent-blogs-item">
                    <img class="popular-item" src="{{ asset('images/popular-image.png') }}" alt="">
                    <span class="popular-sticky-item">cisco</span>
                    <h3>Getting Started with shadcn/ui: A Complete Guide</h3>
                    <p>Whether you want to learn fundamental skills, boost your career with an international certification, or change your career.</p>
                    <a href="{{ url('/') }}">Learn more <i class="bi bi-chevron-right"></i>##DATE##</a>
                    
                </div>
                <div class="recent-blogs-item">
                    <img class="popular-item" src="{{ asset('images/popular-image.png') }}" alt="">
                    <span class="popular-sticky-item">cisco</span>
                    <h3>Getting Started with shadcn/ui: A Complete Guide</h3>
                    <p>Whether you want to learn fundamental skills, boost your career with an international certification, or change your career.</p>
                    <a href="{{ url('/') }}">Learn more <i class="bi bi-chevron-right"></i>##DATE##</a>
                    
                </div>
                <div class="recent-blogs-item">
                    <img class="popular-item" src="{{ asset('images/popular-image.png') }}" alt="">
                    <span class="popular-sticky-item">cisco</span>
                    <h3>Getting Started with shadcn/ui: A Complete Guide</h3>
                    <p>Whether you want to learn fundamental skills, boost your career with an international certification, or change your career.</p>
                    <a href="{{ url('/') }}">Learn more <i class="bi bi-chevron-right"></i>##DATE##</a>
                    
                </div>
                <div class="recent-blogs-item">
                    <img class="popular-item" src="{{ asset('images/popular-image.png') }}" alt="">
                    <span class="popular-sticky-item">cisco</span>
                    <h3>Getting Started with shadcn/ui: A Complete Guide</h3>
                    <p>Whether you want to learn fundamental skills, boost your career with an international certification, or change your career.</p>
                    <a href="{{ url('/') }}">Learn more <i class="bi bi-chevron-right"></i>##DATE##</a>
                    
                </div>
                <div class="recent-blogs-item">
                    <img class="popular-item" src="{{ asset('images/popular-image.png') }}" alt="">
                    <span class="popular-sticky-item">cisco</span>
                    <h3>Getting Started with shadcn/ui: A Complete Guide</h3>
                    <p>Whether you want to learn fundamental skills, boost your career with an international certification, or change your career.</p>
                    <a href="{{ url('/') }}">Learn more <i class="bi bi-chevron-right"></i>##DATE##</a>
                    
                </div>
                <div class="recent-blogs-item">
                    <img class="popular-item" src="{{ asset('images/popular-image.png') }}" alt="">
                    <span class="popular-sticky-item">cisco</span>
                    <h3>Getting Started with shadcn/ui: A Complete Guide</h3>
                    <p>Whether you want to learn fundamental skills, boost your career with an international certification, or change your career.</p>
                    <a href="{{ url('/') }}">Learn more <i class="bi bi-chevron-right"></i>##DATE##</a>
                    
                </div>

            </div>
        </section>
    </section>
    <style>
        @media (max-width:770px){
            .recent{
                padding: 16px!important;
                padding-top: 50px!important;
                h2{
                    font-size:20px!important;
                }
            }
            .all-blogs {
            
            .filter-blogs {
                margin-left: 0!important;
                background-color: #EBEBEB;   
                display: flex;
                justify-content: flex-start;
                padding: 3px!important;
                border-radius: 30px;
                gap: 4px;

                a {
                    padding: 4px 9px!important;
                    border-radius: 15px;
                    color: black;
                    text-decoration: none;
                    white-space: nowrap;
                    cursor: pointer;
                    font-size: 14px;
                    transition: background-color 0.2s, color 0.2s;

                    &:hover {
                        background-color: rgba(0, 0, 0, 0.05);
                    }

                    &.active {
                        background-color: #1D4ED8;   
                        color: white;
                    }
                }
            }
        }

        }
        .all-blogs {
            
            .filter-blogs {
                margin-left: 80px;
                background-color: #EBEBEB;   
                display: flex;
                max-width:500px;
                justify-content: flex-start;
                padding: 6px;
                border-radius: 30px;
                gap: 4px;

                a {
                    padding: 8px 18px;
                    border-radius: 15px;
                    color: black;
                    text-decoration: none;
                    white-space: nowrap;
                    cursor: pointer;
                    font-size: 14px;
                    transition: background-color 0.2s, color 0.2s;

                    &:hover {
                        background-color: rgba(0, 0, 0, 0.05);
                    }

                    &.active {
                        background-color: #1D4ED8;   
                        color: white;
                    }
                }
            }
        }
    </style>
    <style>
            .recent{
                padding: 80px;
                h2{
                    font-size: 30px;
                    font-weight: 600;
                    text-align: left;
                    padding-bottom: 20px;
                }
                .recent-blogs{
                    display: flex;
                    flex-wrap: wrap;
                    gap: 20px;
                    .recent-blogs-item{
                        display: flex;
                        flex-direction:column;
                        gap: 10px;
                        
                        border: 1px solid #E5E5E5;
                        border-radius: 20px;
                        a{
                            padding: 10px;
                        }
                        img{
                            min-width:350px;
                            border-top-left-radius: 20px;
                            border-top-right-radius: 20px;

                        }
                        p{
                            max-width:350px;
                            padding: 10px;
                        }
                        h3{
                            max-width: 350px;
                            padding: 10px!important;
                        }
                    }
                }
                
                
            }
            
            
        .blogs{
            background-image: linear-gradient(to left, rgba(173, 163, 163, 0), rgba(255, 255, 255, 255)), linear-gradient(to bottom, rgba(173, 163, 163, 0), rgba(255, 255, 255, 255)), url('/images/about-bg.png');
            .blogs-start-text{
            display: flex;
            flex-direction: column;
            text-align: center;
            padding: 100px 200px;
            h1{
                font-size: 30px;
                font-weight: 600;
                padding-bottom: 30px;
            }
            p{
                font-size: 14px;
                font-weight: 400;
                max-width: 70%;
                align-self: center;
            }
        }
        }
        @media (max-width: 770px){
                .blogs{
                    background-image: linear-gradient(to left, rgba(173, 163, 163, 0), rgba(255, 255, 255, 255)), linear-gradient(to bottom, rgba(173, 163, 163, 0), rgba(255, 255, 255, 255)), url('/images/about-bg.png');
                    .blogs-start-text{
                    display: flex;
                    flex-direction: column;
                    text-align: center;
                    padding: 10px 20px;
                    padding-top: 30px!important;
                    h1{
                        font-size: 30px;
                        font-weight: 600;
                        padding-bottom: 30px;
                    }
                    p{
                        font-size: 14px;
                        font-weight: 400;
                        max-width: 70%;
                        align-self: center;
                        .start-for-mobile{
                            display: none;

                        }
                    }
                }
                }
            }
    </style>
@endsection